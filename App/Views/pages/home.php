
    <link href="App/assets/css/style.css" rel="stylesheet">

<div class="col-md-10 ">
    <?php if(isset($_SESSION["uspesno"])): ?>
    <div class="alert alert-success"><?= $_SESSION["uspesno"]?> </div>
    <?php endif;
    if(isset($_SESSION["error"])): ?>
    <div class="alert alert-danger"><?= $_SESSION["error"]?></div>
    <?php unset($_SESSION["error"])?>
    <?php endif;

                if(isset($posts))
                foreach($posts as $p):?>
            <div class="card mb-4">
            <img class="card-img-top" src="App/assets/<?=$p->slika?>" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"><?=$p->naslov;?></h2>
              <p class="card-text"><?=$p->teks;?></p>
              <a href="index.php?page=post&id=<?=$p->id_post?>" class="btn btn-primary">Pročitaj vest &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              <?= date('d.m.Y  H:i', $p->kreiran);?>
              <a href="index.php?page=post&id=<?=$p->id_post?>">Dodaj komentar</a>
            </div>
          </div>
             <?php endforeach;  ?>
        </div>