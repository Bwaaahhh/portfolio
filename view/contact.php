<div id="contact">
    <div class="row">
        <form class="" action="controller/verifFormContact.php" method="post">
            <p class="large-4 large-centered columns end" id="intro">Bonjour Cyril,</p>
            <p id="obligation"><span class="error">* Champs Obligatoires.</span></p>
            <div class="large-12 columns end" id="formPremiere">
                <p class="">Je suis </p>
                <input id="nameForm" class="inputForm" type="text" name="nomPerso" value="nom & Prenom">
                <i class="fa fa-pencil" aria-hidden="true"></i>
                <span class="error">* <?= $_SESSION['nameErr']  ?></span>
                <p> et je vous contacte</p>
            </div>
            <div class="" id="formDeuxieme">
                <p> de la part de</p>
                <input id="societeForm" class="inputForm" type="text" name="nomSociete" value="nom de la société">
                <i class="fa fa-pencil" aria-hidden="true"></i>
                <p>pour discuter</p>
            </div>
            <div class="" id="formTroisieme">
                <p>d'un(e)</p>
                <select class="selectForm" name="offre">
                    <option value="projet">projet</option>
                    <option value="offre">offre d'emploi</option>
                    <option value="entretien">entretien</option>
                    <option value="secret">... c'est secret</option>
                </select>.
            </div>
            <p>Merci d'avance de bien vouloir me répondre</p>
            <div class="" id="formQuatre">
                <p>à</p>
                <input id="mailForm" class="inputForm" type="text" name="mail" value="mon adresse e-mail">
                <i class="fa fa-pencil" aria-hidden="true"></i>
                <span class="error">* <?= $_SESSION['mailErr']  ?></span>
                <p> ou bien contactez-moi</p>
            </div>
            <div class="" id="formCinq">
                <p>simpement par téléphone au</p>
                <input id="phoneForm" class="inputForm" type="text" name="phone" value="+33">
                <i class="fa fa-pencil" aria-hidden="true"></i>
                <span class="error">* <?= $_SESSION['phoneErr']  ?></span>
            </div>
            <div class="row bye">
                <p class="large-2 large-centered columns">À bientot</p>
            </div>
            <div class="row">
                <p class="large-2 large-centered columns">//</p>
            </div>
            <div class="row" id="formButton">
                <button class="large-3 columns large-offset-2" id="resetForm">réinitialiser le message</button>
                <button class="large-3 large-offset-2 columns end" name="submit" type="submit">envoyer le message</button>
            </div>
        </form>
    </div>
</div>
<?php session_destroy() ?>
