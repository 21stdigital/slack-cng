<?php

    $SLACK_TOKEN = "FT9ZaEiWGUtOXmrhnmytNlta";

    function calculateCustomerNumber($name) {
        if (strlen($name) < 2) { die(":scream_cat: The customer name is too short."); return ""; }

        $lowercase_name = strtolower($name);
        $number = (ord(substr($lowercase_name, 0, 1)) - 97) * 26 + (ord(substr($lowercase_name, 1, 1)) - 97);

        return "1".str_pad($number, 3, "0", STR_PAD_LEFT)."0";
    }

    if ($_POST["token"] != $SLACK_TOKEN) {
        die("The token for the slash command doesn't match. Check your script.");
    }

    $name = $_POST["text"];
    echo ":nerd_face: The customer number for *".$name."* is *".calculateCustomerNumber($name)."*.";

?>