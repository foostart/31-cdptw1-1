<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/818.less', 'css/818.css');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>818</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/818.css" rel="stylesheet" type="text/css" />

    <?php
    if (!class_exists('lessc')) {
        include('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/818.less', 'css/818.css');
    ?>

    <script>
        function validateForm() {
            var yourName = document.forms["myForm"]["yourName"].value;
            var Email = document.forms["myForm"]["Email"].value;
            var Sdt = document.forms["myForm"]["sdt"].value;

            var x_character = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if (yourName == "" || Email == "" || Sdt == "") {
                alert("Khong de trong");
                return false;
            }
            if (!x_character.test(Email)) {
                alert('Hay nhap dia chi email hop le.\nExample@gmail.com');
                email.focus;
                return false;
            } else {
                return true;
            }

        }
    </script>
</head>

<body>
    <?php include './818-content.php'; ?>
</body>

</html>