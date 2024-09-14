<?php
// Define the current page URL
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav class="sidebarMod collapsed">
  <span class="logo">
    <img src="<?php echo '/bppo/admin/img/logo.png'; ?>" alt="">
    <span class="nav-item">PSMS</span>
  </span>
  <ul>
    <li><a href="<?php echo '/bppo/admin/index.php'?>" class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>">
      <i class="fas fa-home"></i>
      <span class="nav-item">Dashboard</span>
      <span class="tooltip">Home</span>
    </a></li>
    <li><a href="<?php echo '/bppo/admin/pages/userAccount.php'?>" class="<?php echo $current_page == 'userAccount.php' ? 'active' : ''; ?>">
      <i class="fas fa-users"></i>
      <span class="nav-item">User Account Management</span>
      <span class="tooltip">Profile</span>
    </a></li>
    <li><a href="<?php echo '/bppo/admin/pages/userEvaluation.php'?>" class="<?php echo $current_page == 'userEvaluation.php' ? 'active' : ''; ?>">
      <i class="fa-duotone fa-solid fa-users"></i>
      <span class="nav-item">User Evaluation Management</span>
      <span class="tooltip">Wallet</span>
    </a></li>
    <li><a href="#" class="<?php echo $current_page == 'somepage.php' ? 'active' : ''; ?>">
      <i class="fa-sharp-duotone fa-solid fa-star-sharp-half"></i>
      <span class="nav-item">Rating Indicator</span>
      <span class="tooltip">Analytics</span>
    </a></li>
    <li><a href="#" class="<?php echo $current_page == 'somepage.php' ? 'active' : ''; ?>">
      <i class="fas fa-tasks"></i>
      <span class="nav-item">Reports</span>
      <span class="tooltip">Tasks</span>
    </a></li>
    <li><a href="#" class="<?php echo $current_page == 'somepage.php' ? 'active' : ''; ?>">
      <i class="fas fa-cog"></i>
      <span class="nav-item">Admin Account Management</span>
      <span class="tooltip">Settings</span>
    </a></li>
    <li><a href="#" class="logout <?php echo $current_page == 'somepage.php' ? 'active' : ''; ?>">
      <i class="fas fa-sign-out-alt"></i>
      <span class="nav-item">Log out</span>
      <span class="tooltip">Log out</span>
    </a></li>
  </ul>
</nav>
