    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href="{{route('dashboard')}}"><span>[</span>e <i>Mart</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
        {{-- Dashboard --}}
          <a href="{{route('dashboard')}}" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a>
        </li>
        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Branch Department</label>
        {{-- Branch Management --}}
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Branch</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('branch.manage')}}" class="sub-link">Manage All Branch</a></li>
            <li class="sub-item"><a href="{{route('branch.create')}}" class="sub-link">Create New Branch</a></li>
          </ul>
        </li>
        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Product Section</label>
        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub">
              <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
              <span class="menu-item-label">Coupon</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
              <li class="sub-item"><a href="{{route('coupon.manage')}}" class="sub-link">Manage All Coupon</a></li>
              <li class="sub-item"><a href="{{route('coupon.create')}}" class="sub-link">Create New Coupon</a></li>
            </ul>
          </li>
          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub">
              <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
              <span class="menu-item-label">Banner</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
              <li class="sub-item"><a href="{{route('banner.manage')}}" class="sub-link">Manage All Banner</a></li>
              <li class="sub-item"><a href="{{route('banner.create')}}" class="sub-link">Create New Banner</a></li>
            </ul>
          </li>

        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">HR Department</label>
         {{-- Employees Profile Management --}}
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Employee</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('employee.manage')}}" class="sub-link">Manage All Employees</a></li>
            <li class="sub-item"><a href="{{route('employee.create')}}" class="sub-link">Add New Employee</a></li>

          </ul>
        </li>

        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">User Management</label>
         {{-- User Profile Management --}}
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">User</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('user.manage')}}" class="sub-link">Manage All Users</a></li>
          </ul>
        </li>
      </ul><!-- br-sideleft-menu -->

       <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Category Management</label>
         {{-- User Profile Management --}}
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Category</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('category.manage')}}" class="sub-link">Manage All Category</a></li>
            <li class="sub-item"><a href="{{route('category.create')}}" class="sub-link">Add New Category</a></li>
          </ul>
        </li>
      </ul><!-- br-sideleft-menu -->

      <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Shop Management</label>
         {{-- Shop Profile Management --}}
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Shop</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('shop.manage')}}" class="sub-link">Manage All Shops</a></li>
          </ul>
        </li>
      </ul><!-- br-sideleft-menu -->

      <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Product Management</label>
         {{-- Product Profile Management --}}
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Product</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('product.manage')}}" class="sub-link">Manage All Products</a></li>
          </ul>
        </li>
      </ul><!-- br-sideleft-menu -->

      <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Order Management</label>
         {{-- Product Profile Management --}}
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Order</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('order.manage')}}" class="sub-link">Manage All Orders</a></li>
          </ul>
        </li>
      </ul><!-- br-sideleft-menu -->

      <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Information Summary</label>

      <div class="info-list">
        <div class="info-list-item">
          <div>
            <p class="info-list-label">Memory Usage</p>
            <h5 class="info-list-amount">32.3%</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#336490"], "height": 35, "width": 60 }'>8,6,5,9,8,4,9,3,5,9</span>
        </div><!-- info-list-item -->

        <div class="info-list-item">
          <div>
            <p class="info-list-label">CPU Usage</p>
            <h5 class="info-list-amount">140.05</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#1C7973"], "height": 35, "width": 60 }'>4,3,5,7,12,10,4,5,11,7</span>
        </div><!-- info-list-item -->

        <div class="info-list-item">
          <div>
            <p class="info-list-label">Disk Usage</p>
            <h5 class="info-list-amount">82.02%</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#8E4246"], "height": 35, "width": 60 }'>1,2,1,3,2,10,4,12,7</span>
        </div><!-- info-list-item -->

        <div class="info-list-item">
          <div>
            <p class="info-list-label">Daily Traffic</p>
            <h5 class="info-list-amount">62,201</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#9C7846"], "height": 35, "width": 60 }'>3,12,7,9,2,3,4,5,2</span>
        </div><!-- info-list-item -->
      </div><!-- info-list -->

      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->
