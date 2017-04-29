<div class="row" id="focusProjet">
    <?php $result = $portfolio->getOneProject($_GET['projet']);?>
    <div class="row">
        <img class="large-12 columns end" src="<?= $result->first_picture ?>" alt="image du projet">
    </div>
    <div class="row" id="infos">
        <div class="large-3 columns text-center">
            <p class="descripInfo large-12 columns">Année Prod</p>
            <p class="detailsInfo large-12 columns end"><?= $result->annee_prod ?></p>
        </div>
        <div class="large-3 columns text-center">
            <p class="descripInfo large-12 columns">Client</p>
            <p class="detailsInfo large-12 columns end"><?= $result->client ?></p>
        </div>
        <div class="large-3 columns text-center">
            <p class="descripInfo large-12 columns">Rôle</p>
            <p class="detailsInfo large-12 columns end"><?= $result->role ?></p>
        </div>
        <div class="large-3 columns end text-center">
            <p class="descripInfo large-12 columns">Lien</p>
            <p class="detailsInfo large-12 columns end"><?= $result->lien ?></p>
        </div>
    </div>
    <div class="row">
        <div class="next large-5 columns">
            <img src="<?= $result->second_picture ?>" alt="">
            <p class="nextp">Projet précédent</p>
        </div>
        <div class="next large-5 large-offset-2 columns end">
            <img src="<?= $result->second_picture ?>" alt="">
            <p class="nextp">Projet suivant</p>
        </div>
    </div>
</div>
