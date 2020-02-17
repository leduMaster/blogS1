 <nav class="navbar navbar-expand-lg navbar-dark  fixed-top" style="background-color: #2a88bd">
      <div class="container">
        <a class="navbar-brand text-light" href="index.php?page=home">DN Electronic's - Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><img src="App/assets/img/toggle-icon.png" class="img-fluid"/></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto nav">

            <li class="nav-item {{($loop->first)? 'active':'' }}">
                <a class="nav-link text-light" href="?page=home">Home
                    <span class="sr-only">(current)</span>
              </a>
            </li>
              <li class="nav-item">
                  <a class="nav-link text-light" href="?page=about">About
                      <span class="sr-only">(current)</span>
                  </a>
              </li>
                  <?php
         if(isset($_SESSION["user"]) && $_SESSION["user"]->id_uloga==1): ?>
                     <li class="nav-item">
                          <a class="nav-link text-light" href="?page=admin/add">Admin</a>
                      </li>
         <?php endif; ?>
              <?php
              if(isset($_SESSION["user"])): ?>
                    <li class="nav-item">
                          <a class="nav-link text-light" href="?page=logout">Logout</a>
                      </li>
              <?php endif; ?>
              <?php
               if(!isset($_SESSION["user"])): ?>
                    <li class="nav-item">
                          <a class="nav-link text-light" href="?page=reg">Register</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-light" href="?page=login">Login</a>
                      </li>
              <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
        <div class="row">
