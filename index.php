<?php
    include "db/connection.php";
    include "db/p_orm.php";
    const table = "cards";
    $data = get_all($db, "cards");
?>

<html>
    <head>
        <title>ADMIN</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <?php 
                    foreach($data as $card){
                        echo "
                            <div class='col-md-4 card mr-2'>
                                <div class='card-body'>
                                    <h5 class='card-title text-primary'>{$card['name']}</h5>
                                    <p class='card-text'>
                                        Points de vie : {$card['points_de_vie']}<br>
                                        Points de mana : {$card['points_mana']}<br>
                                        Points d'attaque : {$card['attack']}<br>
                                        Points de defense : {$card['defense']}<br>
                                        Status : {$card['status']}
                                    </p>
                                    <a href='update.php?id={$card['id']}' class='card-link text-success'>Update</a>
                                    <a  class='card-link text-danger'>Delete</a>
                                </div>
                            </div>
                        ";
                    }
                ?>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>