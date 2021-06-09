@extends('layouts.admin')
@section('content')
<div class='container'>
<div class="table-responsive tab">
<div class='col-sm-2 back-btn'><div class="row col-lg-1 col-sm-2"><a href="/adminindex"><i class="fa fa-arrow-left fa-2x"   aria-hidden="true"></a></i></div></div>
<table class="table table-hover  table-dark table-striped">
    <thead>
        <tr>
        <th>name</th>
        <th>email</th>
        <th>mobile</th>
        <th>age</th>
        <th>marital_status</th>
        <th>occupation</th>
        <th>proimage</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->mobile}}</td>
        <td>{{$user->age}}</td>
        <td>{{$user->marital_status}}</td>
        <td>{{$user->occupation}}</td>
        <td><img src=" {{ url('proupload/'.$user->proimage) }} "  width="45cm" height="45cm"></td>
 
    </tr>
    @endforeach
    </tbody>
</table>
</div>
</div>
@endsection
