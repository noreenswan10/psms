<?php 
define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
?>
<!DOCTYPE html>
<html lang="en">
<?php include ROOT_PATH . "/bppo/admin/includes/header.php"; ?>
<body>
  <div class="containerMod">
  <?php include ROOT_PATH . "/bppo/admin/includes/navbarLinks.php"; ?>

    <section class="mainMod">
	 <button id="toggle-button">
      <i class="fas fa-bars"></i>
    </button>
      <div class="mainMod-top">
        <h1>Welcome back Admin ❤️</h1>
        <i class="fas fa-user-cog"></i>
      </div>
   

    </section>
  </div>
    <script>
    document.getElementById('toggle-button').addEventListener('click', function() {
  document.querySelector('.sidebarMod').classList.toggle('collapsed');
});

  </script>
  
</body>
</html>