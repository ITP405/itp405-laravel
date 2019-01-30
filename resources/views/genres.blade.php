<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Assignment 2</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
  <table class="table">
    <tr>
      <th>Genre ID</th>
      <th>Genre Nmae</th>
    </tr>
    @foreach($genres as $genre)
      <tr>
        <td>
          {{$genre->GenreId}}
        </td>
        <td>
          <a href="tracks?genre={{$genre->Name}}"> {{$genre->Name}}</a>
        </td>
      </tr>
    @endforeach
  </table>
</body>
</html>
