<!-- Page Post -->

<header class="masthead" style="background-image: url('img/post-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1>
                        <?php echo $attr["title"]; ?>
                    </h1>
                    <h2 class="subheading">
                        <?php echo $attr["standFirst"]; ?>
                    </h2>
                    <span class="meta">Edité par <?php echo $attr["author"]; ?>
                le <?php echo $attr["lastModif"]; ?></span>
                </div>
            </div>
        </div>
    </div>
</header>
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <?php echo $attr["content"]; ?>
            </div>
            <form method="post" action=<?php echo "\"form/update/".$post->id()."\""; ?>>
                <input type="hidden" name="id"/>
                <input class="btn btn-secondary" type="submit" value="Modifier cet article" />
            </form>
        </div>
    </div>
</article>
