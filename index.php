<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container" id="mainContainer">
  <h1>Welcome to Our Website</h1>
  <p>Select an option below:</p>

  <?php if (isset($_SESSION['fullname'])): ?>
    <p>You are logged in as <strong><?php echo $_SESSION['fullname']; ?></strong></p>
    <a href="php/dashboard.php" class="btn">Dashboard</a>
    <a href="php/logout.php" class="btn">Logout</a>
  <?php else: ?>
    <a href="html/login.html" class="btn">Login</a>
    <a href="html/register.html" class="btn">Sign Up</a>
  <?php endif; ?>

  <footer>
    <p>© <?php echo date('Y'); ?> MyWebsite — All rights reserved.</p>
  </footer>
</div>

<script>
// Fade-in effect on load
window.addEventListener("load", () => {
  const box = document.getElementById("mainContainer");
  setTimeout(() => {
    box.style.opacity = "1";
    box.style.transform = "translateY(0)";
  }, 300);
});
</script>
</body>
</html>
