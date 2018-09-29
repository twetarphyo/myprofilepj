@extends('layout.master')
@section('header')
<div class="main-bg-color main-color">
  @include('layout.header')
</div>
@endsection
@section('content')
<br>
<h4 class="text-center">Projects List</h4>
<br>

<div class="container">
  <a href="{{ route('add_post') }}" class="btn btn-info margin-bottom-20" style="margin-left:30px;">Add  Post</a>
  <table class="table table-reponsive table table-bordered"  style="margin-left:20px;" >
    <thead class="thead-light">
      <tr>
        <th class="text-center" scope="col">Title</th>
        <th class="text-center" style="max-width:300px;" scope="col">Content</th>
        <th class="text-center" scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
       @foreach($post as $pos)
    <tr>
      <td class="text-center">
          {{ $pos->title }}
      </td>
      <td class="text-center" style="max-width:300px;">
          {{ $pos->content }}
      </td>
      <td class="text-center">
          <a href="{{route('edit', $pos->id)}}" class="btn btn-info width-25">Edit</a>
          <form style="max-width: 70px;display: inline;" class="inline-form" action="{{ route('delete', $pos->id )}}" method="post" >

             {{ method_field('delete') }}
             {{ csrf_field() }}
           &nbsp;<button class="btn btn-info width-25">Remove</button>
         </form>
      </td>
    </tr>
    @endforeach
    </tbody>

</table>
</div>

@endsection
