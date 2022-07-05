<?php

    if (isset($_POST["submit"])) {
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $mailFrom = $_POST["mail"];
        $brooklyn = $_POST["brooklyn"];
        $brussels = $_POST["brussels"];
        $berlin = $_POST["berlin"];
        $reservation = $_POST["reservation"];
        $general = $_POST["general"];
        $compliment = $_POST["compliment"];
        $complaint = $_POST["complaint"];

        echo $firstName;
    }

?>