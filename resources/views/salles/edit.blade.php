<!DOCTYPE html>
<html>
  <head>

  </head>
  <body>
  <h1>Modifier la tâche "{{ $task->title }}"</h1>
 <form method="POST" action="/tasks/{{ $task->id }}">
    @csrf
    @method(’PUT’)
    <label for="code">code :</label>
    <input type="text" name="code" value="{{ $salle->code }}"><br>
 
    <label for="libelle">libelle :</label>
    <input type="text" name="libelle" value="{{ $salle->libelle }}"><br>
    <button type="submit">Enregistrer</button>
 </form>

    

</body>
</html>