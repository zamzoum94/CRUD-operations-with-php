<?php
    function get_all($db, $table){
        if($data = $db->query("SELECT * FROM {$table}")){
            return $data->fetch_all(MYSQLI_ASSOC);
        } else{
            return 0;
        }
    }

    function get_one($db, $table, $id){
        if($data = $db->query("SELECT * FROM {$table} where id={$id}")){
            $data = $data->fetch_all(MYSQLI_ASSOC);
            return empty($data) ? -1 : $data[0];
        } else{
            return 0;
        }
    }

    function add_record($db, $table, $values){
                
    }

    function update_one($db, $table, $id, $values){
        $query = "UPDATE $table SET ";
        foreach($values as $key=>$value){
            $query = $query . " {$key}='{$value}',";
        }
        $query = substr($query, 0, strlen($query) - 1) . " where id={$id}";
        if($res = $db->query($query)){
            echo"success";
            header('Location: http://localhost/crud-operations-with-php');
        } else{
            echo $db->error;
            echo"failed";
        }
    }
?>
