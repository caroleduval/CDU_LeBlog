<!-- Page action article -->
<div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>Gràce à ce formulaire, vous pouvez modifier le titre, le chapô, l'auteur et le contenu de l'article.</p>
          <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
          <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
          <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
          <form name="sentMessage" id="PostForm" novalidate>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Titre</label>
                <input type="text" class="form-control" placeholder="Titre" id="titre" required>
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Auteur</label>
                <input type="text" class="form-control" placeholder="auteur" id="auteur" required>
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Chapô</label>
                <input type="text" class="form-control" placeholder="Chapô" id="chapo" required >
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Contenu</label>
                <textarea rows="5" class="form-control" placeholder="Contenu" id="contenu" required></textarea>
                <p class="help-block"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" id="sendMessageButton">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>