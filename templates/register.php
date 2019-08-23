<?php include 'includes/header.php';?>
    <form role="form" enctype="multipart/form-data" method="post" action="register.php">
        <div class="form-group">
        <label>Naam*</label> <input type="text" class="form-control" name="name" placeholder="Voer je naam in">
        </div>
        <div class="form-group">
            <label>Email Adres*</label> <input type="email" class="form-control" name="email" placeholder="Voer je emailadres in">
        </div>
        <div class="form-group">
                <label>Kies gebruikersnaam*</label> <input type="text" class="form-control" name="username" placeholder="Maak een gebruikersnaam">
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
<?php include 'includes/footer.php';?>
