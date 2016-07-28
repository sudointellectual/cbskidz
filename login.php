<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CBS Kids</title>

    <!-- Bootstrap -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include('nav.php'); ?>

   <div class="container">
      <!-- Example row of columns -->
      <div class="row">

        <h1>Welcome!</h1>
        <h2>Please log in to continue</h2>
        <p>Not a member? <a href="register.html">Sign up for free here!</a></p>

        <hr>

        <form>
          <div class="input-group">
            <span class="input-group-addon" id="sizing-addon1">👥</span>
            <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
          </div>

          <div class="input-group">
            <span class="input-group-addon" id="sizing-addon1">🔑</span>
            <input type="text" class="form-control" placeholder="Password" aria-describedby="sizing-addon1">
          </div>

          <button type="submit" class="btn btn-primary">Login</button>
        </form>

      <!-- end row -->
      </div>

      <?php include('footer.php'); ?>