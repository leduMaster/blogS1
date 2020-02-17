$(document).ready(function(){
    $.ajax({
        type: 'GET',
        url: baseUrl + 'ajax/nesto',
        success: function(data, xhr){
            console.log(data);

            console.log(xhr);
            showAnketa(data);
        } ,
        error: function(xhr, status, error){
            console.log(xhr);
            console.log(status);
            console.log(error);
        }
    });
    $('body').on('click', '.showResult', function(){
        $.ajax({
            type: 'GET',
            url: baseUrl + '/ajax/result',
            success: function(data, xhr){
                console.log(data);
                console.log(xhr);
                $('#result').html(data);
            },
            error: function(xhr, status, error){
                console.log(xhr);
                console.log(status);
                console.log(error);

            }
        });
    });
    function showAnketa(data){
        var anketaHtml =
            "<h2 class='card-title'>Anketa</h2><p class='card-text'>Best sport car:</p>"+
            "<form name='forma1' method='POST' action='"+baseUrl+"ajax/insert'>";


        $.each(data, function(key, value){
            anketaHtml +=
                '<p><input type="radio" value='+value.id_anketa+' name="anketa"/>&nbsp&nbsp'+value.naziv+'<br/></p>';

        },
        anketaHtml+='<button type="submit" class="btn btn-success showResult" >Glasaj</button></form>'

    );
        $('#anketa').html(anketaHtml);
    }
});