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
            <h1 class="text-center mainTitle">
            To do list
            </h1>
            <div class="toDoListDiv p-4 shadow-lg">
                <div class="secondaryTitle mb-3">3 remaining tasks</div>
                <div>
                    <div class="border rounded-lg p-2 d-flex align-items-center mb-2">
                        <div class="circle mr-2"></div>
                        <div>Task 1</div>
                    </div>
                    <div class="border rounded-lg p-2 d-flex align-items-center mb-2">
                        <div class="circle mr-2"></div>
                        <div>Task 2</div>
                    </div>
                    <div class="border rounded-lg p-2 d-flex align-items-center mb-2">
                        <div class="circle mr-2"></div>
                        <div>Task 3</div>
                    </div>
                </div>
                <div class="secondaryTitle mb-3">Completed tasks</div>
                <div class="text-secondary">
                    <p class="border rounded-lg p-1 d-flex">Task 1</p>
                    <p class="border rounded-lg p-1 d-flex">Task 2</p>
                    <p class="border rounded-lg p-1 d-flex">Task 3</p>
                </div>
            </div>
        </div>
       
    </body>
</html>
