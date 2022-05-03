<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="/css/app.css" rel="stylesheet">

        <title>To Do List</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
      
    </head>
    <body class="antialiased d-flex justify-content-center">
        <div>
            <div class="mainTitle">
            To Do List
            </div>
            <div>
                <div class="">Login to your account</div>
                <label>Your e-mail</label>
                <input type="email">
                <label>Password</label>
                <input type="password">
                <a>Forgot password</a>
                <button type="submit"></button>
            </div>
        </div>
       
    </body>
</html>
