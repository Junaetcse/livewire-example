<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

        <style>
            body{
                margin: 0;
                padding: 0;
            }

            .row p{
                margin: 0;
            }

            .ticket {
                border: 1px solid gray;
                border-radius: 3px;
                background: #c2a7a7;
                height: 300px;
            }
        </style>
         @livewireStyles
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 ticket">
                    @livewire('tickets')
                </div>
                <div class="col-md-6">
                    @livewire('comment')
                </div>
            </div>
        </div>
         
        @livewireScripts
    </body>
</html>
