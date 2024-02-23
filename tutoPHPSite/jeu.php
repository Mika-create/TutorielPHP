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


$aDeviner = 150;
$erreur = null;
$succes = null;
$value = null;
if (isset($_POST['chiffre'])) {
    $value = (int)$_POST['chiffre'];
    if ($value> $aDeviner) {
        $erreur = "Votre chiffre est trop grand";
    } elseif ($value < $aDeviner) {
        $erreur = "Votre chiffre est trop petit";
    } else {
        $succes = "Bravo! Vous avez devinez le chiffre <strong>$aDeviner</strong>";
    }
}
require 'header.php';
?>

<?php if ($erreur): ?>
    <div class="alert alert-danger">
        <?= $erreur ?>
    </div>
<?php elseif ($succes): ?>
    <div class="alert alert-success">
        <?= $succes ?>
    </div>
<?php endif ?>    

<h1>Composer votre glace</h1>

<form action="/jeu.php" method="POST">
    <div class="form-group">

        <?php foreach($parfums as $parfum => $prix): ?>
            <div class="checkbox">
                <label>
                    <? checkbox('parfum', $parfum,$_GET) ?>
                    <?= $parfum ?> - <?= $prix ?> €
                </label>
            </div>
        <?php endforeach; ?>
        <?php foreach($cornets as $cornet => $prix): ?>
            <div class="checkbox">
                <label>
                    <? radio('cornet', $cornet,$_GET) ?>
                    <?= $cornet ?> - <?= $prix ?> €
                </label>
            </div>
        <?php endforeach; ?>
        <?php foreach($supplements as $supplement => $prix): ?>
            <div class="checkbox">
                <label>
                    <? checkbox('supplement', $supplement,$_GET) ?>
                    <?= $supplement ?> - <?= $prix ?> €
                </label>
            </div>
        <?php endforeach; ?>
        <button type="submit" class="btn btn-primary">Composer ma glace</button>   

       <input type="number" class="form-control" name="chiffre" placeholder="entre 0 et 1000" value="<?= $value ?>">
    </div> 
    <button type="submit" class="btn btn-primary">Deviner</button>
</form>    


<?php require 'footer.php' ?>