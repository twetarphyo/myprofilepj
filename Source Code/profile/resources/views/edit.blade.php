@extends('layout.master')
@section('header')
<div class="main-bg-color main-color">
  @include('layout.header')
</div>
@endsection
@section('content')
<br><br>
<h4 style="text-align:center;">Edit Admin Information</h4>
<hr>
<form class="inline-form" method="post" style="margin-left:50px;">

  {{ csrf_field() }}

  @foreach($admi as $adm)
  <input type="hidden" name="id" class="form-control" value="{{$adm->id}}" style="width:400px;">
  <div class="form-group" style="float:left;padding-right:30px;">
  <label for="name">Name:</label>
  <input type="text" name="name" class="form-control" value="{{$adm->name}}" style="width:400px;">
  </div>

  <div class="form-group" style="float:left;padding-right:30px;">
  <label for="address">Address:</label>
  <input type="text" name="address" class="form-control" value="{{$adm->address}}" style="width:400px;">
  </div>

  <div class="form-group" style="float:left;padding-right:30px;">
  <label for="bachelor">Bachelor:</label>
  <input type="text" name="bachelor" class="form-control" value="{{$adm->bachelor}}" style="width:400px;">
  </div>

  <div class="form-group" style="float:left;padding-right:30px;">
  <label for="email">Email:</label>
  <input type="email" name="email" class="form-control" value="{{$adm->email}}" style="width:400px;">
  </div>

  <div class="form-group" style="float:left;padding-right:30px;">
  <label for="phone">Mobile No:</label>
  <input type="text" name="phone" class="form-control" value="{{$adm->phone}}" style="width:400px;">
  </div>

  <div class="form-group" style="float:left;padding-right:30px;">
  <label for="git">Git Hub:</label>
  <input type="text" name="git_link" class="form-control" value="{{$adm->git_link}}" style="width:400px;">
  </div>

  <div style="padding-left:500px;padding-right:100px; float:left;">
  <a href="{{ route('admin_info') }}" class="btn btn-info">Back</a>
  </div>
  <div>
  <button name="button" class="btn btn-info">Save</button>

</div>

@endforeach
</form>
@endsection
