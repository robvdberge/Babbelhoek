<?php include BASE_URI . 'templates/includes/header.php';?>
<ul id="topics">
        <?php 
            if ( $topics ):
                foreach ( $topics as $topic ):
        ?>
        <li class="topic">
            <div class="row">
                <div class="col-md-2">
                    <img src="img/avatars/<?php if ($topic->avatar == '' ){echo 'gravatar.jpg';} else {echo $topic->avatar;};?>" alt="" class="avatar float-left">
                </div>
                <div class="col-md-10">
                    <div class="topic-content float-right">
                        <h3><a href="topic.php?id=<?php echo urlencode($topic->id);?>"><?php echo $topic->titel;?></a></h3>
                        <div class="topic-info">
                            <a href="topics.php?cat=<?php echo urlencode($topic->cat_id);?>"><?php echo $topic->naam;?></a> >>
                            <a href="topics.php?user=<?php echo urlencode($topic->gebruikers_id);?>"><?php echo $topic->gebruikersnaam;?></a> >>
                            Gepost op <?php echo formatDate($topic->gemaakt_op);?>
                            <span class="badge float-right badge-pill badge-info mt-1"><?php echo replyCount($topic->id);?></span>
                        </div>
                    </div>
                </div>
            </div>
        </li>
                <?php endforeach; ?>
            <?php else : ?>
                <p>Er zijn geen Topics gevonden</p>
            <?php endif;?>
    </ul>
        
    <h3>Forum statistieken</h3>
    <ul>
        <li>Totaal aantal gebruikers: <strong><?php echo $totalGebruikers;?></strong></li>
        <li>Totaal aantal Topics: <strong><?php echo $totalTopics;?></strong></li>
        <li>Totaal aantal Categorieën: <strong><?php echo $totalCats;?></strong></li>
    </ul>

<?php include BASE_URI . 'templates/includes/footer.php';?>