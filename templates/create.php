<?php include 'includes/header.php';?>
    <form role="form" method="POST" action="create.php">
        <div class="form-group">
            <label>Topic Naam</label>
            <input type="text" class="form-control" name="title" placeholder="Voer de naam in">
        </div>
        <div class="form-group">
            <label>Categorie</label>
            <select class="form-control" name="category">
                <?php foreach ( getCats() as $category ): ?>
                    <option value="<?php echo $category->id;?>"><?php echo $category->naam;?></option>
                <?php endforeach;?>
        </select>
        </div>
            <div class="form-group">
                <label>Topic Inhoud</label>
                <textarea id="body" rows="10" cols="80" class="form-control" name="body"></textarea>
                <script>CKEDITOR.replace('body');</script>
            </div>
        <button type="submit" class="btn btn-primary" name="do_create">Verzend</button>
    </form>
 <?php include 'includes/footer.php';?>
