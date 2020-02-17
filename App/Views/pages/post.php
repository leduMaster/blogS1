
<div class="col-md-8">
    <?php
    if(isset($posts))
    foreach($posts as $p):?>

    <div class="card mb-4">
        <img class="card-img-top" src="App/assets/<?=$p->slika;?>" alt="Card image cap">
        <div class="card-body">
            <h2 class="card-title"><?=$p->naslov;?></h2>
            <p class="card-text"><?=$p->teks;?></p>
        </div>
        <div class="card-footer text-muted">
            <?= date('d.m.Y  H:i', $p->kreiran);?>
            <?php if(isset($_SESSION["user"])): ?>
            <form action="index.php?page=comAdd" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_p" id="id_p" value="<?=$p->id_post?>"/>
                <div class="form-group3">
                    <label>Ostavite komentar:</label>
                    <input type="text" id="komBox" name="komentar" class="form-control"/>
                </div><br>
                <div class="form-group">
                    <input type="submit"  class="btn btn-primary add_dugmad" value="Dodaj komentar" name="dodajKomentar"/>
                </div>
            </form>
            <?php endif;?>
            <?php include_once('App/Views/commponents/comments.php');?>

        </div>
    </div>
    <?php endforeach;?>