<template>
	<div>
		<div class="card">
			<div class="card-header">Find Tutors</div>
			<div class="card-body">
				<datepicker class="my-datepicker" calendar-class="my-datepicker_calendar" :disabledDates="disabledDates"  :format="customDate" v-model="time" :inline=true ></datepicker>
			</div>
			


		<div class="card mt-5">
			<div class="card-header">Tutors</div>
			<div class="card-body">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Photo</th>
							<th>Name</th>
							<th>Expertise</th>
							<th>Booking</th>
						</tr>

					</thead>
						<tbody>
							

							<tr v-for="(d,index) in tutors" v-if="!loading">
								<th scope="row">{{index+1}}</th>
								<td>
									<img :src="'/images/'+ d.tutor.image" width="80">
								</td>
								<td>{{d.tutor.name}}</td>
								<td>{{d.tutor.subject}}</td>
								<td>
									<a :href="'/new-lesson/'+ d.user_id+'/'+d.date "><button class="btn btn-success">Book Lesson</button></a>
								</td>
							</tr>
							<td v-if="tutors.length==0">No tutors available for {{this.time}}</td>
						</tbody>

				
				</table>
				<div class="text-center">
					<pulse-loader :loading="loading" :color="color" :size="size"></pulse-loader>
				</div>


					
				</div>
			</div>
		</div>
	</div>
</template>

<script type="text/javascript">
	import datepicker from 'vuejs-datepicker';
	import moment from 'moment';
	import PulseLoader from 'vue-spinner/src/PulseLoader.vue';
	export default{
		data(){
			return{
				time:'',
				tutors:[],
				loading:false,
				disabledDates:{
					to:new Date(Date.now() - 86400000)
				},

				

			}
		},
		components:{
			datepicker,
			PulseLoader
			
		},
		methods:{
			customDate(date){
				this.loading =true
				
				this.time = moment(date).format('YYYY-MM-DD');
				axios.post('/api/findtutors',{date:this.time}).
				then((response)=>{

					setTimeout(()=>{  
						this.tutors =response.data
						this.loading=false
					},1000)
					


				}).catch((error)=>{alert('error')})
			}
		},
		mounted(){
			//let time = moment(date).parseZone("Europe/London");
			this.loading=true
			axios.get('/api/tutors/today').then((response)=>{
				this.tutors = response.data
				this.loading=false
				
			})
		}
	}
</script>
<style scoped>
	.my-datepicker >>> .my-datepicker_calendar{
		width: 100%;   
		height: 330px;
		font-weight: bold;
	}

</style>
