<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Google Recaptcha</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">   
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<body>
    <div class="container">
        <h2>reCaptcha Code in Laravel</h2><br>
        
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error) 
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br>
        @endif

        <form action="{{ url('store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-10">
                    <div class="form-group col-md-4">
                        <label for="">Name :</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10">
                    <div class="form-group col-md-4">
                        <label for="">Email :</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-10">
                    <div class="form-group col-md-4">
                        <label for="">Password :</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10">
                    <div class="form-group col-md-4">
                        <label for="ReCaptcha">Recaptcha :</label>
                        {!! NoCaptcha::renderJs() !!}
                        {!! NoCaptcha::display() !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>    
    </div>
</body>
</html>