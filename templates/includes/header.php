<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BabbelHoek Tech Forum</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="templates/css/bootstrap.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="templates/css/custom.css">
    <script src="templates/js/bootstrap.js"></script>
      <script>window.jQuery || document.write('<script src="templates/js/bootstrap.js"><\/script>')</script>
      <script src="templates/js/bootstrap.js"></script>
      <script src="templates/js/ckeditor/ckeditor.js"></script>
    <?php if ( !isset($titel) ){
      $titel = SITE_TITEL;
    }?>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <a class="navbar-brand pl-5" href="index.php">BabbelHoek</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
      <?php if (!isLoggedIn()): ?>
        <li class="nav-item"><a class="nav-link" href="register.php">Maak Account</a></li>
      <?php else: ?>
        <li class="nav-item"><a class="nav-link" href="create.php">Maak Topic</a></li>
      <?php endif; ?>
      
    </ul>
  </div>
</nav>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="main-col">
                <div class="block">
                    <h1 class="float-left"><?php echo $titel;?></h1>
                    <h4 class="float-right mt-3 text-muted"><em>Een simpel php Forum</em></h4>
                    <div class="clearfix"></div>
                    <hr>
                    <?php displayMessage();?>