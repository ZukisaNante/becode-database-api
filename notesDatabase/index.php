<?php
    require_once ('connect.php');
    class notes{
        function select(){
            $db = new connect;
            $users = array();
            $data = $db->prepare('SELECT * FROM MyGuests ORDER BY id');
            $data->execute();
            while(
                $OutputData = $data->fetch(PDO::FETCH_ASSOC)
            ){
                $users[$OutputData['id']] = array(
                    'id' => $OutputData['id'],
                    'title' => $OutputData['title'],
                    'notes' => $OutputData['notes'],
                    'author' => $OutputData['author']
                );
            }
            return json_encode($users);
        }
    }
    $notes = new notes;
    header('Content_Type: application/json');
    echo $notes->select();

?>