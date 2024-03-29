@extends('layouts.master')
@section('title')
Welcome 
@endsection

@section('content')
      <div class="wrapper">
        <nav class="sidebar">
            <div class="sidebar-content ">
                <a class="sidebar-brand" href="http://icmcng.org">
                  
                    <span class="align-middle"><img src="/assets/img/logos/logo.jpg" alt="" height="60"></span>
                </a>

                <ul class="sidebar-nav">

                    <li class="sidebar-item active">
                        <a href="#dashboards" data-toggle="collapse" class="sidebar-link">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                        </a>
                        <ul id="dashboards" class="sidebar-dropdown list-unstyled collapse show">
							 <li class="sidebar-item active"><a class="sidebar-link">Home</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="users/profile/{{Auth::User()->slug}}">My Profile</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="users">Members</a></li>
                          <!--  <li class="sidebar-item"><a class="sidebar-link" href="dashboard-social.html">Social</a>-->
                            </li>
                        </ul>
                    </li>

                </ul>

             <div class="sidebar-bottom d-none d-lg-block">
                    <div class="media">
					<img class="rounded-circle mr-3" src="/uploads/avatars/{{Auth::User()->avatar}}" alt="{{Auth::User()->name}}" width="40" height="40">
                        <div class="media-body">
                        <h5 class="mb-1">{{Auth::user()->name}}</h5>
                            <div>
                                <i class="fas fa-circle text-success"></i>&nbsp; Member {{Auth::user()->member_id}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light bg-white">
                <a class="sidebar-toggle d-flex mr-2" >
                    <i  class="hamburger align-self-center"></i>
                </a>

            <form action="{{route('search')}}" method="POST"role="search" class="form-inline d-none d-sm-inline-block">
                {{ csrf_field() }}
                    <input class="form-control form-control-no-border mr-sm-2" type="text" name="q" placeholder="Search other members..." aria-label="Search">
               
                </form>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">

                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="messagesDropdown">

                                <div class="list-group">


                                    <li class="nav-item dropdown">
                                        <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                                            <i class="align-middle" data-feather="settings"></i>
                                        </a>

                                        <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
										<img src="/uploads/avatars/{{Auth::User()->avatar}}" class="avatar img-fluid rounded-circle mr-1" alt="{{Auth::User()->name}}" /> <span class="text-dark">{{Auth::user()->name}}</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a style="color:green" class="dropdown-item" href="Javascript:void()"><i class="align-middle mr-1"
                                        data-feather="pie-chart"></i> Online</a>
                                        <a style="color:red" class="dropdown-item" href="Javascript:void()"><i class="align-middle mr-1"
										data-feather="pie-bar"></i> Membership ID: {{Auth::User()->member_id}}</a>
                                            <a class="dropdown-item" href="users/profile/{{$user->slug}}"><i class="align-middle mr-1"
										data-feather="user"></i> Profile</a>
                                              
                                           <!------ <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="pages-settings.html">Settings & Privacy</a>
                                            <a class="dropdown-item" href="#">Help</a>-->
                                           <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sign Out') }}
                                    </a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                        </div>
                                    </li>
                    </ul>
                    </div>
            </nav>

            <main class="content" style="background-color:#f9fcf9">
                <div class="container-fluid p-0">
                      <div class="row">
                        <div class="col-md-4 mb-3"></div>
                        <div class="col-md-4 mb-3">
                            @if ($errors->any())
                       <div style="color:red">{{ implode('', $errors->all(':message')) }}</div>  
                            @endif
                        </div>
                        <div class="col-md-4 mb-3"></div>
                      </div>

					<div class="row">

							<div class="col-md-10 mb-3 d-flex">
							<div class="card flex-fill">
								<div class="card-header">
									<div class="card-actions float-right">
										
									</div>
									<h5 class="card-title mb-0">Welcome</h5>
								</div>
								<div class="card-body d-flex">
							<p style="font-size:14px; line-height:1.4">Hello {{$user->name}}, welcome to ICMC membership portal. Your Membership ID is <span style="color:red;">{{$user->member_id}}.</span> <br>
							To access the portal, your username is your membership ID and your password is your chosen password during registration. <br>
							Proceed to update your profile, while the admin verifies your authencity as a member. <br>
							A welcome mail containing your Membership ID has been sent to you, should in case you forgot your ID. <br>
						    Kindly read  our <a href=""><span style="color:green">terms of use</span> </a>. Should you have further enquiry kindly mail us at icmc@gmail.com.
						</p>
								</div>
							</div>
						</div>
					</div>

                
                    
                    	<div class="row">

				
						<div class="col-md-6 mb-3">
							<div class="card flex-fill">
								<div class="card-header">
									<div class="card-actions float-right">
									
									</div>
									<h5 class="card-title mb-0">Announcements</h5>
								</div>
								<div class="card-body d-flex">
									
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<div class="card-actions float-right">
										
									</div>
									<h5 class="card-title mb-0">Latest Users</h5>
								</div>
								<div class="card-body">
									<div class="align-self-center w-100">
										@foreach ($latestUsers as $fresh)
										<p style="line-height:1.5; color:#000; font-size:15px; !important;">
											{{$fresh->name}}
										</p>		
										@endforeach								
														

									</div>
								</div>
							
							</div>
						</div>
						<div class="col-md-2 mb-3"></div>
					
					</div>

                   
                    

                  

            </main>

         <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-left">
                            <ul class="list-inline">

                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Terms of Service</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 text-right">
                            <p class="mb-0">
                                &copy; 2019 - <a href="http://icmcng.org" class="text-muted">ICMC</a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
            </div>
            </div> 
@endsection
 