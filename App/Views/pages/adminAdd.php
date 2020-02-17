

<form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group3">
        <label>Naslov:</label>
        <input type="text" name="naslov" class="form-control"/>
    </div>

    <div class="form-group">
        <label>Sadrzaj:</label>
        <textarea  name="tekst" class="form-control" rows="7"></textarea>
    </div>
    <div class="form-group">
        <label>Slika:</label>
        <input type="file" name="slika" class="form-control"  />
    </div>ddddddddddddddddddddddddddddddddd
    <div class="form-group">
        <label>Opis:</label>
        <input type="text" name="opis" class="form-control"/>
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Izmeni" name="post"/>
    </div>

</form>