@extends('layouts.app')
@section('content')

      <div class="block-30 item" style="background-image: url('images/bgimage1.jpg'); width:100%;" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">
              
              <h2 class="heading">{{'Budget friendly hostel in your location'}}</h2>
              <p><a href="#" class="btn py-4 px-5 btn-primary">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
   
<!-- ***************************************************************************** -->
<!-- search box start -->
  <div class="container">
      <div class="row mb-5">
        <div class="col-md-12">
          <div class="block-32">


            <form method="POST" action="{{ url('/searchresult')}}" >
            @csrf
              <div class="row">
               <!-- checkin -->
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-2">
                 <label for="checkin">Check In</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
               
                    <input type="text" name="checkin" id="checkin_date" class="form-control" value="{{$checkin}}">
               
                  </div>
                </div>
                <!-- checkout -->
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-2">
                  <label for="checkout">Check Out</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkout_date" class="form-control" value="{{$checkout}}">
                  </div>
                </div>
                    <!-- persons -->
                    <div class="col-md-6 mb-3  col-lg-2 mb-md-0">
                      <label for="checkin">persons</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>

                    <!-- district -->
                    <div class="col-md-3 col-lg-2">
                      <label for="checkin">District</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="district" onchange="show(this.value)" class="form-control">
                          @foreach($dist as $item)
                          <option value="{{$item->district}}">{{$item->district}}</option>
                          @endforeach
                        </select>
                      </div>
                      
                    </div>
                  
               <!-- city -->
                <div class="col-md-3 col-lg-2">
                      <label for="checkin">City</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select id="abc" name="city"  class="form-control">
                        <option value="{{$cit}}">{{$cit}}</option>
                        </select>
                      </div>
                      </div>
                      <!-- search -->
                <div class="col-md-6 col-lg-1 align-self-end">
                  <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-crosshairs"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- search result start -->
      

      <div class=" site-section bg-light" id="blog">
    
    <div class="container">
      <div class="row">
      
      @for($x=0; $x < count($records); $x++)
        <div class="col-md-12 mb-4 jumbotron ">
        <form method="post"  action="{{ url('/booking') }}" enctype="multipart/form-data">
        @csrf
         <input type="hidden" id="name"  name="id" value="{{$id[$x]['id']}}">
          <div class="block-3 d-md-flex ">
            <a href="{{url('hostels/'.$id[$x]['id'])}}" class="resimg"><img src="{{ url('hostelimages/'.$records[$x]['images']) }} " width="250px;" height="200px"></a>
            <div class="text ">
              <h2 class="heading"><a href="{{url('hostels/'.$id[$x]['id'])}}">{{$records[$x]['hostel_name']}}</a></h2>
              <p>{{$records[$x]['description'] }}</p>
              <p>{{$records[$x]['address'] }}</p>
              <p><a href="{{url('hostels/'.$id[$x]['id'])}}">Read More...</a></p>
              <button type="submit"  value="book" class="btn btn-danger active">Book</button>
            </div>
          </div> 
          </form> 
        </div>    
      @endfor
      </div>
        </div>
          </div>
      <!-- search result end -->
      <!-- model starts -->
      

    

      <!-- model end -->
      @section('ajaxscript')
	            
                function show(x){ 
                        $.ajax({
                        url:"{{ url('/showcity') }}"+"/"+x,
                        type:'GET',
                        success:function(data){
                          console.log(data);
                            var len = data.length;
                            console.log(len);
                            var sel = '';
                            for(i=0;i < len;i++)
                            {
                              sel = sel+'<option value="'+data[i]['city']+'">'+data[i]['city']+'</option>';
                            }
                            console.log(sel);
                            $('#abc').html(sel);
                        }
                    }
                            );
                }    
              
           @endsection
