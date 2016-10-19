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
                    <p>Please select your gender below</p>
                </div>
                <div class="spacer_gender"></div>
                <a href="
EOD;

$html_general_2 = <<<'EOD'
">
                    <div class="option_gender"><p>
EOD;
$html_general_3 = <<<'EOD'
</p></div>
                </a>
                <div class="spacer"></div>
                <a href="
EOD;

$html_general_4 = <<<'EOD'
">
                    <div class="option_gender"><p>
EOD;

$html_general_5 = <<<'EOD'
</p></div>
                </a>
                <div class="spacer_gender"></div>
            </div>
        </body>
</html>
EOD;

if (rand(1,2) == 1) {
    if ($_GET['colour'] === 'red') {
        echo $html_general_1.'save.php?colour=red&gender=female'.$html_general_2.'FEMALE'.$html_general_3.'save.php?colour=red&gender=male'.$html_general_4.'MALE'.$html_general_5;
    } elseif ($_GET['colour'] === 'green') {
        echo $html_general_1.'save.php?colour=green&gender=female'.$html_general_2.'FEMALE'.$html_general_3.'save.php?colour=green&gender=male'.$html_general_4.'MALE'.$html_general_5;
    } elseif ($_GET['colour'] === 'blue') {
        echo $html_general_1.'save.php?colour=blue&gender=female'.$html_general_2.'FEMALE'.$html_general_3.'save.php?colour=blue&gender=male'.$html_general_4.'MALE'.$html_general_5;
    }
} else {
    if ($_GET['colour'] === 'red') {
        echo $html_general_1.'save.php?colour=red&gender=male'.$html_general_2.'MALE'.$html_general_3.'save.php?colour=red&gender=female'.$html_general_4.'FEMALE'.$html_general_5;
    } elseif ($_GET['colour'] === 'green') {
        echo $html_general_1.'save.php?colour=green&gender=male'.$html_general_2.'MALE'.$html_general_3.'save.php?colour=green&gender=female'.$html_general_4.'FEMALE'.$html_general_5;
    } elseif ($_GET['colour'] === 'blue') {
        echo $html_general_1.'save.php?colour=blue&gender=male'.$html_general_2.'MALE'.$html_general_3.'save.php?colour=blue&gender=female'.$html_general_4.'FEMALE'.$html_general_5;
    }
}
?>
