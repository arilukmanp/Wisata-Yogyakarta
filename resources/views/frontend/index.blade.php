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
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/materialize-stepper@3.0.1/dist/css/mstepper.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <div id="app" class="container">
        <div class="row">
            <form action="/" method="POST">
                <ul class="stepper linear">
                    <li class="step active">
                        <div class="step-title waves-effect">Kategori</div>
                        <div class="step-content">
                            @foreach ($categories as $category)
                            <p>
                                <label>
                                    <input type="checkbox" class="filled-in">
                                    <span>{{ $category->name }}</span>
                                </label>
                            </p>
                            @endforeach
                            <div class="step-actions">
                                <button class="waves-effect waves-dark btn next-step">Selanjutnya</button>
                            </div>
                        </div>
                    </li>
                    <li class="step">
                        <div class="step-title waves-effect">Harga</div>
                        <div class="step-content">
                            <p class="range-field">
                                <input type="range" list="tickmarks">
                                <datalist id="tickmarks">
                                    <option value="0" label="0%">
                                    <option value="50" label="50%">
                                    <option value="100" label="100%">
                                </datalist>
                            </p>
                            <div class="step-actions">
                                <button class="waves-effect waves-dark btn next-step">Selanjutnya</button>
                            </div>
                        </div>
                    </li>
                    <li class="step">
                        <div class="step-title waves-effect">Popularitas</div>
                        <div class="step-content">
                            <p>
                                <label>
                                    <input class="with-gap" name="popularity" type="radio">
                                    <span>Rendah</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="popularity" type="radio">
                                    <span>Sedang</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="popularity" type="radio">
                                    <span>Tinggi</span>
                                </label>
                            </p>
                            <div class="step-actions">
                                <button class="waves-effect waves-dark btn next-step">Selanjutnya</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </form>
        </div>
    </div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://unpkg.com/materialize-stepper@3.0.1/dist/js/mstepper.min.js"></script>
    <script>
        var stepper = document.querySelector('.stepper');
        var stepperInstace = new MStepper(stepper, {
           firstActive: 0
        })
    </script>
</body>
</html>