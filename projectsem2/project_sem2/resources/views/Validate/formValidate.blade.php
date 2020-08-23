<!DOCTYPE html>
<html>

<head>
    <title>Update Book</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Update Book</h2>
            </div>
            <div class="panel-body">



                <form action="{{ route('getdata') }}" method="POST">
                    <div class="form-group">

                        @csrf
                        <label for="usr">UserName:</label>
                        <input type="text" class="form-control" name='UserName'>
                        @error('UserName')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <!-- <div class="alert alert-danger" role="alert"> -->
                        <!-- <strong>Thông báo lỗi</strong> -->
                        <!-- </div> -->
                    </div>
                    <div class="form-group">
                        <label for="content">Password:</label>
                        <input type="text" class="form-control" name='Password'>
                        @error('Password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>




                    <button type="submit" class="btn btn-success">Dang nhap</button>
                    <!-- @if (count($errors) > 0)
               
               @foreach ($errors->all() as $error)
               <div class="alert alert-danger" role="alert">
                   <strong>{{ $error }}</strong>
                   </div>
               @endforeach
            
           @endif -->
                </form>
            </div>
        </div>
    </div>
</body>

</html>
