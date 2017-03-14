<div class="row">
    <div class="textProjet">
        <p>Jetez un coup d'oeil</p>
        <p>à quelques-une de mes</p>
        <p>dernières réalisations:</p>
    </div>
</div>
    <?php $result = $portfolio->getAllProject();?>
    <div class="background_projet">
        <?php foreach( $result as $row){ ?>
                <div class="row">
                    <div class="projet">
                        <img src=<?= $row->first_picture ?> alt="">
                        <div class="focus_projet">
                            <p><?= $row->annee_prod ?></p>
                            <p><?= $row->nom ?></p>
                            <p><?= $row->description ?></p>
                            <button type="button" name="button" idProjet=" <?= $row->id_projet ?>">decouvrir ce projet</button>
                        </div>
                    </div>
                </div>

        <?php } ?>
    </div>
