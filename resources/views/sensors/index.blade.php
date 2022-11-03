<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1 class="my-3">Monitoreo de consumo el&eacute;ctrico</h1>
    <table id='mytable' class="table table-hover my-3">
    <thead>
      <tr>
        <td>id</td>
        <td>Voltaje</td>
        <td>Amperaje</td>
        <td>Tiempo</td>
        <td>Consumo</td>
        <td>Dispositivo</td>
        <td>Fecha</td>
        <td>Hora</td>
      </tr>
    </thead>
    <tbody id='cuerpo'></tbody>
    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<script>const base_url = "{!! env('APP_URL') !!}" </script>
   <script src="{{asset('js/functions.js')}}"></script>
  </body>
</html>