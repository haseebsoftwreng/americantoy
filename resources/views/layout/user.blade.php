   <link rel="stylesheet" href="{{asset('user/css/bootstrap.css')}}">
   <link rel="stylesheet" href="{{asset('user/css/style.css')}}">
   <link rel="stylesheet" href="{{asset('user/css/et-line-fonts.css')}}" type="text/css">
   <link rel="stylesheet" href="{{asset('user/css/animate.min.css')}}" type="text/css">
   <link rel="stylesheet" id="color" href="{{asset('user/css/colors/defualt.css')}}">
   
   <!-- JavaScripts -->
   <script src="{{asset('user/js/modernizr.js')}}"></script>

    <div class="main-content-area clearfix">
        <section class="section-padding no-top gray">
           <!-- Main Container -->
           <div class="container">
              <!-- Row -->
              <div class="row">
                 <!-- Middle Content Area -->
                 <div class="col-md-12 col-xs-12 col-sm-12 mt-5">
                    <section class="search-result-item">
                       <a class="image-link" href="#"><img class="image center-block" alt="" src="{{asset('user/images/user.png')}}"> </a>
                       <div class="search-result-item-body">
                          <div class="row">
                             <div class="col-md-5 col-sm-12 col-xs-12">
                                <h4 class="search-result-item-heading"><a href="#">{{Auth::user()->name}}</a></h4>
                                <p class="info">
                                   <span><a href="#"><i class="fa fa-user "></i>Profile </a></span>
                                   {{-- <span><a href="javascript:void(0)"><i class="fa fa-edit"></i>Edit Profile </a></span> --}}
                                </p>
                                {{-- <p class="description">You last logged in at: 14-01-2017 6:40 AM [ USA time (GMT + 6:00hrs)</p>
                                <span class="label label-warning">Paid Package</span>
                                <span class="label label-success">Dealer</span> --}}
                             </div>
                             <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="row ad-history">
                                   <div class="col-md-4 col-sm-4 col-xs-12">
                                      <div class="user-stats">
                                         <h2>{{Auth::user()->orders->where('completed',false)->count()}}</h2>
                                         <small>New Order</small>
                                      </div>
                                   </div>
                                   <div class="col-md-4 col-sm-4 col-xs-12">
                                      <div class="user-stats">
                                         <h2>{{Auth::user()->orders->where('completed',true)->count()}}</h2>
                                         <small>Completed</small>
                                      </div>
                                   </div>
                                   {{-- <div class="col-md-4 col-sm-4 col-xs-12">
                                      <div class="user-stats">
                                         <h2>413</h2>
                                         <small>Favourites Ads</small>
                                      </div>
                                   </div> --}}
                                </div>
                             </div>
                          </div>
                       </div>
                    </section>
                    <div class="dashboard-menu-container">
                       <ul>
                          <li class="active">
                             <a href="{{route('user.order.create')}}">
                                <div class="menu-name"> New Order </div>
                             </a>
                          </li>
                          <li>
                             <a href="{{route('user.order.index')}}">
                                <div class="menu-name">Completed Order</div>
                             </a>
                          </li>
                         
                        
                          <li>
                             <a href="{{route('logout')}}">
                                <div class="menu-name">Logout</div>
                             </a>
                          </li>
                       </ul>
                    </div>
                 </div>
                 <!-- Middle Content Area  End -->
              </div>
              <!-- Row End -->
           </div>
           <!-- Main Container End -->
        </section>
      
     </div>

     <script type="text/javascript" charset="utf8" src="{{asset('user/datatable/jquery.dataTables.js')}}"></script>
