<?php
    // echo "<pre>";
    //     print_r($staff);
    //     print_r($title);
    //     echo "</pre>";
        //var_dump($data);
        // die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<style>
    body {
        min-height : 75rem;
        /* padding-top : 4.5rem; */
        padding-top: 70px;
        padding-bottom: 30px;
    }
</style>
<body>
<?=$navbar?>

<div class="container">
    <div class="jumbotron">
        <?=$content?>
    </div>
</div>

</body>
</html>
