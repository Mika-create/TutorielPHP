<?php
//Checkbox
$parfums = [
    'Fraise' => 4,
    'Chocolat' => 5,
    'Vanille' => 3
];
//Radio
$cornets = [
    'Pot' => 2,
    'Cornet' => 3
];
//Checkbox
$supplements = [
    'Pépites de chocolat' => 1,
    'Chantilly' => 0.5
];
$title = "Composer votre glace";

require 'header.php';
?> 

<h1>Composer votre glace</h1>

<form action="/jeu.php" method="GET">
    <div class="form-group">

        <?php foreach($parfums as $parfum => $prix): ?>
            <div class="checkbox">
                <label>
                    <? checkbox('parfum', $parfum, $_GET) ?>
                    <?= $parfum ?> - <?= $prix ?> €
                </label>
            </div>
        <?php endforeach; ?>
        <?php foreach($cornets as $cornet => $prix): ?>
            <div class="checkbox">
                <label>
                    <? radio('cornet', $cornet, $_GET) ?>
                    <?= $cornet ?> - <?= $prix ?> €
                </label>
            </div>
        <?php endforeach; ?>
        <?php foreach($supplements as $supplement => $prix): ?>
            <div class="checkbox">
                <label>
                    <? checkbox('supplement', $supplement, $_GET) ?>
                    <?= $supplement ?> - <?= $prix ?> € 
                </label>
            </div>
        <?php endforeach; ?>
        <button type="submit" class="btn btn-primary">Composer ma glace</button>   
    </div> 
</form>    


<?php require 'footer.php' ?>