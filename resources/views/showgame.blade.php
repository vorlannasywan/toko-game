<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/game.css') }}">  
    <title>{{ $game->title }}</title>
</head>
<body>
    <div class="game-container">
    <h1>{{ $game->title }}</h1>
    <img src="{{ asset('fotogame/'.$game->foto) }}" alt="">
    <p>Price: Rp{{ $game->price }}</p>
    <p>Description: {{ $game->description }}</p>
    <p>Release date: {{ $game->release_date }}</p>
    <p>Developer: {{ $game->developer }}</p>
</div>
    <button onclick="showPurchaseForm()">Purchase</button>

    <div id="overlay"></div>

    <div id="purchaseForm">
        <form action="{{ route('purchasestore') }}" method="post" onsubmit="return showConfirmationPopup()">
            @csrf
            <input type="hidden" name="game_id" value="{{ $game->id }}">
            <label for="full_name">Full Name:</label>
            <input type="text" name="full_name" required><br>

            <label for="payment_method">Payment Method:</label>
            <select name="payment_method" required>
                <option value="bca">BCA</option>
                <option value="bri">BRI</option>
                <option value="bni">BNI</option>
                <option value="dana">Dana</option>
                <option value="mandiri">Mandiri</option>
                <option value="Qris">Qris</option>
            </select><br>

            <label for="email">Email:</label>
            <input type="email" name="email" required><br>

            <button type="submit">Submit Purchase</button>
        </form>
        <button onclick="hidePurchaseForm()">Close</button>
    </div>

    <div id="confirmationPopup" style="{{ session('success') ? 'display: block;' : 'display: none;' }}">
        <p>Kode pembayaran akan dikirim ke email Anda.</p>
        <button onclick="hideConfirmationPopup()">OK</button>
    </div>

    <script>
        function showPurchaseForm() {
            document.getElementById('purchaseForm').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        }
    
        function hidePurchaseForm() {
            document.getElementById('purchaseForm').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        }
    
        function showConfirmationPopup(event) {
            // Prevent the default form submission
            event.preventDefault();
    
            // Setelah formulir dikirim, tampilkan popup konfirmasi
            document.getElementById('confirmationPopup').style.display = 'block';
            // Sembunyikan formulir pembelian dan overlay
            hidePurchaseForm();
        }
    
        function hideConfirmationPopup() {
            document.getElementById('confirmationPopup').style.display = 'none';
            // Jika perlu, tambahkan logika untuk menampilkan pop-up pembelian lagi
            // showPurchaseForm();
        }
    
        // Show confirmation popup if there's a success flash message
        window.onload = function() {
            var successMessage = '{{ session('success') }}';
            if (successMessage) {
                showConfirmationPopup();
            }
        };
    </script>
</body>
</html>
