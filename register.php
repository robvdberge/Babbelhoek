
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>registreer uw account</title>
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
                    <h1 class="float-left">Maak een account</h1>
                    <h4 class="float-right mt-3 text-muted"><em>Een simpel php Forum</em></h4>
                    <div class="clearfix"></div>
                    <hr>
                    
                    <form role="form" enctype="multipart/form-data" method="post" action="register.php">
							<div class="form-group">
								<label>Naam*</label> <input type="text" class="form-control" name="name" placeholder="Voer je naam in">
							</div>
							<div class="form-group">
							    <label>Email Adres*</label> <input type="email" class="form-control" name="email" placeholder="Voer je Email Adres in">
							</div>
						    <div class="form-group">
					            <label>Kies gebruikersnaam*</label> <input type="text" class="form-control" name="username" placeholder="Maak een Gebruikersnaam">
						    </div>
					    <div class="form-group">
					        <label>Wachtwoord*</label> <input type="password" class="form-control" name="password" placeholder="Voer je wachtwoord in">
				        </div>
				        <div class="form-group">
		                    <label>Herhaal Wachtwoord*</label> <input type="password" class="form-control" name="password2" placeholder="Voer nogmaals je wachtwoord in">
			            </div>
				        <div class="form-group">
					        <label>Upload Avatar</label><input type="file" name="avatar" class="mx-1">
				            <p class="help-block"></p>
					    </div>
					    <div class="form-group">
					        <label>Over mij</label>
					        <textarea id="about" rows="6" cols="80" class="form-control" name="about" placeholder="Wat wil je over jezelf kwijt (Optioneel)"></textarea>
			            </div>
			            <input name="register" type="submit" class="btn btn-primary mb-5" value="Register" />
                    </form>
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
