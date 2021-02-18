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
            break;
        default:
            $reason = ' Ihr Interesse';
            $link = $_SERVER['SCRIPT_NAME']."php?c=accounts&a=main";
            break;
    };
?>
<div id="messageBlock">
        <script>
            setTimeout(function (){
                window.location.href = '<? echo $link ?>';
            }, 3000);
        </script>
        <p id="messageReason">Danke für <? echo $reason ?>, Sie werden in Kürze weitergeleitet...
        <noscript>
            <br> Erfolgt keine automatische Weiterleitung, klicken sie
            <a href='<? echo $link ?>'>hier.</a>
        </noscript>
        </p>
    </div>
