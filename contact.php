<!--CONTACT PAGE-->

<!DOCTYPE HTML>
<html lang="en">

<head>

    <title> CONTACT ME </title>
    <link rel="icon" type="image/avatar.png" href="images/avatar.png">

    <!--Basic style sheet (nav) -->
    <!--Applies to every page-->
    <link rel="stylesheet" href="basic_style.css">
    <link rel="stylesheet" href="contact.css">

    <!--Viewport adjustment for mobile phones-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


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
    <div class="contact">
      <h1>Say Hi!</h1>
      <form class="form-floating" action="contact.php" method="POST">
        <label for="fname" id="label">First Name: </label><br>
        <input type="text" class="form-control" name="name" placeholder="First Name" required>
        <br>
        <label for="lname" id="label">Last Name: </label><br>
        <input type="text" class="form-control" name="name" placeholder="Last Name" required>
        <br>
        <label for="email" id="label">Email: </label><br>
        <input type="email" class="form-control" name="email" placeholder="example@example.com" required>
        <br>
        <label for="msg" id="label">Message: </label><br>
        <textarea class="form-control" name="msg"rows="6" maxlength="3000" placeholder="Write a message" required></textarea>
        <br>
        <button type="submit" class="btn btn-outline-primary" id="sbtn">Send</button>
      </form>
    </div>

    <?php
    ?>


</body>

</html>