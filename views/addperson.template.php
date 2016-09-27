<?php require 'partials/header.php' ?>
<form method="POST" action="/names">

    <label for="forName">Name: </label>
    <input type="text" name="name"
           placeholder="Put your name here"/>

    <input type="submit" value="Enviar">

</form>
<?php require 'partials/footer.php' ?>