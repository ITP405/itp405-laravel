
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Week2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  </head>
  <body>
    <table class="table">
      <tr>
        <th>Track Name</th>
        <th>Title</th>
        <th>Artist</th>
        <th>Price</th>
      </tr>
        @foreach($tracks as $track)
        <tr>
          <td>
            {{$track->name}}
          </td>
          <td>
            {{$track->title}}
          </td>
          <td>
            {{$track->artist}}
          </td>
          <td>
            {{$track->price}}
          </td>
        </tr>
        @endforeach
    </table>
  </body>
</html>
