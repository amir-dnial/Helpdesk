<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Helpdesk</title>

    @routes
    @vite('frontend\src\main.js')
</head>
<body>
    <div id="app"></div>
</body>
</html>
