@extends('layouts.admin')
@section('content')
<div class='container'>
<div class="table-responsive tab ">
<div class='col-sm-2 back-btn'><div class="row col-lg-1 col-sm-2"><a href="/adminindex"><i class="fa fa-arrow-left fa-2x"   aria-hidden="true"></a></i></div></div>
<table class="table table-hover  table-dark table-striped">
    <thead>
        <tr>
        <th>id</th>
        <th>hostel_name</th>
        <th>District</th>
        <th>City</th>
        
        
        <th>Bed capacity</th>
        <th>ac</th>
        <th>food</th>
        <th>men</th>
        <th>woman</th>
        <th>wifi</th>
        <th>shelf</th>
        <th>parking</th>
        <th>kitchen</th>
        <th>laundry</th>
        <th>fee</th>
        <th>mobile</th>
        

        </tr>
    </thead>
    <tbody>
    @foreach($hostels as $hostel)
    <tr>
        <td>{{$hostel->id}}</td>
        <td>{{$hostel->hostel_name}}</td>
        <td>{{$hostel->district}}</td>
        <td>{{$hostel->city}}</td>
        
      
        <td>{{$hostel->bedcapacity}}</td>
        <td>{{$hostel->ac}}</td>
        <td>{{$hostel->food}}</td>
        <td>{{$hostel->men}}</td>
        <td>{{$hostel->woman}}</td>
        <td>{{$hostel->wifi}}</td>
        <td>{{$hostel->shelf}}</td>
        <td>{{$hostel->parking}}</td>
        <td>{{$hostel->kitchen}}</td>
        <td>{{$hostel->laundry}}</td>
        <td>{{$hostel->fee}}</td>
        <td>{{$hostel->mobile}}</td>
        <td><a href="deletehostel/{{$hostel->id}}"><i class="fa fa-trash fa-2x"></i></a>&emsp;<a href="{{ url('edithostel/'.$hostel->id) }}"><i class="fa fa-edit fa-2x"></i></a></td>
 
    </tr>
    @endforeach
    </tbody>
</table>
</div>
</div>
@endsection