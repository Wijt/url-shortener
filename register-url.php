<?php
    error_reporting(E_ALL); // Error reporting
    require "database.php"; // DB connection
    $db = new Database();   // DB Instantiate

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function giveCheckedRandomId($length){
        global $db;

        do {
            $r = generateRandomString($length);
            $result = $db->row("*", "relations", array("nickname"=>$r));
        } while ($result);

        return $r;
    }

    $url = $_POST["data"];
    $randomId = giveCheckedRandomId(5);

    $ins = $db->insert("relations", array("nickname" => $randomId, "url" => $url));

    echo "localhost?x=".$randomId;
?>