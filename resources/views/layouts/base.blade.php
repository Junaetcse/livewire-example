<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire Larascreen</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        html, body {
            height: 100%;
            margin: 0;
          }

    </style>
    @livewireStyles
</head>
<body>

    <div class="sections px-3">
        <div class="row">
            <div class="col-md-2 bg-primary " style="height: 100%">
                <div class="menu-header">
                    <img src="https://www.freelogodesign.org/Content/img/logo-samples/flooop.png" style="height: 100px; width:200px">
                </div>
                <div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="/dashboard">Profile</a></li>
                        <li class="list-group-item"><a href="#">Morbi leo risus</a></li>
                        <li class="list-group-item"><a href="#">Porta ac consectetur ac</a></li>
                        <li class="list-group-item"><a href="#">Vestibulum at eros</a></li>
                      </ul>
                </div>
            </div>
            <div class="col-md-10">
            
                {{ $slot }}
                
            </div>
        </div>
    </div>
    @livewireScripts
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>