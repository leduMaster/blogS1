<?php ?>
<div class="col-md-10 ">
    <?php if(isset($_SESSION["uspesno"])): ?>
        <div class="alert alert-success"><?= $_SESSION["uspesno"]?> </div>
    <?php endif;
    if(isset($_SESSION["error"])): ?>
        <div class="alert alert-danger"><?= $_SESSION["error"]?></div>
        <?php unset($_SESSION["error"])?>
    <?php endif;?>
    <!-- forma za dodavanje posta-->
    <div class="col-md-8">
        <h3>Edituj post</h3>
        <?php
        if(isset($posts))
        foreach($posts as $p):?>

        <form action="index.php?page=admin/editdo" method="post" enctype="multipart/form-data">

            <div class="form-group3">
                <label>Naslov:</label>
                <input type="text" value="<?=$p->naslov?>"  name="naslov"
                       class="form-control"/>
                <input type="hidden" value="<?=$p->id_post?>"  name="id" class="form-control"/>
            </div>

            <div class="form-group">
                <label>Sadrzaj:</label>
                <textarea  name="tekst" placeholder="<?=$p->teks?>"  value="<?=$p->teks?>" class="form-control" rows="7"></textarea>
            </div>
            <div class="form-group">
                <label>Slika:</label>
                <input type="file" name="slika"  class="form-control" />
                <input type="hidden" value="<?=$p->slika?>"  name="slicka" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Opis:</label>
                <input type="text" name="opis" value="<?=$p->opis?>"  class="form-control"/>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="postEdit"/>
            </div>

        </form>
<?php endforeach;?>