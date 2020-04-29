<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/friend.css')}}">
    <style>
        body{
            margin-top:20px;
            background:#eee;
        }

        .profile-header {
            position: relative;
            overflow: hidden
        }

        .profile-header .profile-header-cover {
            background-image: url(https://via.placeholder.com/600x100/);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0
        }

        .profile-header .profile-header-cover:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, .75) 100%)
        }

        .profile-header .profile-header-content {
            color: #fff;
            padding: 25px
        }

        .profile-header-img {
            float: left;
            width: 120px;
            height: 120px;
            overflow: hidden;
            position: relative;
            z-index: 10;
            margin: 0 0 -20px;
            padding: 3px;
            border-radius: 4px;
            background: #fff
        }

        .profile-header-img img {
            max-width: 100%
        }

        .profile-header-info h4 {
            font-weight: 500;
            color: #fff
        }

        .profile-header-img+.profile-header-info {
            margin-left: 140px
        }

        .profile-header .profile-header-content,
        .profile-header .profile-header-tab {
            position: relative
        }

        .b-minus-1,
        .b-minus-10,
        .b-minus-2,
        .b-minus-3,
        .b-minus-4,
        .b-minus-5,
        .b-minus-6,
        .b-minus-7,
        .b-minus-8,
        .b-minus-9,
        .b-plus-1,
        .b-plus-10,
        .b-plus-2,
        .b-plus-3,
        .b-plus-4,
        .b-plus-5,
        .b-plus-6,
        .b-plus-7,
        .b-plus-8,
        .b-plus-9,
        .l-minus-1,
        .l-minus-2,
        .l-minus-3,
        .l-minus-4,
        .l-minus-5,
        .l-minus-6,
        .l-minus-7,
        .l-minus-8,
        .l-minus-9,
        .l-plus-1,
        .l-plus-10,
        .l-plus-2,
        .l-plus-3,
        .l-plus-4,
        .l-plus-5,
        .l-plus-6,
        .l-plus-7,
        .l-plus-8,
        .l-plus-9,
        .r-minus-1,
        .r-minus-10,
        .r-minus-2,
        .r-minus-3,
        .r-minus-4,
        .r-minus-5,
        .r-minus-6,
        .r-minus-7,
        .r-minus-8,
        .r-minus-9,
        .r-plus-1,
        .r-plus-10,
        .r-plus-2,
        .r-plus-3,
        .r-plus-4,
        .r-plus-5,
        .r-plus-6,
        .r-plus-7,
        .r-plus-8,
        .r-plus-9,
        .t-minus-1,
        .t-minus-10,
        .t-minus-2,
        .t-minus-3,
        .t-minus-4,
        .t-minus-5,
        .t-minus-6,
        .t-minus-7,
        .t-minus-8,
        .t-minus-9,
        .t-plus-1,
        .t-plus-10,
        .t-plus-2,
        .t-plus-3,
        .t-plus-4,
        .t-plus-5,
        .t-plus-6,
        .t-plus-7,
        .t-plus-8,
        .t-plus-9 {
            position: relative!important
        }

        .profile-header .profile-header-tab {
            background: #fff;
            list-style-type: none;
            margin: -10px 0 0;
            padding: 0 0 0 140px;
            white-space: nowrap;
            border-radius: 0
        }

        .text-ellipsis,
        .text-nowrap {
            white-space: nowrap!important
        }

        .profile-header .profile-header-tab>li {
            display: inline-block;
            margin: 0
        }

        .profile-header .profile-header-tab>li>a {
            display: block;
            color: #929ba1;
            line-height: 20px;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: 700;
            font-size: 12px;
            border: none
        }

        .profile-header .profile-header-tab>li.active>a,
        .profile-header .profile-header-tab>li>a.active {
            color: #242a30
        }

        .profile-content {
            padding: 25px;
            border-radius: 4px
        }

        .profile-content:after,
        .profile-content:before {
            content: '';
            display: table;
            clear: both
        }

        .profile-content .tab-content,
        .profile-content .tab-pane {
            background: 0 0
        }

        .profile-left {
            width: 200px;
            float: left
        }

        .profile-right {
            margin-left: 240px;
            padding-right: 20px
        }

        .profile-image {
            height: 175px;
            line-height: 175px;
            text-align: center;
            font-size: 72px;
            margin-bottom: 10px;
            border: 2px solid #E2E7EB;
            overflow: hidden;
            border-radius: 4px
        }

        .profile-image img {
            display: block;
            max-width: 100%
        }

        .profile-highlight {
            padding: 12px 15px;
            background: #FEFDE1;
            border-radius: 4px
        }

        .profile-highlight h4 {
            margin: 0 0 7px;
            font-size: 12px;
            font-weight: 700
        }

        .table.table-profile>thead>tr>th {
            border-bottom: none!important
        }

        .table.table-profile>thead>tr>th h4 {
            font-size: 20px;
            margin-top: 0
        }

        .table.table-profile>thead>tr>th h4 small {
            display: block;
            font-size: 12px;
            font-weight: 400;
            margin-top: 5px
        }

        .table.table-profile>tbody>tr>td,
        .table.table-profile>thead>tr>th {
            border: none;
            padding-top: 7px;
            padding-bottom: 7px;
            color: #242a30;
            background: 0 0
        }

        .table.table-profile>tbody>tr>td.field {
            width: 20%;
            text-align: right;
            font-weight: 600;
            color: #2d353c
        }

        .table.table-profile>tbody>tr.highlight>td {
            border-top: 1px solid #b9c3ca;
            border-bottom: 1px solid #b9c3ca
        }

        .table.table-profile>tbody>tr.divider>td {
            padding: 0!important;
            height: 10px
        }

        .profile-section+.profile-section {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #b9c3ca
        }

        .profile-section:after,
        .profile-section:before {
            content: '';
            display: table;
            clear: both
        }

        .profile-section .title {
            font-size: 20px;
            margin: 0 0 15px
        }

        .profile-section .title small {
            font-weight: 400
        }

        body.flat-black {
            background: #E7E7E7
        }

        .flat-black .navbar.navbar-inverse {
            background: #212121
        }

        .flat-black .navbar.navbar-inverse .navbar-form .form-control {
            background: #4a4a4a;
            border-color: #4a4a4a
        }

        .flat-black .sidebar,
        .flat-black .sidebar-bg {
            background: #3A3A3A
        }

        .flat-black .page-with-light-sidebar .sidebar,
        .flat-black .page-with-light-sidebar .sidebar-bg {
            background: #fff
        }

        .flat-black .sidebar .nav>li>a {
            color: #b2b2b2
        }

        .flat-black .sidebar.sidebar-grid .nav>li>a {
            border-bottom: 1px solid #474747;
            border-top: 1px solid #474747
        }

        .flat-black .sidebar .active .sub-menu>li.active>a,
        .flat-black .sidebar .nav>li.active>a,
        .flat-black .sidebar .nav>li>a:focus,
        .flat-black .sidebar .nav>li>a:hover,
        .flat-black .sidebar .sub-menu>li>a:focus,
        .flat-black .sidebar .sub-menu>li>a:hover,
        .sidebar .nav>li.nav-profile>a {
            color: #fff
        }

        .flat-black .sidebar .sub-menu>li>a,
        .flat-black .sidebar .sub-menu>li>a:before {
            color: #999
        }

        .flat-black .page-with-light-sidebar .sidebar .active .sub-menu>li.active>a,
        .flat-black .page-with-light-sidebar .sidebar .active .sub-menu>li.active>a:focus,
        .flat-black .page-with-light-sidebar .sidebar .active .sub-menu>li.active>a:hover,
        .flat-black .page-with-light-sidebar .sidebar .nav>li.active>a,
        .flat-black .page-with-light-sidebar .sidebar .nav>li.active>a:focus,
        .flat-black .page-with-light-sidebar .sidebar .nav>li.active>a:hover {
            color: #000
        }

        .flat-black .page-sidebar-minified .sidebar .nav>li.has-sub:focus>a,
        .flat-black .page-sidebar-minified .sidebar .nav>li.has-sub:hover>a {
            background: #323232
        }

        .flat-black .page-sidebar-minified .sidebar .nav li.has-sub>.sub-menu,
        .flat-black .sidebar .nav>li.active>a,
        .flat-black .sidebar .nav>li.active>a:focus,
        .flat-black .sidebar .nav>li.active>a:hover,
        .flat-black .sidebar .nav>li.nav-profile,
        .flat-black .sidebar .sub-menu>li.has-sub>a:before,
        .flat-black .sidebar .sub-menu>li:before,
        .flat-black .sidebar .sub-menu>li>a:after {
            background: #2A2A2A
        }

        .flat-black .page-sidebar-minified .sidebar .sub-menu>li:before,
        .flat-black .page-sidebar-minified .sidebar .sub-menu>li>a:after {
            background: #3e3e3e
        }

        .flat-black .sidebar .nav>li.nav-profile .cover.with-shadow:before {
            background: rgba(42, 42, 42, .75)
        }

        .bg-white {
            background-color: #fff!important;
        }
        .p-10 {
            padding: 10px!important;
        }
        .media.media-xs .media-object {
            width: 32px;
        }
        .m-b-2 {
            margin-bottom: 2px!important;
        }
        .media>.media-left, .media>.pull-left {
            padding-right: 15px;
        }
        .media-body, .media-left, .media-right {
            display: table-cell;
            vertical-align: top;
        }

    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="content" class="content content-full-width">

                <!-- begin profile-content -->
                <div class="profile-content">
                    <!-- begin tab-content -->
                    <div class="tab-content p-0">
                        <!-- begin #profile-friends tab -->
                        <div class="tab-pane fade in active show" id="profile-friends">
                            <h4 class="m-t-0 m-b-20">Friend List (14)</h4>
                            <!-- begin row -->
                            <div class="row row-space-2">
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">James Pittman</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(101px, 34px, 0px);">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">Mitchell Ashcroft</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">Ella Cabena</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(101px, -2px, 0px);">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">Declan Dyson</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">George Seyler</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">Patrick Musgrove</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">Taj Connal</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">Laura Pollock</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">Dakota Mannix</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">Timothy Woolley</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">Benjamin Congreve</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">Mariam Maddock</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">Blake Gerrald</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <!-- end col-6 -->
                                <!-- begin col-6 -->
                                <div class="col-md-6 m-b-2">
                                    <div class="p-10 bg-white">
                                        <div class="media media-xs overflow-visible">
                                            <a class="media-left" href="javascript:;">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="" class="media-object img-circle">
                                            </a>
                                            <div class="media-body valign-middle">
                                                <b class="text-inverse">Gabrielle Bunton</b>
                                            </div>
                                            <div class="media-body valign-middle text-right overflow-visible">
                                                <div class="btn-group dropdown">
                                                    <a href="javascript:;" class="btn btn-default">Friends</a>
                                                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="javascript:;">Action 1</a></li>
                                                        <li><a href="javascript:;">Action 2</a></li>
                                                        <li><a href="javascript:;">Action 3</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:;">Action 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col-6 -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end #profile-friends tab -->
                    </div>
                    <!-- end tab-content -->
                </div>
                <!-- end profile-content -->
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
