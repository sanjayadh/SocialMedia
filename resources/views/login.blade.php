<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup Page Like instagram</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{asset('image/sanjay.jpeg')}}" class="phone">
        </div>
        <div class="col-sm-6">
            <div class="right-column text-center">
                <img src="{{asset('image/instragram.png')}}" class="instragram-logo">
                <p class="info">Sign up to see photos and video from your friends.</p>
                <button type="submit" class="btn btn-primary btn-block"><img src="{{asset('image/fb.jpg')}}" class="fb-logo">
                    login with facebook</button>
                <p class="or">OR</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control"placeholder="Mobile number Or Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Full Name:">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username:">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="password:">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                </form>
                <p class="terms">By signing up, you agree to our &&nbsp;<b>terms,Data policy</b> and <b>cookies policy</b></p>
            </div>
            <div class="right-column-login text-center">
                <p>Have an account?<a href="#">Login</a> </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
