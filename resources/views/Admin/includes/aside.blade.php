<aside class="main-sidebar sidebar-dark-primary elevation-4" >
    <!-- Brand Logo -->
    <a href="{{url('/dashboard')}}" class="brand-link">
    
      <span class="brand-text font-weight-light">M.A Trading Software</span>
     
    </a>

    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{url('/dashboard')}}" class="nav-link ">
              <i class="nav-icon fa fa-th-large"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          
          </li>
          

          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>
               Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview  "  >
             <li class="nav-item ">
                <a href="{{route('test')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="far fa-money-bill-alt"></i>
                  <p>Test</p>                
                </a>
            </li>
{{-- if(session()->has('ID')) --}}
            @if(Session::get("role")==1)
            <li class="nav-item">
                <a href="{{url('/summary')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="fab fa-blackberry"></i>
                  <p>Summary</p>                
                </a>
            </li>
             <li class="nav-item">
                <a href="{{url('/user')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="far fa-user nav-icon"></i>
                  <p>Admin User</p>
                  
                </a>
              </li>
            @else

            @endif

              <li class="nav-item">
                <a href="{{url('/expense')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="far fa-arrow-alt-circle-right"></i>
                  <p>Business Expense</p>
                  
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/fexpense')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="far fa-arrow-alt-circle-right"></i>
                  <p>Family Expense</p>
                  
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/bank')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="fas fa-university"></i>
                  <p>Bank Withdraw</p>                 
                </a>
              </li>
                <li class="nav-item">
                <a href="{{url('/reports')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="fas fa-file-invoice"></i>
                  <p>Report</p>                 
                </a>
              </li>
            </ul>
          </li>
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-share-alt"></i>
              <p>
               Share Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

               <li class="nav-item">
                <a href="{{url('/share')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="fas fa-user-tag"></i>
                  <p>Share Holder</p>
                  
                </a>
              </li>
                <li class="nav-item">
                <a href="{{url('/sharebalance')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="fas fa-share-square"></i>
                  <p>Share Balance</p>
                  
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-shopping-basket"></i>
              <p>
                 Buy Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/member')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="fas fa-user-friends"></i>
                  <p>MemberShip</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{url('/buyproduct')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="fab fa-buy-n-large"></i>
                  <p>Buy Product</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{url('/payment')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="fas fa-money-bill-alt"></i>
                  <p>Payment Histroy</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/payment_report')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="fas fa-file-invoice"></i>
                  <p>Payment Report</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="{{url('/statement')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="fas fa-book"></i>
                  <p>Statement</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-balance-scale-right"></i>
              <p>
              Sale Management
             
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{url('/supplier')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="fas fa-users"></i>
                  <p>Supplier</p>
                  
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/sale')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="fas fa-cart-arrow-down"></i>
                  <p>Sale </p>
                  
                </a>
              </li>
               <li class="nav-item">
                <a href="{{url('/recive_history')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="fas fa-money-check-alt"></i>
                  <p>Recive Payment </p>
                  
                </a>
              </li>
               <li class="nav-item">
                <a href="{{url('/transaction')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="fas fa-american-sign-language-interpreting"></i>
                  <p>Transaction</p>
                  
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/state')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="fas fa-book"></i>
                  <p>Statement</p>
                  
                </a>
              </li>
            </ul>
          </li>           
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>