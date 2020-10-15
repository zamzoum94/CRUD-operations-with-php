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

    function add_one($db, $table, $values){
        $keys = splitKeys(array_keys($values));
        $values = splitValues(array_values($values));
        $query = "INSERT INTO {$table} ({$keys}) VALUES ({$values})";
        echo $query;
        if($db->query($query)){
            header('Location: http://localhost/crud-operations-with-php');
        } else{
            die($db->error);
        } 
    }

    function update_one($db, $table, $id, $values){
        $query = "UPDATE $table SET ";
        foreach($values as $key=>$value){
            $query = $query . " {$key}='{$value}',";
        }
        $query = substr($query, 0, strlen($query) - 1) . " where id={$id}";
        if($db->query($query)){
            header('Location: http://localhost/crud-operations-with-php');
        } else{
            die($db->error);
        }
    }

    function remove_one($db, $table, $id){
        if($db->query("DELETE FROM ${table} where id={$id}")){
            header('Location: http://localhost/crud-operations-with-php');
        } else{
            die($db->error);
        }
    }



    // Helpers
    function splitKeys($array, $separator = ","){
        $query = "";
        foreach($array as $element){
            $query = $query . "{$element}{$separator}";
        }
        return substr($query, 0, strlen($query)-1);
    }

    function splitValues($array, $separator = ","){
        $query = "";
        foreach($array as $element){
            $query = $query . "'{$element}'{$separator}";
        }
        return substr($query, 0, strlen($query)-1);
    }
?>
