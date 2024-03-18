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


<body>

     <br>
     <br>
     <div style="color: aliceblue">
      <div class="login-box">
     <h3 style="text-align:center;">{{$regis}}</h3>
     <div class="card-body">
      @if(Session::has('success'))
      <div class="alert alert-succes" role="alert">
        {{ Session::get('success')}}
      </div>
    </div>
      @endif
        <form action="{{ route('register')}}" method="POST" enctype="multipart/form-data">
            <div class="container">
                @method("POST")
                @csrf
                
                <div class="user-box">
                  <input type="text" name="nama"  required="" />
                  <label>Isi nama anda</label>
                  </div>

                  <div class="user-box">
                    <input type="text" name="email"  required="" />
                    <label>nama@gmail.com</label>
                  </div>

                  <div class="user-box">
                    <input type="password" name="password"  required="" />
                    <label>password</label>
                  </div>
        
                  <center><button type="submit" class="btn btn-outline-info">DAFTAR</button></center>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    
                  </button>
                  <br>
                  <p class="message">login here </p>
                  <a href="login">login</a>
                      </div>
                    </div>
                  </div>
                </div>
                </div> 
        </form> 
</div>
</body>
</html>