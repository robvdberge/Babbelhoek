                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="sidebar">
                <div class="block">
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
						<button name="do_login" type="submit" class="btn btn-secondary">Login</button> <a  class="btn btn-default" href="register.html">Maak Account</a>
					</form>
                </div>
                <div class="block">
					<h3>Categoriën</h3>
					<div class="list-group">
						<a href="topics.php" class="list-group-item <?php echo is_active(null);?>">Alle Topics <span class="badge badge-pill badge-secondary float-right">14</span></a> 
						<?php foreach ( getCats() as $category ): ?>
						<a href="topics.php?cat=<?php echo $category->id;?>" class="list-group-item <?php echo is_active($category->id);?>"><?php echo $category->naam;?>
						<span class="badge badge-pill badge-secondary float-right">14</span></a>
						<?php endforeach;?>
					</div>
				</div>
            </div>
        </div>
    </div>
  
</main><!-- /.container -->
<script src="templates/js/bootstrap.js"></script>
      <script>window.jQuery || document.write('<script src="templates/js/bootstrap.js"><\/script>')</script><script src="templates/js/bootstrap.js"></script></body>
</html>
