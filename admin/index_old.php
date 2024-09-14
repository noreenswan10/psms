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
        <h1>Skills</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="mainMod-skills">
        <div class="cardMod">
          <i class="fas fa-laptop-code"></i>
          <h3>Web development</h3>
          <p>Join Over 1 million Students.</p>
          <button>Get Started</button>
        </div>
        <div class="cardMod">
          <i class="fab fa-wordpress"></i>
          <h3>WordPress</h3>
          <p>Join Over 3 million Students.</p>
          <button>Get Started</button>
        </div>
        <div class="cardMod">
          <i class="fas fa-palette"></i>
          <h3>graphic design</h3>
          <p>Join Over 2 million Students.</p>
          <button>Get Started</button>
        </div>
        <div class="cardMod">
          <i class="fab fa-app-store-ios"></i>
          <h3>IOS dev</h3>
          <p>Join Over 1 million Students.</p>
          <button>Get Started</button>
        </div>
      </div>

      <section class="mainMod-course">
        <h1>My courses</h1>
        <div class="course-boxMod">
          <ul>
            <li class="active">In progress</li>
            <li>explore</li>
            <li>incoming</li>
            <li>finished</li>
          </ul>
          <div class="course">
            <div class="boxMod">
              <h3>HTML</h3>
              <p>80% - progress</p>
              <button>continue</button>
              <i class="fab fa-html5 html"></i>
            </div>
            <div class="boxMod">
              <h3>CSS</h3>
              <p>50% - progress</p>
              <button>continue</button>
              <i class="fab fa-css3-alt css"></i>
            </div>
            <div class="boxMod">
              <h3>JavaScript</h3>
              <p>30% - progress</p>
              <button>continue</button>
              <i class="fab fa-js-square js"></i>
            </div>
          </div>
        </div>
      </section>
    </section>
  </div>
    <script>
    document.getElementById('toggle-button').addEventListener('click', function() {
  document.querySelector('.sidebarMod').classList.toggle('collapsed');
});

  </script>
  
</body>
</html>