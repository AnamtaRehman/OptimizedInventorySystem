<?php
  $page_title = 'All User';
  require_once('includes/load.php');
?>
<?php
// Checkin What level user has permission to view this page
 page_require_level(1);
//pull out all user form database
 
 $all_RACusers=find_all_RACusers();
?>
<?php include_once('layouts/header.php'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-user"></span>
          <span>RAC Users</span>
       </strong>
         <a href="add_racuser.php" class="btn btn-info pull-right">Add New User</a>
      </div>
     <div class="panel-body">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th class="text-center" style="width: 50px;">Serial_no.</th>
            <th>Id</th>
            <th>Name</th>
            <th class="text-center" style="width: 15%;">Designation</th>
            <th class="text-center" style="width: 10%;">Mobile_no</th>
            <th style="width: 20%;">Email_id</th>
            <th style="width: 20%;">Dob</th>
            <th style="width: 20%;">PIS</th>
            <th style="width: 20%;">Head</th>
            <th style="width: 20%;">Emp_type</th>
            <th style="width: 20%;">Status</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($all_RACusers as $a_user): ?>
          <tr>
           <td class="text-center"><?php echo count_id();?></td>
           <td><?php echo remove_junk(ucwords($a_user['Id']))?></td>
           <td><?php echo remove_junk(ucwords($a_user['Name']))?></td>
           <td class="text-center"><?php echo remove_junk(ucwords($a_user['Designation']))?></td>
           <td><?php echo remove_junk(ucwords($a_user['Mobile_no']))?></td>
           <td><?php echo remove_junk(ucwords($a_user['Email_id']))?></td>
           <td><?php echo remove_junk(ucwords($a_user['Dob']))?></td>
           <td><?php echo remove_junk(ucwords($a_user['PIS']))?></td>
           <td><?php echo remove_junk(ucwords($a_user['Head']))?></td>
           <td><?php echo remove_junk(ucwords($a_user['Emp_type']))?></td>
           <td><?php echo remove_junk(ucwords($a_user['Status']))?></td>
           
          </tr>
        <?php endforeach;?>
       </tbody>
     </table>
     </div>
    </div>
  </div>
</div>

  <?php include_once('layouts/footer.php'); ?>
