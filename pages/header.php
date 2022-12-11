<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SEIP PHP LARAVEL</title>
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/my-styles.css">
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-light bg-light shadow">
    <div class="container">
      <a href="action.php?page=home" class="navbar-brand">LOGO</a>
      <ul class="navbar-nav">
        <li><a href="action.php?page=home" class="nav-link">Home</a></li>
        <li class="dropdown">
          <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product Category</a>
          <ul class="dropdown-menu">

            <?php foreach($categories as $category) { ?>
              <li><a href="" class="dropdown-item"><?php echo $category['name']; ?></a></li>
            <?php } ?>
            
          </ul>
        </li>
      </ul>
    </div>
  </nav>