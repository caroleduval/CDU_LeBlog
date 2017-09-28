<!-- Page Post -->

<div class="container">
    <div class="row">
        <div class="col-lg-10 col-md-11 mx-auto">
            <div class="post-heading">
                <h1 class="blue">
                    <?php echo $attr["title"]; ?>
                </h1>
                <h5 class="subheading text-justify">
                    <?php echo $attr["standFirst"]; ?>
                </h5>
                <span class="meta"><em>Edité par <strong><?php echo $attr["author"]; ?></strong>
                le <?php echo $attr["lastModif"]; ?></em></span>
            </div>
            <hr>
        </div>
    </div>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-11 mx-auto text-justify post">
                    <?php echo $attr["content"]; ?>
                </div>
            </div>
            <div class="row">
                <div id="poster" class="col-lg-10 col-md-11 mx-auto text-justify post">
                    <form method="post" action=<?php echo "\"form/update/".$post->id()."\""; ?>>
                        <input type="hidden" name="id"/>
                        <input class="btn btn-secondary pull-right" type="submit" value="Modifier cet article" />
                    </form>
                </div>
            </div>
        </div>
    </article>
</div>
