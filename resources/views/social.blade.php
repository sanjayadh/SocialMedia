<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<!--Navbar-->
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="/profile">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('message')}}">Message</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('friend')}}">friends</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#"><i class="fa fa-alert" aria-hidden="true">notification</i></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">Profile</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink1">
                        <a class="dropdown-item" href="#">edit profile</a>
                        <a class="dropdown-item" href="{{ url('/logout') }}"> logout </a>

                    </div>

                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">sanjay</button>
            </form>
        </div>
    </nav>
</div>
<!--/.Navbar-->

<main>
    <div class="container">

        <div class="row m-b-r m-t-3">
            <div class="col-md-2 offset-md-1">
                <img src="{{asset('image/sanjay.jpeg')}}" alt="" class="img-circle img-fluid">
            </div>
            <div class="col-md-9 p-t-2">
                <h2 class="h2-responsive">@sanjay <button type="button" class="btn btn-info-outline waves-effect">Edit Profile <i class="fa fa-cog fa-spin fa-2x fa-fw"></i>
                        <span class="sr-only">Loading...</span>
                    </button></h2>
                <p><b>{{auth::user()->name}}</b>
                    <br>
                    <b>{{auth::user()->email}}</b>
                </p>

                    <button class="btn-primary">follow</button>
                <ul class="flex-menu">
                    <li><strong>11</strong> posts</li>
                    <li><strong>2</strong> followers</li>
                    <li><strong>3</strong> following</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="view overlay hm-black-light m-b-2">
                    <img src="https://mdbootstrap.com/images/regular/nature/img%20(1).jpg" class="img-fluid " alt="">
                    <div class="mask flex-center">
                        <ul class="flex-menu">
                            <li><p class="white-text"><i class="fa fa-comment" aria-hidden="true"></i> 32</p></li>
                            <li><p class="white-text"><i class="fa fa-heart" aria-hidden="true"></i> 1.2K</i></p></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 m-b-2">
                <div class="view overlay hm-black-light">
                    <img src="https://mdbootstrap.com/images/regular/nature/img%20(2).jpg" class="img-fluid " alt="">
                    <div class="mask flex-center">
                        <ul class="flex-menu">
                            <li><p class="white-text"><i class="fa fa-comment" aria-hidden="true"></i> 32</p></li>
                            <li><p class="white-text"><i class="fa fa-heart" aria-hidden="true"></i> 1.2K</i></p></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 m-b-2">
                <div class="view overlay hm-black-light">
                    <img src="https://mdbootstrap.com/images/regular/nature/img%20(3).jpg" class="img-fluid " alt="">
                    <div class="mask flex-center">
                        <ul class="flex-menu">
                            <li><p class="white-text"><i class="fa fa-comment" aria-hidden="true"></i> 32</p></li>
                            <li><p class="white-text"><i class="fa fa-heart" aria-hidden="true"></i> 1.2K</i></p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 m-b-2">
                <div class="view overlay hm-black-light">
                    <img src="https://mdbootstrap.com/images/regular/nature/img%20(4).jpg" class="img-fluid " alt="">
                    <div class="mask flex-center">
                        <ul class="flex-menu">
                            <li><p class="white-text"><i class="fa fa-comment" aria-hidden="true"></i> 32</p></li>
                            <li><p class="white-text"><i class="fa fa-heart" aria-hidden="true"></i> 1.2K</i></p></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 m-b-2">
                <div class="view overlay hm-black-light">
                    <img src="https://mdbootstrap.com/images/regular/nature/img%20(5).jpg" class="img-fluid " alt="">
                    <div class="mask flex-center">
                        <ul class="flex-menu">
                            <li><p class="white-text"><i class="fa fa-comment" aria-hidden="true"></i> 32</p></li>
                            <li><p class="white-text"><i class="fa fa-heart" aria-hidden="true"></i> 1.2K</i></p></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 m-b-2">
                <div class="view overlay hm-black-light">
                    <img src="https://mdbootstrap.com/images/regular/nature/img%20(6).jpg" class="img-fluid " alt="">
                    <div class="mask flex-center">
                        <ul class="flex-menu">
                            <li><p class="white-text"><i class="fa fa-comment" aria-hidden="true"></i> 32</p></li>
                            <li><p class="white-text"><i class="fa fa-heart" aria-hidden="true"></i> 1.2K</i></p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 m-b-2">
                <div class="view overlay hm-black-light">
                    <img src="https://mdbootstrap.com/images/regular/nature/img%20(7).jpg" class="img-fluid " alt="">
                    <div class="mask flex-center">
                        <ul class="flex-menu">
                            <li><p class="white-text"><i class="fa fa-comment" aria-hidden="true"></i> 32</p></li>
                            <li><p class="white-text"><i class="fa fa-heart" aria-hidden="true"></i> 1.2K</i></p></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 m-b-2">
                <div class="view overlay hm-black-light">
                    <img src="https://mdbootstrap.com/images/regular/nature/img%20(8).jpg" class="img-fluid " alt="">
                    <div class="mask flex-center">
                        <ul class="flex-menu">
                            <li><p class="white-text"><i class="fa fa-comment" aria-hidden="true"></i> 32</p></li>
                            <li><p class="white-text"><i class="fa fa-heart" aria-hidden="true"></i> 1.2K</i></p></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 m-b-2">
                <div class="view overlay hm-black-light">
                    <img src="https://mdbootstrap.com/images/regular/nature/img%20(9).jpg" class="img-fluid " alt="">
                    <div class="mask flex-center">
                        <ul class="flex-menu">
                            <li><p class="white-text"><i class="fa fa-comment" aria-hidden="true"></i> 32</p></li>
                            <li><p class="white-text"><i class="fa fa-heart" aria-hidden="true"></i> 1.2K</i></p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Outro -->
<section id="outro">
    <div class="container">
        <div class="row text-xs-center p-t-1 p-b-4">
            <div class="col-md-12">
                <br>
                <h3></h3>
                <br>
                <p class="text-center"><b>Copyright @2020</b></p>
                <i class="text-center" style="margin-right: 60px;"><b>Developed BY sanjay</b></i>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script></body>
</html>
