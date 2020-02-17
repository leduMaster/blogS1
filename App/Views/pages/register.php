
<link href="{{asset ('css/style.css')}}" rel="stylesheet">
    <script src="{{asset ('js/regularni.js')}}"></script>
@endsection

@section('content')
<div class="col-md-8">
        <div class="container">
            <div class="row main">
                <div class="main-login main-center">
                    <h5>Sign up </h5>
                    <form id="reg_forma" class="" method="post" action="index.php?page=regUser" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Korisnicko ime</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="tbUsername" id="name"  placeholder="Enter
                                     your Name"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label"> Email</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="tbEmail" id="email"  placeholder="Enter your Email"/>
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Password</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="tbPass" id="password"  placeholder="Enter your Password"/>
                                </div>
                            </div>
                        </div>



                        <div class="form-group ">

                            <input type="hidden" name="Uloga" value="2">
                            <input type="submit"  class="btn-block btn-primary" name="regu" value="register">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection