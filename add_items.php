<?php
  $page_title = 'All User';
  require_once('includes/load.php');
?>
<?php
// Checkin What level user has permission to view this page
 page_require_level(1);
//pull out all user form database
 $all_items=find_all_items();
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
          <span class="glyphicon glyphicon-plus"></span>
          <span>Item Details</span>
        </strong>
        <a href="add_add_items.php" 
           class="btn btn-info pull-right"
        >
           Add New Item
        </a>
      </div>
      <div class="panel-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th 
                class="text-center" 
                style="width: 50px;"
              >
                Serial_no
              </th>
              <th>
                name
              </th>
              <th>
                name_as_per_store
              </th>
              <th 
                class="text-center" 
                style="width: 15%;"
              >
                type
              </th>
              <th 
                class="text-center" 
                style="width: 10%;"
              >
                sub_type
              </th>
              <th 
                style="width: 20%;"
              >
                make
              </th>
              <th 
                style="width: 20%;"
              >
                model_number
              </th>
              <th 
                style="width: 20%;"
              >
                sr_no_oem
              </th>
              <th 
                style="width: 20%;"
              >
                internet_connectivity
              </th>
              <th 
                style="width: 20%;"
              >
                wifi
              </th>
              <th 
                style="width: 20%;"
              >
                bluetooth
              </th>
              <th 
                style="width: 20%;"
              >
                mac_address
              </th>
              <th 
                style="width: 20%;"
              >
                network_port
              </th>
              <th 
                style="width: 20%;"
              >
                configuration
              </th>
              <th 
                style="width: 20%;"
              >
                processor
              </th>
              <th 
                style="width: 20%;"
              >
                ram_type
              </th>
              <th 
                style="width: 20%;"
              >
                ram_size
              </th>
              <th 
                style="width: 20%;"
              >
                ssd_size
              </th>
              <th 
                style="width: 20%;"
              >
                hd_size
              </th>
              <th 
                style="width: 20%;"
              >
                windows
              </th>
              <th 
                style="width: 20%;"
              >
                oem_warranty
              </th>
              <th 
                style="width: 20%;"
              >
                sr_no_by_rac
              </th>
              <th 
                style="width: 20%;"
              >
                remarks
              </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($all_items as $a_user): ?>
              <tr>
                <td 
                  class="text-center"
                >
                  <?php echo count_id(); ?>
                </td>
                <td>
                  <?php echo remove_junk(ucwords($a_user['name'])); ?>
                </td>
                <td>
                  <?php echo remove_junk(ucwords($a_user['name_as_per_store'])); ?>
                </td>
                <td 
                  class="text-center"
                >
                  <?php echo remove_junk(ucwords($a_user['type'])); ?>
                </td>
                <td 
                  class="text-center"
                >
                  <?php echo remove_junk(ucwords($a_user['sub_type'])); ?>
                </td>
                <td>
                  <?php echo remove_junk(ucwords($a_user['make'])); ?>
                </td>
                <td>
                  <?php echo remove_junk(ucwords($a_user['model_number'])); ?>
                </td>
                <td>
                  <?php echo remove_junk(ucwords($a_user['oem'])); ?>
                </td>
                <td>
                  <?php echo remove_junk(ucwords($a_user['internet_connectivity'])); ?>
                </td>
                <td>
                  <?php echo remove_junk(ucwords($a_user['wifi'])); ?>
                </td>
                <td>
                  <?php echo remove_junk(ucwords($a_user['bluetooth'])); ?>
                </td>
                <td>
                  <?php echo remove_junk(ucwords($a_user['mac_address'])); ?>
                </td>
                <td>
                  <?php echo remove_junk(ucwords($a_user['network_port'])); ?>
                </td>
                <td>
                  <?php echo remove_junk(ucwords($a_user['configuration'])); ?>
                </td>
                <td>
                  <?php echo remove_junk(ucwords($a_user['processor'])); ?>
                </td>
                <td>
                  <?php echo remove_junk(ucwords($a_user['ram_type'])); ?>
                </td>
                <td>
                  <?php echo remove_junk(ucwords($a_user['ram_size'])); ?>
                </td>
                <td>
                  <?php echo remove_junk(ucwords($a_user['ssd_size'])); ?>
                </td>
                <td>
                  <?php echo remove_junk(ucwords($a_user['hd_size'])); ?>
                </td>
                <td>
                  <?php echo remove_junk(ucwords($a_user['windows'])); ?>
                </td>
                <td>
                  <?php echo remove_junk(ucwords($a_user['oem_warranty'])); ?>
                </td>
                <td>
                  <?php echo remove_junk(ucwords($a_user['sr_no_by_rac'])); ?>
                </td>
                <td>
                  <?php echo remove_junk(ucwords($a_user['remarks'])); ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


  <?php include_once('layouts/footer.php'); ?>
