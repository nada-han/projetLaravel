<!DOCTYPE html>
<html>
  <head>

  </head>
  <body>
  <h1>Créer une tâche</h1>
  <form method="POST" action="/salles">
    @csrf
    <label for="code">Code :</label>
    <input type="text" name="code"><br>
    <label for="libelle">Libelle :</label>
    <textarea name="libelle"><br>
    <button type="submit">Créer</button>
    

</body>
</html>