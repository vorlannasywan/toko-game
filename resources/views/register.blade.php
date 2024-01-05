<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>

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

    .login-link {
      color: #00bcd4;
      text-decoration: none;
    }

    .login-link:hover {
      color: #0097a7;
    }
  </style>
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="../../index2.html"><b>Register</b><br>GameStore</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Register to start your session</p>
        <form action="/registeruser" method="post">
          @csrf
          <div class="form-group">
            <input type="name" class="form-control" name="name" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
        </form>
        <p class="mb-0">
          <a href="/login" class="login-link">Login</a>
        </p>
      </div>
    </div>
  </div>
</body>
</html>
