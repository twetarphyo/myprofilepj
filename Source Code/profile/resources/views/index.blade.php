@extends('layout.master')
@section('header')
  <div class="main-bg-color main-color margin-button-120">
    <div class="container ">
      <div class="row">

        <img src="image/profile.jpg" class="rounded-circle margin-left-40 margin-top-20" width="200" height="200"    alt="">
        @foreach($admin as $adm)
        <div class=" align-self-center margin-left-40">
          <h1 class="link">{{$adm->name}}</h1>
          <sub class="link">Web Developer</sub>
        </div>
        <ul class="align-self-center link margin-left-40 margin-top-20">
          <li>Live in {{$adm->address}} </li>
          <li>{{$adm->bachelor}}</li>
          <li>{{$adm->email}}</li>
          <li>{{$adm->phone}}</li>
          <li><a  href="https://www.github.com/{{$adm->git_link}}" class="git main-color">{{$adm->git_link}}</a> </li>
        </ul>
        @endforeach
      </div>
    </div>
  </div>
@endsection
@section('content')
  <div class="padding-top-20 margin-50">
    @foreach($post as $p)
    <div class=" margin-top-20">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">{{$p->title}}</h2>
          <p class="card-text">{{$p->content}}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
@endsection
@section('footer')
 <div class="main-bg-color main-color margin-top-20">
   <div class="container">
     <div class="row height-50">
       <div class="col align-self-center">
          Reach me via twetarphyo1@gmail.com
       </div>
     </div>
   </div>
 </div>
@endsection
