@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuw Allergeen</title>
</head>
<body>
    <div class="container">
        <h1>{{ $title }}</h1>

        <form method="POST" action="{{ route('allergeen.store') }}">
            @csrf

            <div class="mb-3">
                <label for="naam" class="form-label">Naam</label>
                <input type="text" class="form-control" id="naam" name="naam" required>
                <div class="form-text">Noteer hier de naam van het allergeen</div>
            </div>

            <div class="mb-3">
                <label for="omschrijving" class="form-label">Omschrijving</label>
                <textarea class="form-control" id="omschrijving" name="omschrijving" rows="3" required></textarea>
                <div class="form-text">Noteer hier de omschrijving van het allergeen</div>
            </div>

            <button type="submit" class="btn btn-primary">Verzend</button>
        </form>
    </div>
</body>
</html>
