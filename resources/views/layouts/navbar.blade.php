<nav class="side-navbar">
  <div class="sidebar-header d-flex align-items-center">
    <div class="avatar"><img src="{{asset("img/".config('master.users.'.$nav.'.avatar'))}}" alt="..." class="img-fluid rounded-circle"></div>
    <div class="title">
      <h1 class="h4">{{config('master.users.'.$nav.'.name')}}</h1>
      <p>{{config('master.users.'.$nav.'.level')}}</p>
    </div>
  </div>
  @include('layouts.navigation.'.$nav)
</nav>
