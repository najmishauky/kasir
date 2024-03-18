<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
<br>
     <br>
     <div class="login-box" style="color: #fff">
      <h1>Login</h1>
      <br>
      <div class="card-body">
        @if(Session::has('error'))
          <div class="alert alert-danger" role="alert">
            {{ Session::get('error')}}
          </div>
        @endif
      </div>
        <form action="{{ route('log')}}" method="POST">
          @csrf
          <div class="user-box">
          <input type="text" name="email"  required="" />
          <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" required="" />
            <label>Password</label>
          </div>
          
          <center><button type="submit" class="btn btn-outline-info">LOGIN</button></center>

            <span></span>
            <span></span>
            <span></span>
            <span></span>
            
          </button>
          <br>
          
          <p class="message">Not registered? <a href="register">Create an account</a></p>
        </form>
    </div>
</body>
</html>