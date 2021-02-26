<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="icon.png">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <title>Guetbook</title>

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm">
      </div>
      <div class="col-6">
        <?php
        include_once "ux.php";
        htmlTable();
        ?>
        <form action="add.php" method="post">
          <div class="form-floating">
            <textarea name="msg" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Коментарий</label>
          </div>
          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Имя или Никнейм</span>
            <input type="text" name="name" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
          </div>
          <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
      </div>
      <div class="col-sm">
      </div>
    </div>
  </div>

</body>

</html>