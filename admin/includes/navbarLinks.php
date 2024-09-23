<?php
// Define the current page URL
$current_page = basename($_SERVER['PHP_SELF']);
?>
<div class="sidebarModd">
<nav class="sidebarMod collapsed">
  <span class="logo">
    <img src="<?php echo '/psms/admin/img/logo.png'; ?>" alt="">
    <span class="nav-item">PSMS</span>
  </span>
  <ul>
    <li>
      <a href="<?php echo '/psms/admin/index.php'?>" class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>">
        <i class="fas fa-home"></i>
        <span class="nav-item">Dashboard</span>
        <span class="sideNavToolTip">Dashboard</span>
      </a>
    </li>
    <li>
      <a href="<?php echo '/psms/admin/pages/userAccount.php'?>" class="<?php echo $current_page == 'userAccount.php' ? 'active' : ''; ?>">
        <i class="fas fa-users"></i>
        <span class="nav-item">User Account Management</span>
        <span class="sideNavToolTip">User Account Management</span>
      </a>
    </li>
    <li>
      <a href="<?php echo '/psms/admin/pages/userEvaluation.php'?>" class="<?php echo $current_page == 'userEvaluation.php' ? 'active' : ''; ?>">
        <i class="fa-duotone fa-solid fa-users"></i>
        <span class="nav-item">User Evaluation Management</span>
        <span class="sideNavToolTip">User Evaluation Management</span>
      </a>
    </li>
    <li>
      <a href="<?php echo '/psms/admin/pages/rating.php'?>" class="<?php echo $current_page == 'rating.php' ? 'active' : ''; ?>">
        <i class="fa-sharp-duotone fa-solid fa-star-sharp-half"></i>
        <span class="nav-item">Rating Indicator</span>
        <span class="sideNavToolTip">Rating Indicator</span>
      </a>
    </li>
    <li>
      <a href="#" class="<?php echo $current_page == 'somepage.php' ? 'active' : ''; ?>">
        <i class="fas fa-tasks"></i>
        <span class="nav-item">Performance Report</span>
        <span class="sideNavToolTip">Performance Report</span>
      </a>
    </li>
    <li>
      <a href="#" class="<?php echo $current_page == 'somepage.php' ? 'active' : ''; ?>">
        <i class="fas fa-cog"></i>
        <span class="nav-item">History</span>
        <span class="sideNavToolTip">History</span>
      </a>
    </li>
    <li>
      <a href="<?php echo '/psms/admin/pages/accountManagement.php'?>" class="<?php echo $current_page == 'accountManagement.php' ? 'active' : ''; ?>">
        <i class="fas fa-cog"></i>
        <span class="nav-item">Account Management</span>
        <span class="sideNavToolTip">Account Management</span>
      </a>
    </li>
    <li>
      <a href="#" class="logout <?php echo $current_page == 'somepage.php' ? 'active' : ''; ?>">
        <i class="fas fa-sign-out-alt"></i>
        <span class="nav-item">Log out</span>
        <span class="sideNavToolTip">Log out</span>
      </a>
    </li>
  </ul>
</nav>
</div>