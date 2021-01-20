<!--CONTACT PAGE-->

<!DOCTYPE HTML>
<html lang="en">

<head>

    <title> CONTACT | Olivia Warner </title>
    <link rel="icon" type="image/avatar.png" href="images/avatar.png">

    <!--Basic style sheet (nav) -->
    <!--Applies to every page-->
    <link rel="stylesheet" href="basic_style.css">
    <link rel="stylesheet" href="contact.css">

    <!--Viewport adjustment for mobile phones-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!--Font Awesome Script-->
     <script src="https://kit.fontawesome.com/575868ac71.js" crossorigin="anonymous"></script>


    <!--Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Permanent Marker' rel='stylesheet'>

    <!--Bootstrap Styling-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</head>

<body>

    <!--***** Navbar *****-->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #9933CC">
      <a class="navbar-brand" href="index.html">
        <h1 id="name">Olivia Warner</h1>
      </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation" data-target=".navbar-collapse">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">home<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                  <a class="nav-link" href="about.html">about</a>
                </li>
            <li class="nav-item">
              <a class="nav-link" href="portfolio.html">portfolio</a>
            </li>
            <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="contact.php">contact</a>
            </li>
            </ul>
        </div>
    </nav>

    <!--Contact form-->

    <div class="row">

    <div class="col">
    <div class="form-container">
      
    <h2 class="form-head">Say Hi! <i class="fas fa-smile-beam"></i></h2>

    <form class="contact" action="contact.php" method="POST"><br>

      <div class="form-floating">
      <input type="text" class="form-control" name="name" placeholder="Full Name"><br>
      </div>

      <div class="form-floating">
      <input type="text" class="form-control" name="email" placeholder="E-mail"><br>
      </div>

      <div class="form-floating">
      <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
      </div>

      <div class="form-floating">
      <textarea class="form-control" name="msg" placeholder="Message" rows="5"></textarea><br>
      </div>

      <button type="submit" name="submit" class="btn btn-dark">Send</button>
    </form>
</div>
  </div>

  <div class="col">
    <br><br>
  <h2 class="featurette-heading" id="connect-head" style="text-align: center;">CONNECT WITH ME</h2>
  <br>

    <div class="profile">
      <img class="mr-3" src="imgs/contact/OliviaWarner.jpeg" alt="Olivia Warner" id="contact-pic" class="img-fluid">
    </div>
      
  <br><br>
  <div class="connect">
    <a class="linkedin"><a title="Olivia Warner LinkedIn" href="https://www.linkedin.com/in/olivia--warner/" target="_blank"><i class="fab fa-linkedin" style="color:black" id="contact-social"></i></a>
    <a class="github"><a title="Olivia Warner Github" href="https://github.com/oliviawarner" target="_blank"><i class="fab fa-github-square" style="color:black" id="contact-social"></i></a>
    <a class="facebook"><a title="Olivia Warner Facebook" href="https://www.facebook.com/olivia.warner.54/" target="_blank"><i class="fab fa-facebook-square" style="color:black" id="contact-social"></i></a>
   <a class="youtube"><a title="Olivia Warner Youtube" href="https://www.youtube.com/channel/UCHGgkmlgNKDgD93zCp_JgJA" target="_blank"><i class="fab fa-youtube-square" style="color:black" id="contact-social"></i></a>
  </div>
  
</div>
</div>



              <?php
                if(isset($_POST['submit'])) {
                  $name = $_POST['name'];
                  $email = $_POST['email'];
                  $subject = $_POST['subject'];
                  $msg = $_POST['msg'];

                  $mailTo = "ojw1002@sru.edu";
                  $headers = "From: ".$email;
                  $txt = "You have received an e-mail from".$name."\n\n".$msg;


                  mail($mailTo,$subject,$txt,$headers);
                  header("Location: index.html?mailsent");
                }
                ?>

  </body>
</html>