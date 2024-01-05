<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Game List</h1>

    <div class="container">
        <a href="/tambahgame" type="button" class="btn btn-success">Add</a>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Photo</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Release Date</th>
                <th scope="col">Developer</th>
                <th scope="col">Created</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            @php
              $no = 1;
            @endphp
            <tbody>
            @foreach($data as $row)
                    <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>
                      <img src="{{ asset('fotogame/'.$row->foto) }}" alt="" style="width: 40px;" >
                    </td>
                    <td>{{ $row->title }}</td>
                    <td>{{ $row->description }}</td>
                    <td>{{ $row->price }}</td>
                    <td>{{ $row->release_date }}</td>
                    <td>{{ $row->developer }}</td>
                    <td>{{ $row->created_at }}</td>
                <td>
                    <a href="/tampildata/{{ $row->id }}" class="btn btn-info">Edit</a>
                    <a href="/deletegame/{{ $row->id }}" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>
    <div class="container">
      <h1 class="text-center mb-4">Transaksi</h1>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Full Name</th>
                <th scope="col">Payment Method</th>
                <th scope="col">Email</th>
                <th scope="col">Created at</th>

              </tr>
            </thead>
            @php
              $no = 1;
            @endphp
            <tbody>
              @foreach($purchases as $purchase)
    <tr>
        <th scope="row">{{ $no++ }}</th>
        <!-- Tampilkan informasi pembelian -->
        <td>{{ $purchase->full_name }}</td>
        <td>{{ $purchase->payment_method }}</td>
        <td>{{ $purchase->email }}</td>
        <td>{{ $purchase->created_at }}</td>
        <td>
            <!-- Tambahkan tombol atau tindakan lainnya sesuai kebutuhan -->
        </td>
    </tr>
@endforeach
            </tbody>
          </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>