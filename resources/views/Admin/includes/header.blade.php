<nav class="main-header navbar navbar-expand navbar-white navbar-light" >
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">

    </li>
      @if (session('add'))
        <div class="alert alert-dismissible alert-success">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Added Successfully</strong>
        </div>
    @endif
       @if (session('update'))
        <div class="alert alert-dismissible alert-info">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Update Successfully</strong>
        </div>
    @endif
        @if (session('delete'))
        <div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Delete Successfully</strong>
        </div>
    @endif

        @if (session('payment'))
        <div class="alert alert-dismissible alert-warning">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Payment Successfully</strong>
        </div>
    @endif
     @if (session('hm'))
        <div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Please Enter Valid ID</strong>
        </div>
    @endif
     @if (session('hmm'))
        <div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Password Successfully Change</strong>
        </div>
    @endif
     @if (session('hellos'))
        <div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Supplier Wise Not Available</strong>
        </div>
    @endif
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">

    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 large">{{ Auth::user()->name }}</span>
      </a>
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
      
        <a href=""  class="dropdown-item"  data-toggle="modal" id="edit" 
            data-target="#exam"  > 
            <i class="fas fa-key"></i>
             Change Password
            </a>

        <div class="dropdown-divider"></div>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <x-jet-responsive-nav-link href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                      this.closest('form').submit();" class="dropdown-item">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> {{ __('Logout') }}
          </x-jet-responsive-nav-link>
      </form>

      </div>
    </li>
  </ul>
</nav>
