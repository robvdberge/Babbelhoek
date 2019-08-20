
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BabbalHoek Tech Forum</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="templates/css/bootstrap.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="templates/css/custom.css">

  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand pl-5" href="#">BabbelHoek</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Maak Account</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Maak Topic</a>
      </li>
      
    </ul>
  </div>
</nav>

<main role="main" class="container mt-5">
    <div class="row">
        <div class="col-md-8 mt-4">
            <div class="main-col">
                <div class="block">
                    <h1 class="float-left">Welkom op BabbelHoek</h1>
                    <h4 class="float-right mt-3 text-muted"><em>Een simpel php Forum</em></h4>
                    <div class="clearfix"></div>
                    <hr>
                    <ul id="topics">
                        <li class="topic">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="img/avatars/gravatar.jpg" alt="" class="avatar float-left">
                                </div>
                                <div class="col-md-10">
                                    <div class="topic-content float-right">
                                        <h3><a href="topic.php">Hoe heb jij CSS en HTML geleerd?</a></h3>
                                        <div class="topic-info">
                                            <a href="category.php">Webdevelopment</a>>><a href="profile.php">RovadeB</a>
                                            <span class="badge float-right badge-pill badge-info mt-1">3</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="topic">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="img/avatars/gravatar.jpg" alt="" class="avatar float-left">
                                </div>
                                <div class="col-md-10">
                                    <div class="topic-content float-right">
                                        <h3><a href="topic.php">Welk PHP framework is het best voor beginners?</a></h3>
                                        <div class="topic-info">
                                            <a href="category.php">Webdevelopment</a>>><a href="profile.php">RovadeB</a>
                                            <span class="badge float-right badge-pill badge-info mt-1">2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="topic">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="img/avatars/gravatar.jpg" alt="" class="avatar float-left">
                                </div>
                                <div class="col-md-10">
                                    <div class="topic-content float-right">
                                        <h3><a href="topic.php">Welke Js versie voor beginners?</a></h3>
                                        <div class="topic-info">
                                            <a href="category.php">Webdevelopment</a>>><a href="profile.php">RovadeB</a>
                                            <span class="badge float-right badge-pill badge-info mt-1">2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="topic">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="img/avatars/gravatar.jpg" alt="" class="avatar float-left">
                                </div>
                                <div class="col-md-10">
                                    <div class="topic-content float-right">
                                        <h3><a href="topic.php">Had jij een mentor?</a></h3>
                                        <div class="topic-info">
                                            <a href="category.php">Persoonlijk</a>>><a href="profile.php">RovadeB</a>
                                            <span class="badge float-right badge-pill badge-info mt-1">5</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <h3>Forum statistieken</h3>
                    <ul>
                        <li>Totaal aantal gebruikers: <strong>54</strong></li>
                        <li>Totaal aantal Topics: <strong>24</strong></li>
                        <li>Totaal aantal Categorieën: <strong>5</strong></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div id="sidebar">
                <div class="block pt-5 mb-5">
                    <h3>Login</h3>
                    <form role="form">
						<div class="form-group">
							<label>Gebruikernaam</label>
							<input name="username" type="text" class="form-control" placeholder="henk123@home">
						</div>
						<div class="form-group">
							<label>Wachtwoord</label>
							<input name="password" type="password" class="form-control" placeholder="Wachtwoord">
						</div>			
						<button name="do_login" type="submit" class="btn btn-primary">Login</button> <a  class="btn btn-default" href="register.html">Maak Account</a>
					</form>
                </div>
                <div class="block">
					<h3>Categories</h3>
					<div class="list-group">
						<a href="#" class="list-group-item active">Alle Topics <span class="badge pull-right">14</span></a> 
						<a href="#" class="list-group-item">Design<span class="badge pull-right">4</span></a>
						<a href="#" class="list-group-item">Development<span class="badge pull-right">9</span></a>
						<a href="#" class="list-group-item">Business & Marketing <span class="badge pull-right">12</span></a>
						<a href="#" class="list-group-item">Search Engines<span class="badge pull-right">7</span></a>
						<a href="#" class="list-group-item">Cloud & Hosting <span class="badge pull-right">3</span></a>
					</div>
				</div>
            </div>
        </div>
    </div>
  
</main><!-- /.container -->
<script src="templates/js/bootstrap.js"></script>
      <script>window.jQuery || document.write('<script src="templates/js/bootstrap.js"><\/script>')</script><script src="templates/js/bootstrap.js"></script></body>
</html>
