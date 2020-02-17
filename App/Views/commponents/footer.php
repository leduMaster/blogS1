
</div>
</div>
<footer class="py-5 " style="background-color: #2a88bd;">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
        <p class="m-0 text-center text-white">Dusan Nikolic - <a style="color: darkslateblue" href="#">Dokumentacija</a></p>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {


        $('body').on('click', '.pagination a', function(e) {
            e.preventDefault();
            $('#load a').css('color', '#dfecf6');
            $('#load').append('<img style="position: absolute; left: 0; top: 0; z-index: 100000;" src="/images/loading.gif" />');

            var url = $(this).attr('href'),
                page = url.split('&')[0];
            page = page.split('page=')[1];
            var query=$('#search').val();
            if(query == ''){
                query = 'undefined';
            }
            $('.postovi').html("");
            getPostovi(page, query);

            window.history.pushState("", "", url);
        });

        $(document).on('click', '#search_d', function(e){
            e.preventDefault();
            var url = window.location.href,
                page = url.split('&')[0];
            page = page.split('page=')[1];
            var query=$('#search').val();

            if(query == ''){
                query = 'undefined';
            }
            $('.postovi').html("");
            getPostovi(page, query);
            window.history.pushState("", "", url);
        });

        function getPostovi(page, qveri) {
            var url = '/blog/public/?page='+page+'&qveri='+qveri;
            $.ajax({
                url : url,
                async:false,
                success: function (data) {
                    $('.postovi').html(data);
                    console.log(url);},
                error:function () {
                    alert('Postovi ne mogu biti ucitani');
                }
            });
        }
    });


</script>


</div>
</body>
<script src="App/assets/vendor/jquery/jquery.min.js"></script>
<script src="App/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="App/assets/js/ekko-lightbox.js"></script>
<script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({ wrapping: false });
    });
</script>
</html>