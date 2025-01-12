<?php
  ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    <link rel="stylesheet" href="/Assets/CSS/Error404.css">
</head>
<body>
    <div class="error-container">
        <h1>404</h1>
        <h2>Oops! Page Not Found</h2>
        <p>Sorry, but the page you are looking for does not exist, has been removed, or is temporarily unavailable.</p>
        <a href="/" class="home-link">Go to Homepage</a>
    </div>
</body>
</html>
<?php
  $content = ob_get_clean();
  include 'Layout.php';
?>