
<table class="table">

    <tr>Komentari</tr>
    <?php
    if(isset($komm))
    foreach($komm as $k):?>
                <tr id="<?=$k->id_comm?>">
                    <td> <?=$k->username?> <br> <?= date('d.m.Y  H:i', $k->datum)?>
                                        </td>
                    <td><?=$k->comm?> </td>
                    <td>
                        <?php if(isset($_SESSION["user"]))
                            if($_SESSION["user"]->id_uloga==1 || $_SESSION["user"]->username==$k->username):?>
                            <form method="POST" action="index.php?page=komdel&id_comm=<?=$k->id_comm?>" enctype="">
                                <input name="submit"type="submit" class="delete_dugmad nav-link text-danger " value="Izbrisi komentar"></form>
                   <?php endif;?>
                    </td>
                </tr>
                <?php endforeach;?>
            </form>
</table>