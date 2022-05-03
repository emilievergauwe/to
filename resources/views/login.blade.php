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
    <body class="antialiased d-flex justify-content-center loginMainDiv">
        <div>
            <h1 class="text-center mainTitle">
            To do list
            </h1>
            <div class="centerDiv p-4 shadow-lg">
                <div class="secondaryTitle mb-3">Login to your account</div>
                <p class="" style="font-size: 12px">Your e-mail</p>
                <input class="inputField mb-2" type="email">
                <p style="font-size: 12px">Password</p>
                <input class="inputField mb-4" type="password">
                <div class="d-flex justify-content-between">
                    <a><span class="darkBlue">Forgot password</a>
                    <button type="submit" class="purpleBackground border-0 text-white py-1 px-4 rounded-lg">Login</button>
                </div>
            </div>
        </div>
       
    </body>
</html>
