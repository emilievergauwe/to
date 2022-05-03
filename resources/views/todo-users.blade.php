<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="/css/app.css" rel="stylesheet">

        <title>User Task List</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
      
    </head>
    <body class="antialiased d-flex justify-content-center">
        <div>
            <div class="mt-4">
                <div class="d-flex flex-column float-right">
                    <button type="submit" class="purpleBackground border-0 text-white rounded-lg py-1 px-4 mt-2">Logout</button>
                    <div class="mt-2 d-flex">
                        <a href="https://www.flaticon.com/fr/icones-gratuites/masculin" title="masculin icônes">Masculin icônes créées par Freepik - Flaticon</a>
                        <span>Welcome, Emilie</span>
                    </div>
                </div>
                <h1 class="text-center darkBlue mb-5">
                To do list
                </h1>
            </div>
            <div class="toDoListDiv p-4 shadow-lg">
                <div class="secondaryTitle mb-3">3 remaining tasks</div>
                <div>
                    <div class="border rounded-lg mb-2 p-2 d-flex align-items-center">
                        <div>
                            <input type="checkbox" class="pt-1"></input>
                            <label for="task1" class="">Task 1</label>
                        </div>
                    </div>
                    <div class="border rounded-lg p-2 mb-2">
                        <input type="checkbox"></input>
                        <label for="task1" class="">Task 2</label>
                    </div>
                    <div class="border rounded-lg p-2 mb-2">
                        <input type="checkbox"></input>
                        <label for="task1" class="">Task 3</label>
                    </div>
                </div>
                <div class="secondaryTitle mb-3 mt-4">Completed tasks</div>
                <div class="text-secondary">
                    <p class="border rounded-lg p-1 d-flex">Task 1</p>
                    <p class="border rounded-lg p-1 d-flex">Task 2</p>
                    <p class="border rounded-lg p-1 d-flex">Task 3</p>
                </div>
            </div>
        </div>
       
    </body>
</html>
