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
</head>
<body>

<div class="container">
  <h2><?= $title ?></h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Pekerjaan</th>
        <!-- <th>Email</th> -->
      </tr>
    </thead>
    <tbody>
        <?php foreach($staff as $key => $index){ ?>
            <tr>
                <td><?php echo $index['name'] ?></td>
                <td><?= $index['pekerjaan'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
