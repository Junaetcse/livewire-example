<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            body{
                margin: 0;
                padding: 0;
            }
        </style>
         @livewireStyles
    </head>
    <body>
        <div class="container">
            @livewire('comment',['com' => $comments2])
        </div>
         
        @livewireScripts
    </body>
</html>
