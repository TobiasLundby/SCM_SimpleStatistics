<?php
$html_general_1 = <<<'EOD'
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <title>Page Title</title>
    </head>
        <body>
            <div class="body_main">
                <div class="main_p">
                    <p>Which colour do you like the most?</p>
                    <p style="font-size: 20pt;margin-top: 0px;">(first impression)</p>
                </div>
                <div class="spacer"></div>
                <a href="gender.php?colour=
EOD;

$html_general_2 = <<<'EOD'
">
                    <div class="option_
EOD;

$html_general_3 = <<<'EOD'
"></div>
                </a>
                <div class="spacer"></div>
                <a href="gender.php?colour=
EOD;

$html_general_4 = <<<'EOD'
">
                    <div class="option_
EOD;

$html_general_5 = <<<'EOD'
"></div>
                </a>
                <div class="spacer"></div>
                <a href="gender.php?colour=
EOD;

$html_general_6 = <<<'EOD'
">
                    <div class="option_
EOD;

$html_general_7 = <<<'EOD'
"></div>
                </a>
                <div class="spacer"></div>
            </div>
        </body>
</html>
EOD;

$rand_num = rand(1,6);
if ($rand_num == 1) {
    echo $html_general_1.'red'.$html_general_2.'red'.$html_general_3.'green'.$html_general_4.'green'.$html_general_5.'blue'.$html_general_6.'blue'.$html_general_7;
} elseif ($rand_num == 2) {
    echo $html_general_1.'red'.$html_general_2.'red'.$html_general_3.'blue'.$html_general_4.'blue'.$html_general_5.'green'.$html_general_6.'green'.$html_general_7;
} elseif ($rand_num == 3) {
    echo $html_general_1.'blue'.$html_general_2.'blue'.$html_general_3.'red'.$html_general_4.'red'.$html_general_5.'green'.$html_general_6.'green'.$html_general_7;
} elseif ($rand_num == 4) {
    echo $html_general_1.'blue'.$html_general_2.'blue'.$html_general_3.'green'.$html_general_4.'green'.$html_general_5.'red'.$html_general_6.'red'.$html_general_7;
} elseif ($rand_num == 5) {
    echo $html_general_1.'green'.$html_general_2.'green'.$html_general_3.'blue'.$html_general_4.'blue'.$html_general_5.'red'.$html_general_6.'red'.$html_general_7;
} elseif ($rand_num == 6) {
    echo $html_general_1.'green'.$html_general_2.'green'.$html_general_3.'red'.$html_general_4.'red'.$html_general_5.'blue'.$html_general_6.'blue'.$html_general_7;
}
?>
