<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>

       body {

           min-height: 75rem;

           padding-top: 4.5rem;

       }

   </style>
    </head>
    <body>
      @include('includes.menu')

      <main role="main" class="container">
        <div>
             <button id="toon-gegevens" type="button" class="btn btn-primary">Toon gegevens</button>
             <div id="gegevens" style="display: none" class="list-group">
                <ul>
                       <li class="list-group-item">Piet de boer</li>
                       <li class="list-group-item">Willem de boer</li>
                       <li class="list-group-item">Sjaak de boer</li>
                       <li class="list-group-item">Petronella de boer</li>
                       <li class="list-group-item">Willemijn de boer</li>
                   </ul>
             </div>
        </div>
      </main>


      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="{{asset('assets/js/welcome.js')}}"></script>
    </body>
</html>
