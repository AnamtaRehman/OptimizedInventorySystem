<?php
  $page_title = 'All User';
  require_once('includes/load.php');
?>
<?php
// Checkin What level user has permission to view this page
 page_require_level(1);
//pull out all user form database
 $itemcategories=find_all_categories();
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
   <div class="col-md-12">
     <?php echo display_msg($msg); ?>
   </div>
</div>


<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th-large"></span>
          <span>Item Categories</span>
       </strong>
         
      </div>
     <div class="panel-body">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
          <th>Id</th>
            <th>Item_name</th>
            <th class="text-center" style="width: 15%;">Type</th>
            <th class="text-center" style="width: 10%;">Sub Type</th>
            <th style="width: 20%;">Life (in yrs)</th>
            <th style="width: 20%;">Exp/non exp</th>
        
          </tr>
        </thead>
        <tbody>
        <?php foreach($itemcategories as $a_user): ?>
          <tr>
           <td><?php echo remove_junk(ucwords($a_user['Id']))?></td>
           <td><?php echo remove_junk(ucwords($a_user['Item_name']))?></td>
           <td class="text-center"><?php echo remove_junk(ucwords($a_user['Type']))?></td>
           <td><?php echo remove_junk(ucwords($a_user['Sub_type']))?></td>
           <td><?php echo remove_junk(ucwords($a_user['Life']))?></td>
           <td><?php echo remove_junk(ucwords($a_user['exp']))?></td>
           
          </tr>
        <?php endforeach;?>
       </tbody>
     </table>
     </div>
    </div>
  </div>
</div>

<div style="display: flex; justify-content: center; align-items: center; height: 10vh;">
    <a href="add_items.php" class="btn btn-info">ADD ITEMS</a>
</div>

  <?php include_once('layouts/footer.php'); ?>
