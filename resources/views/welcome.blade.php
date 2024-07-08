<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel MVC</title>
    @vite('resources/js/app.js')
  </head>

  <body>
    {{-- <img src="{{ Vite::asset('resources/img/duck.jpg') }}" alt="Paperella Laravel Template"> --}}

    <h1>
      Laravel MVC
    </h1>

    <div class="container">
      <div class="row">
        @foreach ($movies as $movie)
          <div class="col">
            <div class="card">
              <p> {{ $movie['title'] }} </p>
              <p> {{ $movie['original_title'] }} </p>
              <p> {{ $movie['nationality'] }} </p>
              <p> {{ $movie['date'] }} </p>
              <p> {{ $movie['vote'] }} </p>
            </div>
          </div>
        @endforeach
      </div>
    </div>


  </body>

</html>
