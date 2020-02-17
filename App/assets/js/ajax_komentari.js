$(document).ready(function() {
    var komentarA = "";
    var id_pA = 0;
        let id = 0;
    let url = "";
    function timeConverter(UNIX_timestamp) {
        let a = new Date(UNIX_timestamp * 1000);
        let months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        let year = a.getFullYear();
        let month = months[a.getMonth()];
        let date = a.getDate();
        let hour = a.getHours();
        let min = a.getMinutes();
        let sec = a.getSeconds();
        let time = date + ' ' + month + ' ' + year + ' ' + hour + ':' + min + ':' + sec;
        return time;
    }

    function remove(id) {
        let elem = document.getElementById(id);
        return elem.parentNode.removeChild(elem);
    }

    $('.add_dugmad').click(function(e){
        e.preventDefault();
            komentarA = $('#komBox').val();
              id_pA =  $('#id_p').val();
            url = 'komentar/addAjax/Komentar';
            alert(komentarA);
        alert(id_pA);
            $.ajax(
            {
                url: url,
                headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                method: 'POST',
                data: {
                    komentar : komentarA ,
                    id_p : id_pA
                },
                success: function(dat){
                    $('body').html(dat);
                },
                fail : function () {
                    alert("Komentar nije unet - Internal Server Error 500");
                }
            });
    });

    $('.delete_dugmad').click(function(e){
        e.preventDefault();
        id = $(this).closest('tr').attr('id');
         url = 'komentar/removeAjax/'+id;
        $.ajax(
            {
         url: url,
         headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
         method: 'DELETE',
            success: function(){
            remove(id);
            alert("Uspesno obrisan komentar");
        },
                fail : function () {
                    alert("Komentar nije obrisan - Internal Server Error 500");
                }
       });
    });


});
