<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login for Admin</title>
  <link rel="stylesheet" href="<?php echo asset('assets/css/login.css')?>">
</head>
<body>
  <div class="wrapper">
        <div class="logo">
            <img src="<?php echo asset('assets/image/frgsofa.png')?>" alt="">
        </div>
        <div class="text-center mt-4 name">
            BivaFurniture
        </div>
        <form class="p-3 mt-3" method="post" action="{{route('developer.loginCheck')}}" >
        @csrf
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="username" id="userName" placeholder="">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="">
            </div>
            <button type="submit" class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6">
        </div>
        @if(isset($dev_err_login))
			
			<div class="deverrormessage"><br>
                    <p style="color:#000;">{{$dev_err_login}}</p>
			</div>
                @endif

    </div>

			
</body>
</html>