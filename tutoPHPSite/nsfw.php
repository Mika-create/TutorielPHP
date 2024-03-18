<?php

$age = null;

if (!empty($_POST['brithday'])) {
    setcookie('birthday', $_POST['birthday']);
    $_COOKIE['birthday'] = $_POST['birthday'];
}

if (!empty($_COOKIE['birthday'])) {
    $birthday = (int)$_COOKIE['birthday'];
    $age = (int)date('Y') - $birthday;
}


require 'elements/header.php';
?>
<?php if ($age &&  $age >= 18) : ?>
    <h1>Du contenu réservé aux adultes</h1>
<?php else : ?>
    <form action="" method="">
        <div class="form-group">
            <label for="birthday">Section réservée pour les adultes, entrer votre date de naissance :</label>
            <select name="birthday" id="birthday" class="form-control">
                <?php for ($i = 2010; $i > 1919; $i--) : ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor ?>
            </select>
        </div>
        <button type="submit">Envoyer</button>
    </form>
<?php endif; ?>

<?php require 'elements/footer.php'; ?>