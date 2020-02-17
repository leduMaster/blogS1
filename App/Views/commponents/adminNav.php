<!-- ============================================================== -->
<!-- navbar -->
<!-- ============================================================== -->
<div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <a class="navbar-brand" href="{{route('index')}}">DN - Electronic Administracija</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">

                <li class="nav-item ">
                    <a class="nav-link nav-icons" href="{{route('logout')}}" ><i class="fas fa-fw fa-sign-out-alt"></i> </a>

                </li>
                <li class="nav-item ">
                    <a class="nav-link nav-icons" href="{{route('index')}}" ><i class="fas fa-fw fa-home"></i> </a>

                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- ============================================================== -->
<!-- end navbar -->
<!-- ============================================================== -->