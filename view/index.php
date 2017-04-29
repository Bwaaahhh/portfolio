<div class="row">
    <div class="text_accroche medium-centered columns">
        <p>Hey ! Moi c'est Cyril Etiévant.</p>
        <p>App & Web développeur indépendant</p>
        <p>près de Besancon en Franche-Comté.</p>
    </div>
</div>
    <?php $result = $portfolio->getAllProject();?>
    <div class="background_projet">
        <?php foreach( $result as $row){ ?>
                <div class="row">
                    <div class="projet">
                        <img src="view/images/<?= $row->image ?>" alt="">
                        <div class="focus_projet">
                            <p><?= $row->annee_prod ?></p>
                            <p><?= $row->nom ?></p>
                            <p><?= $row->hastag ?></p>
                            <a href="index.php?projet=<?= $row->nom ?>&page=focusprojet">
                                <button type="button" name="button" idProjet=" <?= $row->id_projet ?>">decouvrir ce projet</button>
                            </a>
                        </div>
                    </div>
                </div>

        <?php } ?>
    </div>
