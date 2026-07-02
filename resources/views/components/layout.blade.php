<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProductVerse</title>

    @vite(['resources/css/app.css'])
</head>
<body class="d-flex flex-column min-vh-100">
    
    <x-navbar />

    <header class="row header-custom justify-content-center align-items-center shadow">
        <div class="col-12">
            <h1 class="display-1 fw-bolder text-center text-d-bord">PruductVerse</h1>
        </div>
    </header>
    
    <div class="d-flex flex-column justify-content-center align-items-center flex-grow-1">
        {{ $slot }}
    </div>

    @vite(['resources/js/app.js'])
</body>
</html>