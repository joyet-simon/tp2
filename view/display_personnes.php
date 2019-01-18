<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Personnes tableaux</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/master.css">
    
</head>

<body>
    <form action="/add_personne_controller.php"  method="get" id="form">
        <button class="btn btn-outline-info" >Ajouter</button>
    </form>
    <table class="table table-striped" id="table">
        <tr class="thead-dark">
            <th>#</th>
            <th>Prénom</th>
            <th>Nom</th>
        </tr>
        <?php foreach ($personnes as $pers) : ?>
        <tr>
            <td>
                <?= $pers->getId() ?>
            </td>
            <td>
                <?= $pers->getFirstName() ?>
            </td>
            <td>
                <?= $pers->getLastName() ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>