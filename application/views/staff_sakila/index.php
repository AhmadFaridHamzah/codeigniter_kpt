<?php
  $msg = $this->session->flashdata('msg');
  if(isset($msg)){
    @list($class, $message) = explode("%",$msg);
    // echo '<div class="alert alert-'.$class.'">';
    // echo '<button type="button" class="close" data-dismiss="alert">x</button>';
    // echo $message;
    // echo'</div>';
    echo "<script> $(document).ready(function(){alert('".$message."','".$class."');}); </script>";
  }
?>

  <h2>Senarai Staff Sakila</h2>
  <a href="<?= site_url('staffsakila/create') ?>" class="btn btn-primary" data-toggle="tooltip" 
  data-placement="top" title="Create Staff">
  Create
  </a>
  <table class="table">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($staff as $key => $index){ ?>
            <tr>
                <td><?php echo $index->first_name ?></td>
                <td><?= $index->last_name ?></td>
                <td><?= $index->email ?></td>
                <td>
                  <a class="btn btn-info" href="<?=site_url('staffsakila/update/'.encryptUrl($index->staff_id))?>">Update</a>
                  <a class="btn btn-danger" href="#" data-url="<?=site_url('staffsakila/delete/'.encryptUrl($index->staff_id))?>" onclick="return confirm_delete(this);">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
  </table>

<script>
  function alert(msg, alertclass){
    swal({
    title: "Makluman!",
    text: msg,
    icon: alertclass,
    });
  }

function confirm_delete(identifier){
  swal({
    title: "Anda Pasti?",
    text: "Anda Pasti?Data akan dihapus",
    icon: "warning",
    buttons: true,
    dangerMode: true,
    })
    .then((isConfirm) => {
    if (isConfirm) {
      var url = $(identifier).data('url');
      window.location.href = url;
    } 
  });
}

</script>