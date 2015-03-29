<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    </head>
    <body style="padding-left: 30px;">
        <style>
            .glyphicon{
                font-size: 2em;
            }
        </style>
        <h1>Iconify</h1><p>Turn ugly hashes into beautiful icons</p><p>In this test I tried to take letters and replace them with icons and colors. I'm still testing for collision issues. </p><h1>How it works</h1><p>We transform the 1st letter into an icon. The second letter gets transformed into a color. Each letter has a unique icon and color. If the hash is impair, the last letter will be colored in black.</p><p>Pull requests are welcome.</p>
        <hr>

        <h2>TEST : </h2>

        <form action="index.php" method="get">
            <input type="text" name="msg">
            <button type="submit">Submit</button>
        </form>
        <span> iconHash : </span>
        <?php
        if (isset($_GET['msg']) && $_GET['msg'] != "") {
            $msg = $_GET['msg'];
            $broken = str_split($msg);
            $i = 0;
            $len = 0;
            if (count($broken) % 2 == 1) {
                $len = 1;
            }
            $icon = "";
            $pace = 0;
            for ($index = 0; $index < count($broken); $index++) {

                if ($index % 2 == 0) {
                    $color = colorify($broken[$index]);
                } else {
                    $icon = iconify($broken[$index]);
                }
                if ($index == (count($broken) - 1) && ($color != NULL && $len == 1)) {
                    $icon = iconify($broken[$index]);
                    $color = "black";
                }

                if ($icon != NULL && $color != NULL) {
                    echo '<span style="color:' . $color . '" class="glyphicon ' . $icon . '"></span>';
                    $color = NULL;
                    $icon = NULL;
                }
            }
        }
        ?>
        <hr>
        <br>
        Find the project on <a href="https://github.com/RaedsLab/Iconify">Github</a>.
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-52412775-1', 'auto');
            ga('send', 'pageview');
        </script>


    </body>
</html>

<?php

function iconify($char) {

    if (strlen($char) != 1) {
        return -1;
    }
    if (!ctype_alpha($char)) {
        return -1;
    }
    $upper = strtoupper($char);

    switch ($upper) {
        case 'A':
            return "glyphicon-cloud";
        case 'B':
            return "glyphicon-envelope";
        case 'C':
            return "glyphicon-pencil";
        case 'D':
            return "glyphicon-heart";
        case 'E':
            return "glyphicon-star";
        case 'F':
            return "glyphicon-trash";
        case 'G':
            return "glyphicon-home";
        case 'H':
            return "glyphicon-road";
        case 'I':
            return "glyphicon-lock";
        case 'J':
            return "glyphicon-flag";
        case 'K':
            return "glyphicon-headphones";
        case 'L':
            return "glyphicon-camera";
        case 'M':
            return "glyphicon-gift";
        case 'N':
            return "glyphicon-fire";
        case 'O':
            return "glyphicon-eye-open";
        case 'P':
            return "glyphicon-plane";
        case 'Q':
            return "glyphicon-magnet";
        case 'R':
            return "glyphicon-bell";
        case 'S':
            return "glyphicon-globe";
        case 'T':
            return "glyphicon-phone-alt";
        case 'U':
            return "glyphicon-scissors";
        case 'V':
            return "glyphicon-sunglasses";
        case 'W':
            return "glyphicon--tree-deciduous";
        case 'X':
            return "glyphicon-remove";
        case 'Y':
            return "glyphicon-wrench";
        case 'Z':
            return "glyphicon-user";
        case '0':
            return "glyphicon-apple";
        case '1':
            return "glyphicon-baby-formula";
        case '2':
            return "glyphicon-cd";
        case '3':
            return "glyphicon-leaf";
        case '4':
            return "glyphicon-book";
        case '5':
            return "glyphicon-film";
        case '6':
            return "glyphicon-print";
        case '7':
            return "glyphicon-scale";
        case '8':
            return "glyphicon-briefcase";
        case '9':
            return "glyphicon-thumbs-up";
    }
}

function colorify($char) {

    if (strlen($char) != 1) {
        return -1;
    }
    if (!ctype_alpha($char)) {
        return -1;
    }
    $upper = strtoupper($char);

    switch ($upper) {
        case 'A':
            return "#ff7300";
        case 'B':
            return "#ff4d00";
        case 'C':
            return "#873d00";
        case 'D':
            return "#87715f";
        case 'E':
            return "#ff0000";
        case 'F':
            return "#ffe0b3";
        case 'G':
            return "#876500";
        case 'H':
            return "#f2ff00";
        case 'I':
            return "#f200ff";
        case 'J':
            return "#448700";
        case 'K':
            return "#c2ffb2";
        case 'L':
            return "#00ff1a";
        case 'M':
            return "#00ffb2";
        case 'N':
            return "#00875f";
        case 'O':
            return "#b2fff4";
        case 'P':
            return "#008787";
        case 'Q':
            return "#00d9ff";
        case 'R':
            return "#00b3ff";
        case 'S':
            return "#008cff";
        case 'T':
            return "#5f7587";
        case 'U':
            return "#003687";
        case 'V':
            return "#b3d1ff";
        case 'W':
            return "#070087";
        case 'X':
            return "#b6b3ff";
        case 'Y':
            return "#735f87";
        case 'Z':
            return "#a600ff";
        case '0':
            return "glyphicon-apple";
        case '1':
            return "glyphicon-baby-formula";
        case '2':
            return "glyphicon-cd";
        case '3':
            return "glyphicon-leaf";
        case '4':
            return "glyphicon-book";
        case '5':
            return "glyphicon-film";
        case '6':
            return "glyphicon-print";
        case '7':
            return "glyphicon-scale";
        case '8':
            return "glyphicon-briefcase";
        case '9':
            return "glyphicon-thumbs-up";
    }
}
?>

