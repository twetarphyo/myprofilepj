@extends('layout.master')
@section('header')
<div class="main-bg-color main-color">
  @include('layout.header')
</div>
@endsection
@section('content')
<br><br>
<h4 style="text-align:center;">Edit Post</h4>
<br>

<form class="form-group" method="post" style="padding-left:420px;">
  {{ csrf_field() }}
  @foreach($pos as $p)
  <label for="tiltle" style="float:left; padding-right:10px;"><strong>Post Title</strong></label>
  <input type="text" name="title" class="form-control" value="{{$p->title}}" style="width:400px;">
  <br>
  <label for="content" style="float:left;padding-right:19px;"><strong>Content</strong></label>
  <!-- <input  type="text" name="content" class="form-control" value="{{$p->content}}" style="width:400px;"></input> -->
  <textarea name="content" class="form-control" style="width:400px;">{{$p->content}}</textarea>
  <br>
  @endforeach
  <div style="padding-left:180px;;padding-right:50px;float:left;">
    <a href="{{ route('posts') }}" class="btn btn-info">Back</a>
  </div>
  <div>
      <button class="btn btn-info">Save</button>
  </div>
</form>
@endsection
