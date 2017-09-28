<!-- Page Blog -->

<?php

foreach ($posts as $post)
{
    ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-preview">
                        <a href=<?php echo "\"Post/index/".$post->id()."\"" ?>>
                            <h2 class="post-title">
                                <?php echo $post->title(); ?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?php echo $post->standFirst(); ?>
                            </h3>
                        </a>
                        <p class="post-meta">Mis à jour le <?php echo $post->lastModif(); ?></p>
                        <a href=<?php echo "\"post/index/".$post->id()."\""; ?>>Lire l'article</a>
                        
                    </div>
                    <hr>
                </div>
            </div>
</div>
<?php }

