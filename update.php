<?php
    include "db/connection.php";
    include "db/p_orm.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $data = get_one($db, 'cards', $id);
    }

    if(count($_POST)){
        update_one($db, 'cards', $id, $_POST);
    }
?>

<html>
    <head>
        <title>ADMIN</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <form method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value=<?=$data['name']?>>
                    </div>
                    <div class="form-group">
                        <label for="name">Points de vie</label>
                        <input type="text" class="form-control" name="points_de_vie" value=<?=$data['points_de_vie']?>>
                    </div>
                    <div class="form-group">
                        <label for="name">Points de manas</label>
                        <input type="text" class="form-control" name="points_mana" value=<?=$data['points_mana']?>>
                    </div>
                    <div class="form-group">
                        <label for="name">Attack</label>
                        <input type="text" class="form-control" name="attack" value=<?=$data['attack']?>>
                    </div>
                    <div class="form-group">
                        <label for="name">Defense</label>
                        <input type="text" class="form-control" name="defense" value=<?=$data['defense']?>>
                    </div>
                    <div class="form-group">
                        <label for="name">Status</label>
                        <input type="text" class="form-control" name="status" value=<?=$data['status']?>>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>