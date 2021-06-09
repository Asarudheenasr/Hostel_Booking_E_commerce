@extends('layouts.admin')

@section('content')
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
           
            <!--custom chart end-->
            <div class="row mt">
              <!-- add hostel panel -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="grey-panel pn donut-chart">
                  <div class="grey-header">
                    <a href="{{url('/hosteladd')}}"><h5>ADD HOSTELS</h5>
                  </div>
                  <div>
                  <img src="img/Hostel-Logo.png" width="150" height="150"></div></a>
                  <div class="row">
                    <div class="col-sm-6 col-xs-6 goleft">
                      
                    </div>
                    <div class="col-sm-6 col-xs-6">
                     
                    </div> 
                  </div> 
                </div>
                <!-- /grey-panel -->
              </div>
              <!-- /col-md-4-->
              <!-- user list -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                   <a href="{{url('/userlist')}}"> <h5>USERS LIST</h5>
                  </div>
                 <div>
                  <img src="img/userlist.png" width="150" height="150">

                 </div> </a>
                 
                  <footer>
                    <div class="pull-left">
                      
                    </div>
                    <div class="pull-right">
                      
                    </div>
                  </footer>
                </div>
                <!--  /darkblue panel -->
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <!-- REVENUE PANEL -->
                <!-- booking panel -->
                <div class="green-panel pn">
                  <div class="green-header">
                    <a href="#"><h5>BOOKINGS</h5>
                  </div>
                  
                  <img src="img/bookin2.png" width="150" height="150">  
                  
                </div></a>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
            
              <!-- WEATHER PANEL -->
              <div class="col-md-12 mb">
                <div class="weather pn">
                  <i class="fa fa-cloud fa-4x"></i>
                  <h2>11º C</h2>
                  <h4>BUDAPEST</h4>
                </div>
              </div>
            
              <!-- /col-md-4-->
              <!-- DIRECT MESSAGE PANEL -->
              <!-- <div class="col-md-8 mb">
                <div class="message-p pn">
                  <div class="message-header">
                    <h5>DIRECT MESSAGE</h5>
                  </div>
                  <div class="row">cente
                    <div class="col-md-3 centered hidden-sm hidden-xs">
                      <img src="img/ui-danro.jpg" class="img-circle" width="65">
                    </div>
                    <div class="col-md-9">
                      <p>
                        <name>Dan Rogers</name>
                        sent you a message.
                      </p>
                      <p class="small">3 hours ago</p>
                      <p class="message">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                      <form class="form-inline" role="form">
                        <div class="form-group">
                          <input type="text" class="form-control" id="exampleInputText" placeholder="Reply Dan">
                        </div>
                        <button type="submit" class="btn btn-default">Send</button>
                      </form>
                    </div>
                  </div>
                </div> -->
                <!-- /Message Panel-->
              
              <!-- /col-md-8  -->
           
            <div class="row">
             
              <!-- /col-md-4 -->
              <div class="col-md-4 mb">
                <!-- INSTAGRAM PANEL -->
                <div class="instagram-panel pn">
                  <i class="fa fa-instagram fa-4x"></i>
                  <p>@THISISYOU<br/> 5 min. ago
                  </p>
                  <p><i class="fa fa-comment"></i> 18 | <i class="fa fa-heart"></i> 49</p>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
        
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
          <div class="col-lg-3 ds">
            <!--COMPLETED ACTIONS DONUTS CHART-->
            <div class="donut-main">
              <h4>COMPLETED ACTIONS & PROGRESS</h4>
              <canvas id="newchart" height="130" width="130"></canvas>
              <script>
                var doughnutData = [{
                    value: 90,
                    color: "#4ECDC4"
                  },
                  {
                    value: 30,
                    color: "#fdfdfd"
                  }
                ];
                var myDoughnut = new Chart(document.getElementById("newchart").getContext("2d")).Doughnut(doughnutData);
              </script>
            </div>
            <!--NEW EARNING STATS -->
            <div class="panel terques-chart">
              <div class="panel-body">
                <div class="chart">
                  <div class="centered">
                    <span>Bookings</span>
                    
                  </div>
                  <br>
                  <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
                </div>
              </div>
            </div>
            <!--new earning end-->
            <!-- CALENDAR-->
            <div id="calendar" class="mb">
              <div class="panel green-panel no-margin">
                <div class="panel-body">
                  <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                    <div class="arrow"></div>
                    <h3 class="popover-title" style="disadding: none;"></h3>
                    <div id="date-popover-content" class="popover-content"></div>
                  </div>
                  <div id="my-calendar"></div>
                </div>
              </div>
            </div>
            <!-- / calendar -->
          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    @endsection

