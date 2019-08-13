<?php
    include('api.php');

    $api_objcet = new API();
    if($_GET["action"] = 'fetch_all')
    {
        $data = $api_objcet->fetch_all();
    }
    echo json_encode($data);
?>