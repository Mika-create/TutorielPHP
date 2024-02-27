<?php
$title = "Nous contacter";
$nav = "contact";
require_once 'config.php';
require_once 'functions.php';
date_default_timezone_set('Europe/Paris');
// Récupérer l'heure d'aujourd'hui $heure
$heure = (int)date('G');
// Récupérer les créneaux d'aujourdhui $creneaux
$creneaux = CRENEAUX[date('N') - 1];
// Récupérer l'état d'ouverture du magasin
$ouvert = in_creneaux($heure, $creneaux);
$color = $ouvert ? 'green' : 'red';
// if (!$ouvert) {
//     $color = 'green';
// } else {
//     $color = 'red';
// }
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
        <?php if ($ouvert) : ?>
            <div class="alert alert-success">
                Le magasin est ouvert!
            </div>
        <?php else : ?>
            <div class="alert alert-danger">
                Le magasin est fermé!
            </div>
        <?php endif ?>
        <ul>
            <?php foreach (JOURS as $k => $jour) : ?>
                <li <?php if ($k + 1 === (int)date('N')) : ?> style="color:<?= $color; ?>" <?php endif ?>>
                    <strong><?= $jour ?></strong> :
                    <?= creneaux_html(CRENEAUX[$k]); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<?php require 'footer.php'; ?>