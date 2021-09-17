<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <h1>Simple PHP page</h1>
    <form id="myForm" method="post" action="./helloAction.php">
  <div class="form-group">
    <label for="name">Your name:</label>
    <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp">
    <small id="emailHelp" class="form-text text-muted">Enter your name.</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>

    
</body>
</html>