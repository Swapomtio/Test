<?php
    $url = "http://localhost:3000/"

    $response = file_get_contents($url);

    if($response == FALSE)
    {
        echo "Error occurred while accessing the API.";
    }
    else
    {
        echo $response;
    }
?>