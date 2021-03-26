<div class="page-wrap">
                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="{{url('/dashboard')}}">
                            <div class="logo-img">
                              
                            </div>
                            <span class="text">TSS</span>
                        </a>
                        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>
                    
                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-lavel">Navigation</div>
                                <div class="nav-item active">
                                    <a href="{{url('dashboard')}}"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>
                              <!--   <div class="nav-item">
                                    <a href="pages/navbar.html"><i class="ik ik-menu"></i><span>Navigation</span> <span class="badge badge-success">New</span></a>
                                </div> -->

                                @if(auth()->check()&& auth()->user()->role->name === 'admin')
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Subject</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('subject.create')}}" class="menu-item">Create</a>
                                        <a href="{{route('subject.index')}}" class="menu-item">View</a>
                                       
                                    </div>
                                </div>
                                @endif

                                  @if(auth()->check()&& auth()->user()->role->name === 'admin')
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Doctor</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('doctor.create')}}" class="menu-item">Create</a>
                                        <a href="{{route('doctor.index')}}" class="menu-item">View</a>
                                       
                                    </div>
                                </div>
                                @endif
                                  @if(auth()->check()&& auth()->user()->role->name === 'doctor')
                                   <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Lesson Time</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('lesson.create')}}" class="menu-item">Create</a>
                                        <a href="{{route('lesson.index')}}" class="menu-item">Check</a>
                                       
                                    </div>
                                </div>
                                @endif

                                @if(auth()->check()&& auth()->user()->role->name === 'doctor')
                                   <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Parents</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('parents.today')}}" class="menu-item">Lessons Today</a>
                                        <a href="{{route('tracked.parents')}}" class="menu-item">Lesson and Progress History</a>
                                       
                                    </div>
                                </div>
                                @endif

                               


                                  @if(auth()->check()&& auth()->user()->role->name === 'admin')
                                 <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Lessons</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('parent')}}" class="menu-item">Lesson's Today</a>
                                        <a href="{{route('all.lessons')}}" class="menu-item">All Time Lesson</a>
                                       
                                    </div>
                                </div>
                                
                                @endif

                                <div class="nav-item active">
                                    <a onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" href="{{ route('logout') }}"><i class="ik ik-power dropdown-icon"></i><span>Logout</span></a>
                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                           
                                
                            </nav>
                        </div>
                    </div>
                </div>