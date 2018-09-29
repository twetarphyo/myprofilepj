@extends('layout.master')
@section('header')
<div class="main-bg-color main-color">
  @include('layout.header')
</div>
@endsection
@section('content')
<br><br>
<h4 style="text-align:center;">Create New Post</h4>
<hr>
<br>
<form class="form-group" method="post" style="padding-left:420px;">
  {{ csrf_field() }}
  <label for="tiltle" style="float:left; padding-right:10px;"><strong>Post Title</strong></label>
  <input type="text" name="title" class="form-control" value="" style="width:400px;">
  <br>
  <label for="content" style="float:left;padding-right:19px;"><strong>Content</strong></label>
  <!-- <input type="text" name="content" class="form-control" value="" style="width:400px;"> -->
  <textarea name="content" class="form-control" style="width:400px;"></textarea>
  <br>
  <div style="padding-left:180px;;padding-right:50px;float:left;">
    <a href="{{ route('posts') }}" class="btn btn-info">Back</a>
  </div>
  <div>
      <button class="btn btn-info">Save</button>
  </div>
</form>
@endsection
