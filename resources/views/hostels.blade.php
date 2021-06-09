@extends('layouts.app')
@section('content')
<div class="container">

 <div class="imgbox col-md-12 col-sm-12">
 @foreach($img as $image)
  <div class="img col-md-12">

    <img id="img" src="{{ url('hostelimages/'.$image->images)}}">
       
  </div>
 @endforeach
 </div>

</div>
@endsection

