<!DOCTYPE html>
<html>
<head>
    <title>image upload</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>

<body>
<div class="container">

    <div class="panel panel-primary">
        <div class="panel-heading"><h2>laravel</h2></div>
        <div class="panel-body">


            <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                   <br>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success">Upload</button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
</body>

</html>
