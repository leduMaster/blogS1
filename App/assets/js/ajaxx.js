$(document).ready(function() {

    function timeConverter(UNIX_timestamp){
        var a = new Date(UNIX_timestamp * 1000);
        var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
        var year = a.getFullYear();
        var month = months[a.getMonth()];
        var date = a.getDate();
        var hour = a.getHours();
        var min = a.getMinutes();
        var sec = a.getSeconds();
        var time = date + ' ' + month + ' ' + year + ' ' + hour + ':' + min + ':' + sec ;
        return time;
    }
 $('.input-daterange').datepicker({
        todayBtn: 'linked',
        format: "dd-mm-yyyy",
        autoclose: true
    });

    $('#search').click(function(e){
        e.preventDefault();
        var start_date = $('#start_date').val();
        var end_date = $('#end_date').val();
        if(start_date != '' && end_date !='')
        {

            var ispis="<tr>\n" +
                "                        <th>Id</th>\n" +
                "                        <th>Username</th>\n" +
                "                        <th>Vreme</th>\n" +
                "                        <th>Opis</th>\n" +
                "                        <th>IP adresa korisnika</th>\n" +
                "                    </tr>";
            $.ajax({
                url: 'blog/public/activity/sorted/',
                data:{
                    is_date_search:$("#is_date_search").val(),
                    start_date:$("#start_date").val(),
                    end_date:$("#end_date").val()
                },
                success: function (aktivitis) {
                    for(var aktiviti of aktivitis){
                        ispis+= printAktivitis(aktiviti);
                    }
                    $("#order_table").html(ispis);
                    ispis = "";
                },
                error: function (alertt)
                {
                    alert(alertt);
                }
            });
        }
        else
        {
            alert("Obe vrednosti su obavezne!");
        }

    });





    function printAktivitis(aktiviti) {
        return`<tr>
            <td>${ aktiviti.id }</td>
            <td> ${ aktiviti.username }</td>
            <td id="ispisss"> ${ timeConverter(aktiviti.datee) }</td>
            <td>${ aktiviti.opis }</td>
            <td>${aktiviti.client_ip}</td>
            </tr>
`;
}



});
