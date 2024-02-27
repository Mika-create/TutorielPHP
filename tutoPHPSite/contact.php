<?php
$title = "Nous contacter";
$nav = "contact";
require_once 'config.php';
require_once 'functions.php';
$ouvert = in_creneaux($heure, $creneaux);
require 'header.php';
?>

<div class="row">
    <div class="col-md-8">
        <h2>Nous contacter</2>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae excepturi consequatur eius architecto nesciunt enim doloremque, temporibus eligendi dolorem velit ullam odio dolor aperiam laboriosam ipsum asperiores praesentium, autem optio!
            </p>
    </div>
    <div class="col-md-4">
        <h2>Horaire d'ouverture</h2>
        <div class="alert alert-success">
            Le magasin est ouvert!
        </div>
        <div class="alert alert-danger">
            Le magasin est fermé!
        </div>
        <ul>
            <?php foreach (JOURS as $k => $jour) : ?>
                <li <?php if ($k + 1 === (int)date('N')) : ?> style="color:green" <?php endif ?>>
                    <strong><?= $jour ?></strong> :
                    <?= creneaux_html(CRENEAUX[$k]); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<?php require 'footer.php'; ?>