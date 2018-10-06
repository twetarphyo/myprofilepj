@extends('layout.master')
@section('header')
<div class="main-bg-color main-color">
  @include('layout.header')
</div>
@endsection
@section('content')
<br><br>
<!-- $showProjects=true; -->
@foreach($admin as $adm)
<div style="padding-left:40px;">
<a href="{{ route('admin_edit', $adm->id)}}" class="btn btn-info">Edit</a>
</div><br>
<table class="table table-reponsive "  style="margin-left:30px; border: 1px solid gray;">
  <tr>
    <th>Name:</th>
    <td>{{$adm->name}}</td>
  </tr>
  <tr>
    <th>Address:</th>
    <td>{{$adm->address}}</td>
  </tr>
  <tr>
    <th>Bachelor:</th>
    <td>{{$adm->bachelor}}</td>
  </tr>
  <tr>
    <th>Email:</th>
    <td>{{$adm->email}}</td>
  </tr>
  <tr>
    <th>Phone:</th>
    <td>{{$adm->phone}}</td>
  </tr>
  <tr>
    <th>Git_link:</th>
    <td><a href="https://www.github.com/{{$adm->git_link}}">{{$adm->git_link}}</a></td>
  </tr>

</table>
  @endforeach
<br>
@endsection
