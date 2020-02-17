
<div class="col-md-8">
<?php
    if(!isset($_SESSION["user"])): ?>
    <div class="card my-2">
        <h5 class="card-header text-center">Login</h5>
        <div class="card-body">
            <div class="form-group">
                <form action="index.php?page=lgin" method="POST" enctype="">
                    <label for="username" class="text-muted">Username:</label>
                    <input type="text" class="form-control" name="username" placeholder="Username...">
            </div>
            <div class="form-group">
                <label for="password" class="text-muted">Password:</label>
                <input type="password" class="form-control" name="pass" placeholder="Password...">
            </div>
            <div class="form-group">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="submit">Login</button>
                  </span>
                </form>
               <?php
               endif;
               if(isset($_SESSION["uspesno"])): ?>
    <div class="alert alert-success"><?= $_SESSION["uspesno"]?> </div>
    <?php endif;?>
            </div>
          <?php if(isset($_SESSION["error"])): ?>
            <div class="alert alert-danger"><?= $_SESSION["error"]?> </div>
          <?php endif; ?>
        </div>
    </div>
</div>
