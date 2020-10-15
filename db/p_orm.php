<?php
    function get_all($db, $table){
        if($data = $db->query("SELECT * FROM {$table}")){
            return $data->fetch_all(MYSQLI_ASSOC);
        } else{
            return 0;
        }
    }
?>
