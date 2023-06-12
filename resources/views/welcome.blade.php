<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Train</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <h1 class="text-center mt-3">Treni</h1>

    <div class="container mt-3 d-flex justify-content-center">
        <table class="w-100">
            <thead>
                <tr>
                    <th>Azienda</th>
                    <th>Stazione di partenza</th>
                    <th>Stazione di arrivo</th>
                    <th class="text-center">Orario di partenza</th>
                    <th class="text-center">Orario di arrivo</th>
                    <th class="text-center">Codice Treno</th>
                    <th class="text-center">Numero Carrozze</th>
                    <th class="text-center">Info</th>
                </tr>
            </thead>
            <tbody>
                @foreach($trains as $train)
                <tr>
                    <td>{{ $train->azienda }}</td>
                    <td>{{ $train->stazione_partenza }}</td>
                    <td>{{ $train->stazione_arrivo }}</td>
                    <td class="text-center">{{ substr($train->orario_partenza, 0, 5) }}</td>
                    <td class="text-center">{{ substr($train->orario_arrivo, 0, 5) }}</td>
                    <td class="text-center">{{ $train->codice_treno }}</td>
                    <td class="text-center">{{ $train->numero_carrozze }}</td>
                    <td class="text-center"> @if ($train->cancellato)
                        Cancellato
                        @elseif ($train->in_orario && !$train->cancellato)
                        In Orario
                        @else
                        In Ritardo
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</body>

</html>