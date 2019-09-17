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
$less->compileFile('less/31.less', 'css/31.css');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>139</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
              <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      
   
        <link href="<?php echo $url_path ?>/css/31.css" rel="stylesheet" type="text/css" />
        
        <?php
        if (!class_exists('lessc')) {
            include('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/31.less', 'css/31.css');
        ?>

<script>
function validateForm() {
  var yourName = document.forms["myForm"]["yourName"].value;
  var Email = document.forms["myForm"]["Email"].value;
  var Sdt = document.forms["myForm"]["sdt"].value;

  var x_character = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  if (yourName == "" || Email == ""   || Email == ""  ) {
    alert("Khong de trong");
    return false;
  }
  if(!x_character.test(Email))
        {
            alert('Hay nhap dia chi email hop le.\nExample@gmail.com');
             email.focus; 
             return false; 
        }
        else 
        {
            return true;
        }

}
</script>
    </head>
    <body >
        <?php include './31-content.php'; ?>
    </body>
</html>