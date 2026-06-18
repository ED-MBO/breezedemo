@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allergeen wijzigen</title>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-md-8">
                <h2 class="my-3">{{ $title }}</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('allergeen.update', $allergeen->Id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="naam" class="form-label">Naam</label>
                        <input type="text" class="form-control" id="naam" name="naam" value="{{ old('naam', $allergeen->Naam) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="omschrijving" class="form-label">Omschrijving</label>
                        <input type="text" class="form-control" id="omschrijving" name="omschrijving" value="{{ old('omschrijving', $allergeen->Omschrijving) }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Opslaan</button>
                    <a href="{{ route('allergeen.index') }}" class="btn btn-secondary">Annuleren</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
