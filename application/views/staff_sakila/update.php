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
  <h2>Update Staff</h2>
  <!-- <form action="/action_page.php"> -->
  <?php echo form_open('staffsakila/update',['id'=>'form_staff']) ?>
  <?php
    $datastaffid = [
        'type' => 'hidden',
        'name' => 'staff_id',
        'value' => $staff->staff_id
    ];

    echo form_input($datastaffid);
  ?>
    <div class="form-group">
      <label for="email">First Name:</label>
      <!-- <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"> -->
        <?php

            $datafirst_name = array(
                'type'=>'text',
                'class'=>'form-control',
                'id'=>'first_name',
                'name'=>'first_name',
                'value'=> $staff->first_name
            );

            echo form_input($datafirst_name);
            echo form_error('first_name');

        ?>
    </div>
    <div class="form-group">
      <label for="email">Last Name:</label>
      <!-- <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"> -->
        <?php

            $datalast_name = array(
                'type'=>'text',
                'class'=>'form-control',
                'id'=>'last_name',
                'name'=>'last_name',
                'value'=> $staff->last_name
            );

            echo form_input($datalast_name);
            echo form_error('last_name');

        ?>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <!-- <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"> -->
        <?php

            $dataemail = array(
                'type'=>'email',
                'class'=>'form-control',
                'id'=>'email',
                'name'=>'email',
                'value'=> $staff->email
            );

            echo form_input($dataemail);
            echo form_error('email');

        ?>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  <?php form_close() ?>
    <!-- </form> -->
</div>

</body>
</html>