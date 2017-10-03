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
                    <h1 class="post-title blue">
                        <?php echo $post->title(); ?>
                    </h1>
                </a>
                <h4 class="post-subtitle text-justify">
                    <small><?php echo $post->standFirst(); ?></small>
                </h4>
                <p class="post-meta"><em>Mis à jour le <?php echo $post->lastModif(); ?></em></p>
                <a href=<?php echo "\"post/index/".$post->id()."\""; ?>>Lire l'article</a>
            </div>
            <hr>
        </div>
    </div>
    
    <?php } ?>
    <div class="clearfix">
        <?php
        if (($pageDde-1)>0)
        { ?> <a class="btn btn-secondary float-right page" href=<?php echo "\"blog/index/".($pageDde-1)."\""; ?>>Articles précédents</a>
        <?php ;}
        if (($pageDde+1)<=$nbPages)
        { ?> <a class="btn btn-secondary float-right page" href=<?php echo "\"blog/index/".($pageDde+1)."\""; ?>>Articles suivants</a>
        <?php ;} ?>
    </div>
</div>






