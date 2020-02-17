
<link href="App/assets/css/style.css" rel="stylesheet">

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
        <h3>Dodaj post</h3>

        <form action="index.php?page=admin/adddo" method="post" enctype="multipart/form-data">

            <div class="form-group3">
                <label>Naslov:</label>
                <input type="text" value="" name="naslov"
                       class="form-control"/>
            </div>

            <div class="form-group">
                <label>Sadrzaj:</label>
                <textarea  name="tekst" class="form-control" rows="7"></textarea>
            </div>
            <div class="form-group">
                <label>Slika:</label>
                <input type="file" name="slika"  class="form-control"  />
            </div>
            <div class="form-group">
                <label>Opis:</label>
                <input type="text" name="opis"  class="form-control"/>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="postAdd"/>
            </div>

        </form>


        <!-- tabela / lista svih postova-->

        <table class="table">
            <tr>Informacije o postovima</tr>
            <tr>
                <td>Naslov:</td>
                <td>Tekst:</td>
                <td>Kreiran:</td>
                <td>Slika:</td>

                <td>Brisanje:</td>
                <td>Izmena:</td>
            </tr>
    <?php
    if(isset($posts)):
                foreach($posts as $p):
                    ?><tr>
                        <td><?=$p->naslov?> </td>
                    <td><?=$p->teks?> </td>
                    <td><?= date('d.m.Y  H:i', $p->kreiran) ?> </td>

                    <td><img class="card-img-top"  width="200px" height="200px" src="App/assets/<?=$p->slika?>" alt="Card image cap"> </td>

                    <td> <a href="index.php?page=admin/edit&id=<?=$p->id_post?>">Update post</a> </td>
                    <form method="POST" action="index.php?page=admin/Del&id=<?=$p->id_post?>">
                        <td> <input type="submit" name="izbr" value="Izbrisi post">
                            <input type="hidden" name="izbrID"value="<?=$p->id_post?>">
                            </td></form>
                    </tr>

    <?php endforeach; endif; ?>

        </table>
</div>