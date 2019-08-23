<?php include 'includes/header.php';?>
    <form role="form">
        <div class="form-group">
            <label>Topic Naam</label>
            <input type="text" class="form-control" name="title" placeholder="Voer de naam in">
        </div>
        <div class="form-group">
            <label>Categorie</label>
            <select class="form-control">
                <option>Design</option>
                <option>Development</option>
                <option>Business & Marketing</option>
                <option>Search Engines</option>
                <option>Cloud & Hosting</option>
        </select>
        </div>
            <div class="form-group">
                <label>Topic Inhoud</label>
                <textarea id="body" rows="10" cols="80" class="form-control" name="body"></textarea>
                <script>CKEDITOR.replace('body');</script>
            </div>
        <button type="submit" class="btn btn-primary">Verzend</button>
    </form>
 <?php include 'includes/footer.php';?>
