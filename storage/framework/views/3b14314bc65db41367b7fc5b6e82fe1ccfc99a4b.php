<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
  <div class="sidebar-header">
    <div>

    </div>
    <div>
      <h4 class="logo-text">Super Admin </h4>
    </div>
    <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
    </div>
  </div>
  <!--navigation-->
  <ul class="metismenu" id="menu">

    <li>
      <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="bi bi-grid-fill"></i>
        </div>
        <div class="menu-title">Users</div>
      </a>
      <ul>
        <li> <a href="<?php echo e(url('/adduser')); ?>">Add User</a>
        </li>
        <li> <a href="<?php echo e(url('/userlist')); ?>">View Users</a>
        </li>

      </ul>
    </li>


    <li>
      <a href="<?php echo e(url('/superadmin/neworders')); ?>">
        <div class="parent-icon"><i class="bi bi-grid-fill"></i>
        </div>
        <div class="menu-title">New Orders</div>
      </a>

    </li>
    <li>
      <a href="<?php echo e(url('/superadmin/order_history')); ?>">
        <div class="parent-icon"><i class="bi bi-grid-fill"></i>
        </div>
        <div class="menu-title">Order History</div>
      </a>
    </li>
 
    <li>
      <a href="<?php echo e(url('/superadminwastes')); ?>">
        <div class="parent-icon"><i class="bi bi-grid-fill"></i>
        </div>
        <div class="menu-title">Waste</div>
      </a>

    </li>

    <li>
      <a href="<?php echo e(url('/superadmin/profile')); ?>">
        <div class="parent-icon"><i class="bi bi-grid-fill"></i>
        </div>
        <div class="menu-title">My Profile</div>
      </a>

    </li>

    <li>
      <a href="<?php echo e(url('/superadmin/dailyreport')); ?>">
        <div class="parent-icon"><i class="bi bi-grid-fill"></i>
        </div>
        <div class="menu-title">Daily Report</div>
      </a>

    </li>

    <li>
      <a href="<?php echo e(url('/superadmin/monthlyreport')); ?>">
        <div class="parent-icon"><i class="bi bi-grid-fill"></i>
        </div>
        <div class="menu-title">Monthly Report</div>
      </a>

    </li>
    <li>
      <a href="<?php echo e(url('/logout')); ?>">
        <div class="parent-icon"><i class="bi bi-grid-fill"></i>
        </div>
        <div class="menu-title">Log Out</div>
      </a>

    </li>

  </ul>
  <!--end navigation-->
</aside>
<!--end sidebar --><?php /**PATH C:\xampp\htdocs\InventoryManagementSystem\resources\views/superadmin/sidebar.blade.php ENDPATH**/ ?>