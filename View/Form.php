<!-- Page action article -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>Gràce à ce formulaire, vous pouvez modifier le titre, le chapô, l'auteur et le contenu de l'article.</p>
            <form method="post" action="form/record">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Titre</label>
                        <input type="text" class="form-control" placeholder="Titre" value="<?php if(isset($attr)){echo $attr["title"];} ?>" id="title" name="title" required data-validation-required-message="Merci d'entrer un titre.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Author</label>
                        <input type="text" class="form-control" placeholder="Auteur" value="<?php if(isset($attr)){echo $attr["author"];} ?>" id="author" name="author" required data-validation-required-message="Merci de préciser votre identité">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Chapô</label>
                        <input type="text" class="form-control" placeholder="Chapô" value="<?php if(isset($attr)){echo $attr["standFirst"];} ?>" id="standFirst" name="standFirst" required data-validation-required-message="Veuillez rédiger un chapô.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Texte</label>
                        <textarea rows="5" class="form-control" placeholder="Texte" id="content" name="content" required data-validation-required-message="Merci de rédiger votre texte."><?php if(isset($attr)){echo $attr["content"];} ?></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <input type="hidden" value="<?php if(isset($attr)){echo $attr["id"];} ?>" id="id" name="id">
                <input type="hidden"/>
                <input class="btn btn-secondary" type="submit" value="Envoyer" />
            </form>
          </div>
    </div>
</div>