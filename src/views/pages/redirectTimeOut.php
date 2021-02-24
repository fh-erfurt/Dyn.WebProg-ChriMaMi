<?php
    switch($_GET['o'])
    {
        case 'mail' :
            $reason = ' Ihre Nachricht';
            $link = $_SERVER['SCRIPT_NAME']."?c=pages&a=main";
            break;
        case 'signup':
            $reason = ' Ihre Anmeldung';
            $link = $_SERVER['SCRIPT_NAME']."?c=accounts&a=login";
            $timeOutDuration = 3000;
            break;
        case 'checkout':
            $reason = 'Ihren Einkauf, wir setzen uns umgehend mit Ihnen in Verbindung, um mit Ihnen alle Details zur Ihrer Bestellung zu klären';
            $link = $_SERVER['SCRIPT_NAME']."?c=pages&a=main";
            $timeOutDuration = 12000;
            break;
        default:
            $reason = ' Ihr Interesse';
            $link = $_SERVER['SCRIPT_NAME']."?c=pages&a=main";
            $timeOutDuration = 3000;
            break;
    };
?>
<div id="messageBlock">
        <script>
            setTimeout(function (){
                window.location.href = '<? echo $link ?>';
            }, <? echo $timeOutDuration ?>);
        </script>
        <p id="messageReason">Danke für <? echo $reason ?>, Sie werden in Kürze weitergeleitet...
        <noscript>
            <br> Erfolgt keine automatische Weiterleitung, klicken sie
            <a href='<? echo $link ?>'>hier.</a>
        </noscript>
        </p>
    </div>
