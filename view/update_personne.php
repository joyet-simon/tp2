<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/master.css">
</head>

<body>
    <?php if ($personne->getId() === 0 && empty($personne->getFirstName()) && empty($personne->getLastName())) : ?>
        <h2>La personne n'existe pas...</h2>
    <?php else : ?>
        <form action="/update_personne_controller.php" onsubmit="return validateForm();" method="post" id="form" class="form">
            ID : <br><input type="text" name="personne_id" id="personne_id" class="form-control" readonly value="<?= $personne->getId() ?>">
                <span id="personneIdError"></span><br>
            Prénom : <br><input type="text" name="prenom" id="prenom" class="form-control" value="<?= $personne->getFirstName() ?>">
                <span id="prenomError"></span><br>
            Nom : <br><input type="text" name="nom" id="nom" class="form-control" value="<?= $personne->getLastName() ?>">
                <span id="nomError"></span><br>
            <button class="btn btn-outline-info">Valider</button>
        </form>
    <?php endif; ?>
</body>

</html>