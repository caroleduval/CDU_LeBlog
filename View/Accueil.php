<!-- Page Accueil -->


<div class="container" id="mavie">
    <div class="row">
        <div class="col-lg-11 col-md-12 mx-auto">
            <h1 class="blue">Mon Parcours</h1>
            <div class="row">
                <div class="col-lg-10 col-md-10 mx-auto">
                    <p>Où je raconte avec moults détails comment j'ai quitté mon travail pour me lancer dans une formation de développement informatique. Le but est bien évidemment de mettre en avant toutes les magnifiques réalisations que j'ai accompli en délaissant totalement l'ambiance complètement dégueulasse des derniers mois de travail. et d'insister lourdement sur l'éclate de cette formation.</p>
                    <p>Où je raconte avec moults détails comment j'ai quitté mon travail pour me lancer dans une formation de développement informatique. Le but est bien évidemment de mettre en avant toutes les magnifiques réalisations que j'ai accompli en délaissant totalement l'ambiance complètement dégueulasse des derniers mois de travail. et d'insister lourdement sur l'éclate de cette formation.</p>
                </div>
            </div>
        </div>
    </div>
</div>
    
<div class="container" id="moncv">
    <div class="row">
        <div class="col-lg-11 col-md-12 mx-auto">
            <h1 class="blue">Curriculum Vitae</h1>

            <div class="row">
                <div class="col-lg-10 col-md-10 mx-auto">
                    <p>Grave, je t'intéresse ?</p>
                    <p><a class="navbar-brand" href="Contenu/img/cv%202017.pdf">Télécharge donc mon CV !</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
    
<div class="container" id="formulairecontact">
    <div class="row">
        <div class="col-lg-11 col-md-12 mx-auto">
            <h1 class="blue">Me contacter</h1>
            <div class="row">
                <div class="col-lg-10 col-md-10 mx-auto">
                    <p>Vous souhaitez m'envoyer un mail pour obtenir des informations supplémentaires ?<br/> Remplissez le formulaire ci-dessous, je me ferai un plaisir de vous répondre !</p>
                    
 <!-- Page Accueil                  <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>-->  
                    
                    
                    
                    
                    <form name="sentMessage"  id="contactForm" method="post" action="accueil/sendMail" novalidate>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Prénom</label>
                                <input type="text" class="form-control" placeholder="Votre prénom" id="prenom" name="prenom" required data-validation-required-message="Merci d'entrer votre prénom.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Nom</label>
                                <input type="text" class="form-control" placeholder="Votre nom" id="nom" name="nom" required data-validation-required-message="Merci d'entrer votre nom.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Adresse Mail</label>
                                <input type="email" class="form-control" placeholder="Votre adresse Mail" id="email" name="email" required data-validation-required-message="Merci d'entrer votre adresse e-mail.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Votre message" id="message" name="message" required data-validation-required-message="Merci d'entrer votre message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <input type="hidden"/>
                        <input class="btn btn-secondary" type="submit" value="Envoyer" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
