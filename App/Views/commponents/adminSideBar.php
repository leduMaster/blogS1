<div class="nav-left-sidebar sidebar-dark">
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="menu-list" style="overflow: hidden; width: auto; height: 100%;">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">

                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('post.index')}}"  data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Administracija <span class="badge badge-success">6</span></a>
                            <div id="submenu-1" class="toggle submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('menu.index')}}">Admin Menija</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('user.create')}}">Admin Korisnika</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('post.index')}}">Admin Postova</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('activityIndex')}}">Aktivnosti Korisnika</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 657px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
</div>