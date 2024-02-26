<?php
$title = "Nous contacter";
$nav = "contact";
require_once 'config.php';
require_once 'functions.php';
$creneaux = creneaux_html(CRENEAUX);
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
        <?= $creneaux ?>
    </div>
</div>