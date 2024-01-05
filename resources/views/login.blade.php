<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GameStore</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #262626;
      color: #fff;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      text-align: center;
    }

    h1 {
      margin-top: 20px;
      color: #00bcd4;
    }

    .login-box {
      margin-top: 20px;
    }

    .card {
      background-color: #555;
      border-radius: 12px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
      padding: 30px;
      text-align: center;
      width: 400px;
      margin: 0 auto;
    }

    .card-header a {
      color: #00bcd4;
      text-decoration: none;
      font-size: 24px;
    }

    .card-body {
      margin-top: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-control {
      background-color: #333;
      color: #fff;
      border: 1px solid #00bcd4;
      border-radius: 8px;
      padding: 10px;
      width: 100%;
      box-sizing: border-box;
    }

    .btn-primary {
      background-color: #00bcd4;
      border-color: #00bcd4;
      padding: 10px;
      border-radius: 8px;
      cursor: pointer;
    }

    .btn-primary:hover {
      background-color: #0097a7;
      border-color: #0097a7;
    }

    .register-link {
      color: #00bcd4;
      text-decoration: none;
    }

    .register-link:hover {
      color: #0097a7;
    }
  </style>
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="../../index2.html"><b>Login</b> GameStore</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Sign in to VorZa</p>
        <form action="/loginuser" method="post">
          @csrf
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" class="form-control" name="email" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" class="form-control" name="password" placeholder="Enter your password">
          </div>
          <div class="form-group">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">Remember Me</label>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
        </form>
        <p class="mb-0">
          <a href="/register" class="register-link">Register</a>
          
        </p>
        <a href="/game" style="color: #555;">admin</a>
      </div>
    </div>
  </div>
</body>
</html>
