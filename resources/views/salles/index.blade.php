<!DOCTYPE html>
<html>
  <head>

  </head>
  <body>
  <h1>Liste des tâches</h1>
    <ul>
         @foreach ($salles as $salle)
            <li>{{ $salle->title }}</li>
        @endforeach
    </ul>

</body>
</html>