<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="Dashboard">
<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
<title></title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
    <script href="{{ asset('bootstrap/css/bootstrap.min.js')}}"></script>
  <link href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
  <link href="{{ asset('bootstrap/css/bootstrap.css')}}">

  <!--external css-->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/zabuto_calendar.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('lib/gritter/css/jquery.gritter.css')}}" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/xstyle.css')}}" rel="stylesheet">
  <link href="{{ asset('css/style-responsive.css')}}" rel="stylesheet">
  <script src="{{ asset('lib/chart-master/Chart.js')}}"></script>
  <script href="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
  
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <nav class="fixed-top">
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title=""></div>
      </div>
      <!--logo start-->
      
      <a href="{{ url('/adminindex') }}" class="logo nav-brand"><b>hostel<span>seekers</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- bookingstart -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="">
              <i class="fa fa-tasks"></i>
              <!-- <span class="badge bg-theme">4</span> -->
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">Booking Request</p>
              </li>
              <li>
                <a href="">
                  <div class="task-info">
                    <div class="desc">xyz</div>
                  </div>
                </a>
              </li>
             
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- bookings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="">
              <i class="fa fa-envelope-o"></i>
              <!-- <span class="badge bg-theme">5</span> -->
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green"> messages</p>
              </li>
              <li>
                <a href="">
                  <!-- <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message"> -->
                  Hi mate, how is everything?
                  </span>
                  </a>
             
              <li>
                <a href="index.html#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->

        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">

        <ul class="nav pull-right top-menu">
        <li class="nav-item"><a class="nav-link logout" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                       
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
        </ul>
      
      </div>
    </header></nav>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
        <!-- propic -->

          <p class="centered"><a href="#"><img src="{{ url('proupload/'.Auth::user()->proimage) }}" class="img-circle" width="80"></a></p>
          <h5 class="centered">{{Auth::user()->name}}</h5>
          
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-dashboard"></i>
              <span>Hostels</span>
              </a>

              <ul class="sub">
              <li><a href="{{ url('/hostelist') }}">Hostel list</a></li>
              <li><a href="{{url('/hosteladd')}}">Add new</a></li>
              
            </ul>
   
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-users"></i>
              <span>users</span>
              </a>
            <ul class="sub">
              <li><a href="{{url('/userlist')}}">Details</a></li>
              <li><a href="">Approved</a></li>
              <li><a href="">Rejected</a></li>
            </ul>
          </li>
          <li class="mt">
            <a class="" href="">
              <i class="fa fa-dashboard"></i>
              <span>queries</span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    
    <!--sidebar end-->
   
    @yield('content')

    <!--footer start-->
    <footer class="site-footer">
        
      <div class="text-center">
       
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
      
        </div>
        <a href="" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>

  <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{ asset('lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <script src="{{asset('lib/jquery.sparkline.js')}}"></script>
  <!--common script for all pages-->
  <script src="{{asset('lib/common-scripts.js')}}"></script>
  <script type="text/javascript" src="{{asset('lib/gritter/js/jquery.gritter.js')}}"></script>
  <script type="text/javascript" src="{{asset('lib/gritter-conf.js')}}"></script>
  <!--script for this page-->
  <script src="{{asset('lib/sparkline-chart.js')}}"></script>
  <script src="{{asset('lib/zabuto_calendar.js')}}"></script>
  <script type="text/javascript"> 
    // $(document).ready(function() {
    //   var unique_id = $.gritter.add({
    //     // (string | mandatory) the heading of the notification
    //     title: 'Welcome to Dashio!',
    //     // (string | mandatory) the text inside the notification
    //     text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
    //     // (string | optional) the image to display on the left
    //     image: 'img/ui-sam.jpg',
    //     // (bool | optional) if you want it to fade out on its own or just sit there
    //     sticky: false,
    //     // (int | optional) the time you want it to be alive for before fading out
    //     time: 8000,
    //     // (string | optional) the class name you want to apply to that specific message
    //     class_name: 'my-sticky-class'
    //   });

    //   return false;
    // });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
    @yield('pagescripts')
  </script>
</body>
</html>