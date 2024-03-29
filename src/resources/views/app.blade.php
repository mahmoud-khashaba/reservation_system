<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <title>TicketPoss</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="{{ mix('dist/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ mix('dist/css/main.css') }}">


        <!-- Scripts -->


    </head>
    <body class="font-sans antialiased">
        <div id="app"></div>
    </body>


     <script src="{{ mix('dist/js/main.js') }}" defer></script>

</html>
