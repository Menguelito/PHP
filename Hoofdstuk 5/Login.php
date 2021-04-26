<?php

function login() {
    $inlognamen = array("Jan@Stopline.nl", "Mathijs@carps.com", "Erik@heerlen.nl");
    $wachtwoorden = array("Jan123", "Mathijs123", "Erik123");

    for ($i = 0; $i < 2; $i++) {
        if ($_POST['inlognaam'] == $inlognamen[$i] && $_POST['wachtwoord'] == $wachtwoorden[$i]) {
            return true;
        }
    }
    return false;

}

if (login()) {
    echo "Welkom!";
} else {
    echo "Sorry, geen toestemming.";
}