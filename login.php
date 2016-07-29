<?php include('partials/header.php'); ?>
      <!-- Example row of columns -->
      <div class="row">

        <div class="col-md-12">

          <h1>Welcome!</h1>
          <h2>Please log in to continue</h2>
          <p>Not a member? <a href="register.html">Sign up for free here!</a></p>

          <hr>

          <form id="login-form">
            <div class="input-group">
              <span class="input-group-addon" id="sizing-addon1">👥</span>
              <input id="username" type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1" required>
            </div>

            <div class="input-group">
              <span class="input-group-addon" id="sizing-addon1">🔑</span>
              <input id="password" type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon1" required>
            </div>

            <input type="submit" class="btn btn-primary login" id="submit" />
          </form>

        </div>
      <!-- end row -->
      </div>

      <?php include('partials/footer.php'); ?>