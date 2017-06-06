<div class="row" id="focusProjet">
    <?php $result = $portfolio->getOneProject($_GET['projet']);?>
    <div class="row">
        <img class="large-12 columns end" src="view/images/<?= $result->image ?>" alt="image du projet">
    </div>
    <div class="row" id="infos">
        <div class="large-3 columns text-center">
            <div class="descripInfo large-12 columns">
                <p class="">Année Prod</p>
            </div>
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
            <a href="<?= $result->lien ?>" target="_blank">
                <p class="detailsInfo large-12 columns end">Par ici</p>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="large-6 columns">
            <p><?= $result->description ?></p>
        </div>
        <div class="large-6 columns end">
            <img src="<?= $result->image2 ?>" alt="">
        </div>
    </div>
    <div class="row">
        <div class="next large-5 columns">
            <?php $resultPrev = $portfolio->getPicturePrevProject($result->ordre) ; ?>
            <img src="view/images/<?= $resultPrev->image ?>" alt="">
            <a href="index.php?page=focusprojet&projet=<?= $resultPrev->nom ?>">
                <p class="nextp">Projet précédent</p>
            </a>
        </div>
        <div class="next large-5 large-offset-2 columns end">
            <?php if($result->ordre == 3 ){
                $resultNext = $portfolio->getPictureFirstProject() ;
            }else{
                $resultNext = $portfolio->getPictureNextProject($result->ordre);
            }?>
            <img src="view/images/<?= $resultNext->image ?>" alt="">
            <a href="index.php?page=focusprojet&projet=<?= $resultNext->nom ?>">
                <p class="nextp">Projet suivant</p>
            </a>
        </div>
    </div>
</div>
