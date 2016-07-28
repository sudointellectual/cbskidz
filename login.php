<?php include('partials/header.php'); ?>
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

          <a type="submit" class="btn btn-primary login" href="index.php">Login</a>
        </form>

      <!-- end row -->
      </div>

      <?php include('partials/footer.php'); ?>