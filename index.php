<?php
    include "db/connection.php";
    include "db/p_orm.php";

    var_dump(get_all($db, "users"));
?>