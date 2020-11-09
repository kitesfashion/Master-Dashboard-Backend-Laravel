<aside class="main-sidebar sidebar-dark-primary elevation-4" >
    <!-- Brand Logo -->
    <a href="{{url('/dashboard')}}" class="brand-link">
    
      <span class="brand-text font-weight-light">E Health Care</span>
     
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
                <a href="{{route('company')}}" class="nav-link">
                  &nbsp;&nbsp;
                  <p>Company</p>                
                </a>
            </li>

            <li class="nav-item">
                <a href="{{url('/slider')}}" class="nav-link">
                  &nbsp;&nbsp;
                  <p>Slider</p>                
                </a>
            </li>
            <li class="nav-item">
              <a href="{{url('/mission')}}" class="nav-link">
                &nbsp;&nbsp;
                <p>Mission & Quota</p>                
              </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/blogs')}}" class="nav-link">
              &nbsp;&nbsp;
              <p>Blogs</p>                
            </a>
        </li>
            </ul>
          </li>
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-share-alt"></i>
              <p>
               Test & Doctor
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

               <li class="nav-item">
                <a href="{{url('/test_category')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="fas fa-user-tag"></i>
                  <p>Test Category</p>                  
                </a>
              </li>
                <li class="nav-item">
                <a href="{{url('/test')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="fas fa-share-square"></i>
                  <p>Test</p>                  
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/doctors')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="fas fa-share-square"></i>
                  <p>Doctors</p>                 
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-shopping-basket"></i>
              <p>
                 Service
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/service')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="fas fa-user-friends"></i>
                  <p>Service</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/banner')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="fas fa-user-friends"></i>
                  <p>Banner</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-balance-scale-right"></i>
              <p>
              Contact Info 
             
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{url('/contact')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="fas fa-users"></i>
                  <p>Contact Us</p>
                  
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/appointlist')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="fas fa-database"></i> 
                  <p>Appoinment List</p>
                  
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/testppointlist')}}" class="nav-link">
                  &nbsp;&nbsp;<i class="fas fa-database"></i> 
                  <p>Test Appoinment</p>
                  
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