<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Wisata Jogja</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <div class="container" style="width:90%">
        <div class="row">
            <table class="striped centered" style="margin-top: 50px">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Destinasi</th>
                        <th>Kategori</th>
                        <th>Biaya Masuk</th>
                        <th>Jam Buka</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
        
                <tbody>
                    @php
                        $i = 1
                    @endphp
                    @foreach ($destinations as $destination)
                    <tr>
                        <td><?= $i; ?></td>
                        <td>{{ $destination->name }}</td>
                        <td>{{ $destination->category->name }}</td>
                        <td>Rp. {{ $destination->cost }},-</td>
                        <td>{{ $destination->business_hours }}</td>
                        <td>{{ $destination->address }}</td>
                    </tr>
                    @php
                        $i++
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>