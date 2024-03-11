<?php
require 'elements/header.php';
?>

<h1>S'inscrire à la newsletter</h1>

<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem earum itaque, velit voluptate est nobis molestiae consequatur voluptatum! Numquam consequuntur magni laudantium quasi. Eius alias enim odio error. Tempora, dolor.
</p>

<form action="/newsletter.php" method="post" class="form-inline">
    <div class="form-group">
        <input type="email" name="email" placeholder="Entrez votre email" required class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">S'inscrire</button>
</form>

<?php require 'elements/footer.php'; ?>