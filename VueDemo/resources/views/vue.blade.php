<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Vue</title>
        
    </head>
    <body>


        <div id="app">

       <!-- چون توی پی اچ پی هست باید یک ات سایت قبلش بذاریم -->
        <h1> @{{ product }}</h1> <br>
            <div class="container">
                <h1>inja component haye vue ro mizarim</h1>
                <!-- <example-component></example-component> -->
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>   

    </body>
</html>

