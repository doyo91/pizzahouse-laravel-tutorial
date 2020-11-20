<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pizza House || Laravel Tutorial</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="assets/css/styles.css">
        <!-- <link rel="stylesheet" href="../assets/css/styles.css"> -->
    </head>
    <body>
        
        @yield('content')

        <footer>
            Copyright 2020 &copy;Pizza House
        </footer>

    </body>
</html>