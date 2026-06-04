<?php

$link = "";

if (isset($_POST['jadwalkelas'])) {

    $jadwalkelas = $_POST['jadwalkelas'];

    switch ($jadwalkelas) {

        case '1':
            $link = "https://youtube.com/";
            break;

        case '2':
            $link = "";
            break;

        case '3':
            $link = "";
            break;

        case '4':
            $link = "";
            break;

        case '5':
            $link = "";
            break;

        case '6':
            $link = "";
            break;

        case '7':
            $link = "";
            break;

        case '8':
            $link = "";
            break;

        case '9':
            $link = "";
            break;

        case '10':
            $link = "";
            break;

        case '11':
            $link = "";
            break;

        case '12':
            $link = "";
            break;

        case '13':
            $link = "";
            break;
    }
}
    elseif (isset($_POST['jadwalguru'])){

    $jadwalguru = $_POST['jadwalguru'];

        switch ($jadwalguru) {

            case '1':
                $link = "https://web.whatsapp.com/";
                break;

            case '2':
                $link = "https://facebook.com/";
                break;

            case '3':
                $link = "https://facebook.com/";
                break;

            case '4':
                $link = "https://facebook.com/";
                break;

            case '5':
                $link = "https://facebook.com/";
                break;

            case '6':
                $link = "https://facebook.com/";
                break;

            case '7':
                $link = "https://facebook.com/";
                break;

            case '8':
                $link = "https://facebook.com/";
                break;

            case '9':
                $link = "https://facebook.com/";
                break;

            case '10':
                $link = "https://facebook.com/";
                break;

            case '11':
                $link = "https://facebook.com/";
                break;

            case '12':
                $link = "https://facebook.com/";
                break;

            case '13':
                $link = "https://facebook.com/";
                break;
        }
    }

else {
    echo "Data belum dikirim";
}

    header("Location: $link");
    exit();
?>
