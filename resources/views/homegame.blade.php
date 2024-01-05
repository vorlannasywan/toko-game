<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Game Home</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
  <!-- Link to Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-zMz9U7KtH5blg8tOM7PcxXcdHHPr1Kx8uT7z+y73m8R+q8hzm9ss05/WPaa/Njz9SgM5lOA6+AJGUg5cmhTHcQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    h1, h2 {
      color: #00bcd4;
    }

    .game-list {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      background-color: #333;
      padding: 40px;
    }

    .game-container {
      background-color: #555;
      border-radius: 12px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
      margin: 20px;
      padding: 30px;
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
      width: calc(30% - 40px);
      max-width: 300px;
      box-sizing: border-box;
    }

    .game-container:hover {
      transform: scale(1.1);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }

    .game-container a {
      text-decoration: none;
      color: #fff;
    }

    .game-container img {
      width: 100%;
      border-radius: 12px;
      margin-bottom: 20px;
    }

    p {
      color: #bbb;
    }

    .game-container h2 {
      color: #ffffff;
    }

    .logout-btn {
      background-color: #00bcd4;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s;
      position: fixed;
      top: 10px;
      left: 10px;
    }

    .logout-btn i {
      margin-right: 8px;
    }

    .logout-btn:hover {
      background-color: #c0392b;
    }
  </style>
</head>

<body>
  <h2>WELCOME {{ Auth::user()->name }}</h2>

  <h1>Vorza Game Store</h1>

  <button class="logout-btn" onclick="window.location.href='/logout'">
    <i class="fas fa-sign-out-alt"></i> Logout
  </button>

  <div class="game-list">
    @foreach($data as $row)
    <div class="game-container">
      <a href="{{ route('showgame', ['id' => $row->id]) }}">
        <img src="{{ asset('fotogame/'.$row->foto) }}" alt="" style="width: 100px;">
        <h2>{{ $row->title }}</h2>
      </a>
      <p>Price: Rp{{ $row->price }}</p>
    </div>
    @endforeach
  </div>
</body>

</html>
