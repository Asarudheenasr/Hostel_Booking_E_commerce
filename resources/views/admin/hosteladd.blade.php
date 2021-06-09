@extends('layouts.admin')
@section('content')

<div class="container xcard">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-sm-12">
            <div class="card" style="height:auto;">
                <div class="card-header col-lg-12 col-sm-12">{{__('Add Hostel Details')}}<div class="row col-lg-1 col-sm-2"><a href="/adminindex"><i class="fa fa-arrow-left fa-2x"   aria-hidden="true"></a></i></div></div>
                
                @foreach($errors->all() as $error)
                <ul>
                <li>{{$error}}</li>
                </ul>
                @endforeach
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                     
                      <form method='POST' enctype="multipart/form-data" action="{{url('inserthostel')}}"> <!--acton insertpdt "routes(web.php)" to the controller-->
                     <input type="hidden" name="id" value="id">
                      @csrf
                      <!-- Hostel name -->
                      <div  class="form-group row">
                      <label for="hostel_name" class="col-md-4 col-form-label text-md-right">{{ __('Hostel name') }}</label>
                             <div class="col-md-3">
                      <input name='hostel_name' id="hostel_name" type="text" class="form-control  required  autofocus">
                      </div>
                            </div>
                            <!--  district city-->
                      <div class="form-group row">
                      <label for="district" class="col-md-4 col-form-label text-md-right">{{ __('District') }}</label> 
                            <div class="col-md-2">
                            <input name='district' id="district" type="text"  class="form-control  required  autofocus">
                            </div>
                            <label for="city" class="col-md-1 col-form-label text-md-right">{{ __('City') }}</label>
                            <div class="col-md-2">
                            <input name='city' id="city" type="text" class="form-control  required  autofocus">
                            </div>
                      </div>  
                         <!-- address -->
                      <div class="form-group row">
                      <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('address') }}</label> 
                            <div class="col-md-4">
                           <textarea name="address" rows="4" cols="25"  class="form-control  required  autofocus"></textarea>
                            </div>
                      </div>
                        <!-- description -->
                      <div class="form-group row">
                      <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label> 
                            <div class="col-md-4">
                           <textarea name="description" rows="4" cols="25"  class="form-control  required  autofocus"></textarea>
                            </div>
                      </div>

                      <!-- Mobile Number -->

                      <div  class="form-group row">
                      <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>
                             <div class="col-md-3">
                      <input name='mobile' id="mobile" type="tel"  class="form-control  required  autofocus">
                      </div>
                            </div>
                      <!-- Bed Capacity -->
                      <div  class="form-group row">
                      <label for="bed capacity" class="col-md-4 col-form-label text-md-right">{{ __('Bed Capacity') }}</label>
                             <div class="col-md-1">
                      <input  name='bedcapacity' id="bed_capacity" type="number" class="form-control  required  autofocus">
                      </div>
                            </div>
                            <!-- fee -->
                            <div class="form-group row">
                      <label for="fee" class="col-md-4 col-form-label text-md-right">{{ __('fee') }}</label> 
                            <div class="col-md-2">
                            <input  name='fee' id="fee" type="number"  class="form-control  required  autofocus">
                            </div>
                      </div>
                    <!-- chechbox -->
                    <div class="form-group row">
                       <label for="feature" class="col-md-4 col-form-label text-md-right">{{('select facilities')}}</label>
                       <div class="col-md-4 row">
                        <!-- permitted for -->
                        <div class="col-md-4">
                        <input  name="men" type="checkbox" id="men" value="yes">
                        <label for="men">{{__('men')}}</label>
                        </div>
                        <div class="col-md-4">
                        <input  name="woman" type="checkbox" id="woman" value="yes">
                        <label for="woman">{{__('woman')}}</label>
                        </div>
                       <!-- ac -->
                       <div class="col-md-3">
                       <input  name="ac" type="checkbox" id="ac" value="yes">
                        <label for="ac">{{__('A/C')}}</label>
                        </div>
                        <!-- wifi -->
                        <div class="col-md-4">
                        <input name="wifi" type="checkbox" id="wifi"  value="yes" >
                        <label for="wifi">{{__('wifi')}}</label>
                        </div>
                        <!-- mess -->
                        <div class="col-md-4">
                        <input  name="food" type="checkbox" id="food" value="yes">
                        <label for="food">{{__('food')}}</label>
                        </div>
                        <!--shelf  -->
                        <div class="col-md-4">
                        <input name="shelf" type="checkbox" id="shelf"  value="yes">
                        <label for="shelf">{{__('shelf')}}</label>
                        </div>
                        <!--parking  -->
                        <div class="col-md-4">
                        <input name="parking" type="checkbox" id="parking"  value="yes">
                        <label for="parking">{{__('parking')}}</label>
                        </div>
                        <!--   kitchen -->
                        <div class="col-md-4">
                        <input name="kitchen" type="checkbox" id="kitchen"  value="yes">
                        <label for="kitchen">{{__('kitchen')}}</label>
                        </div>

                        <!--   laundry -->
                        <div class="col-md-4">
                        <input name="laundry" type="checkbox" id="laundry"  value="yes">
                        <label for="laundry">{{__('laundry')}}</label>
                        </div>
                    	
                       </div>
                    </div>

                        <!-- image -->
                      <div class="form-group row">
                      <label for="image_upload" class="col-md-4 col-form-label text-md-right">{{ __('choose image') }}</label> 
                            <div class="col-md-6">
                            
                            <input  name='image[]' id="image" type="file"  class="form-control required  ">
                            <div id="newfield"></div>
                            <input  name="add" type="button"  id="addbtn" value="addmore">
                            </div>
                      </div>

                      <!-- submit -->
                      <div class="form-group row mb-0">
                            <div class="col-md-6  offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('SUBMIT') }}
                                </button>
                            </div>          
                </div>
                
            </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('pagescripts')

    $(document).ready(function () {
 $("#addbtn").click(function(){
 $("#newfield").append('<input  type="file" name="image[]" class="form-control" required>');
});
 });

@endsection