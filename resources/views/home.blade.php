<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/js/app.js')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
</pre>
<div class="container">
    <div class="row">
        @foreach ($trains as $train)
        <div class="col-6">
            <div class="card m-2 text-center">
                <div class="card-body">
                    <h3>Azienda: {{$train['azienda']}}</h3>
                    <p class="fw-semibold">Stazione di partenza: {{$train['stazione_di_partenza']}}</p>
                    <p class="fw-semibold">Stazione di Arrivo: {{$train['stazione_di_arrivo']}}</p>
                    <p class="fw-semibold">Orario di partenza: {{$train['orario_di_partenza']}}</p>
                    <p class="fw-semibold">Orario di arrivo: {{$train['orario_di_arrivo']}}</p>
                    <p class="fw-semibold">Codice treno: {{$train['codice_treno']}}</p>
                    <p class="fw-semibold">Numero Carrozze: {{$train['numero_carrozze']}}</p>
                    <p class="fw-semibold">In Orario: {{$train['in_orario']}}</p>
                    <p class="fw-semibold">Cancellato: {{$train['cancellato']}}</p>
                </div>
            </div>
            
        </div>
        @endforeach
    </div>
</div>
</body>
</html>