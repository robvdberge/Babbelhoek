<?php include 'includes/header.php';?>
    <div><h4><?php echo $topic->inhoud;?></h4></div>
    <hr>
    <ul id="topics">
        <?php if ($reacties): ?>
        <?php   foreach ( $reacties as $reactie): ?>
        <li id="main-topic" class="topic">
            <div class="row">
                <div class="col-md-2">
                    <div class="user-info">
                        <img class="avatar float-left" src="img/avatars/<?php if ($reactie->avatar == '' ){echo 'gravatar.jpg';} else {echo $reactie->avatar;};?>" />
                        <ul>
                            <li><strong><?php echo $reactie->gebruikersnaam;?></strong></li>
                            <li><?php echo userPostCount($reactie->gebruikers_id);?></li>
                            <li><a href="topics.php?user=<?php echo $reactie->gebruikers_id;?>">Profiel</a>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="topic-content float-right">
                        <p><?php echo $reactie->inhoud;?></p>
                    </div>
                </div>
            </div>
        </li>
        <?php   endforeach; ?>
        <?php else : ?>
            <p>Er zijn geen reacties gevonden</p>
        <?php endif; ?>
    
    </ul>
    <?php if (isLoggedIn()): ?>
        <h3>Reply To Topic</h3>
        <form role="form" method="POST" action="topic.php?id=<?php echo $topicId;?>">				
            <div class="form-group">
                <textarea id="reply" rows="10" cols="80" class="form-control" name="reply"></textarea>
                <script>CKEDITOR.replace( 'reply' );</script>
            </div>
            <button type="submit" class="btn btn-primary" name="do_reply">Verzend</button>
        </form>
    <?php else: ?>
        <h4 class="text-center text-muted">Log in om te kunnen reageren</h4>
    <?php endif; ?>
    <h4>Forum statistieken</h4>
    <ul>
        <li>Totaal aantal gebruikers: <strong><?php echo $totalGebruikers;?></strong></li>
        <li>Totaal aantal Topics: <strong><?php echo $totalTopics;?></strong></li>
        <li>Totaal aantal Categorieën: <strong><?php echo $totalCats;?></strong></li>
    </ul>
 <?php include 'includes/footer.php';?>