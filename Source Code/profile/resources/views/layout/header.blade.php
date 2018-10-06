<div class="container ">
  <div class="row height-80">
    <div class="col-sm-6 col-xs-6 align-self-center">
      <h3 class="header"><a class="link">Admin Dashboard</a></h3>
    </div>
    <div class="col-sm-6 col-xs-6 align-self-center">
      <div class="row justify-content-end">
        @if($showProjects)
        <a href="{{route('posts')}}" class="a col-sm-2 col-xs-2 btn btn-main black margin-left-20">Projects</a>
        @else
        <a href="{{route('admin_info')}}" class="a col-sm-2 col-xs-2 btn btn-main black margin-left-20">Home</a>
        @endif
        <!-- <a href="{{ route('logout') }}" class="a col-sm-2 col-xs-2 btn btn-main black margin-left-20" >Logout</a> -->
        <a class="a col-sm-2 col-xs-2 btn btn-main black margin-left-20" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form"  action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </div>
    </div>
  </div>
</div>
