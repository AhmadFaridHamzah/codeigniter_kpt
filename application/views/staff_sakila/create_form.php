
  <h2>Create Staff</h2>
  <!-- <form action="/action_page.php"> -->
  <?php echo form_open('staffsakila/create',['id'=>'form_staff']) ?>
    <div class="form-group">
      <label for="email">First Name:</label>
      <!-- <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"> -->
        <?php

            $datafirst_name = array(
                'type'=>'text',
                'class'=>'form-control',
                'id'=>'first_name',
                'name'=>'first_name',
                'value'=> set_value('first_name')
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
                'value'=> set_value('last_name')
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
                'value'=> set_value('email')
            );

            echo form_input($dataemail);
            echo form_error('email');

        ?>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  <?php form_close() ?>
    <!-- </form> -->

