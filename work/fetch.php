<?php
    //fetch php
    $api_url = "http://localhost/api/test_api.php?action=fetch_all"; /* send request */
    $client = curl_init($api_url);/* initialize client */
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($client); /* returns json format */
    $result = json_decode($response); /* convert json to php */
    $output = '';
    if(count($result > 0))
    {
        foreach($result as $row)
        {
            $output .= '
            <tr>
                <td> .$row->title. </td>
                <td> .$row->notes. </td>
                <td> .$row->author. </td>
                <td> <button type= "button" name= "edit" 
                class= "btn btn-warning btn-xs edit" id= "'.$row->id.'">Edit </button></td>
                <td> <button type= "button" name= "edit" 
                class= "btn btn-danger btn-xs delete" id= "'.$row->id.'">Delete </button></td>
            </tr>';
        }
    }
    else
    {
        $output .= '
        <tr>
            <td colspan = "4" align = "center"> No Data Found </td>
        </tr>';
    }
    echo $output; // send data to ajax request
?>