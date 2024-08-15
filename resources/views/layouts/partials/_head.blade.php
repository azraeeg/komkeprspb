<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>RSPB</title>

<!-- Icon di samping judul -->
<link rel="icon" href="{{ asset('assets/dist/img/logorspb.png') }}" type="image/png">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
@if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            // Menampilkan popup dengan pesan sukses
            alert("{{ session('success') }}");
        });
    </script>
@endif
