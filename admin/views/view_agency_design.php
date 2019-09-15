<?php
  if(session_id() == '' || !isset($_SESSION)) {
    session_start();
  }
  if (!isset($_SESSION['admin'])) {
        header('location:login');
    }
?>

<div class="card mb-3">
  <div class="card-header"><i class="fas fa-table"></i> View Agency </div>
  <?php
    if (!empty($msg)) {
      echo '<p class="text-dark text-center bg-info rounded py-1">'.$msg.'</p>';
     }
  ?>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Agency Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Skills</th>
            <th>Membership</th>
            <th>Operations</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Agency Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Skills</th>
            <th>Membership</th>
            <th>Operations</th>
          </tr>
        </tfoot>

        <tbody>
          <?php 
            foreach ($customer as $cus) {
              echo '<tr>';
              echo '<td>'.$cus['agency_name'].'</td>';
              echo '<td>'.$cus['username'].'</td>';
              echo '<td>'.$cus['email'].'</td>';
              echo '<td>'.$cus['contact'].'</td>';
              echo '<td>'.$cus['address'].'</td>';
              echo '<td>'.$cus['skills'].'</td>';
              echo '<td>'.$cus['membership'].'</td>';
              echo '
              <td class="row">
                <a class="btn text-success" href="edit_agency?eId='.$cus['customer_id'].'"><i class="fas fa-edit"></i></a>
                <a class="btn text-danger" href="view_agency?dId='.$cus['customer_id'].'"><i class="fas fa-trash"></i></a>

              </td>';
              echo '</tr>';
            }
          ?>
        </tbody>
              </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

    <div class="modal fade" id="deleteCustomerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Delete" below if you are ready to delete selected record.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="view">Delete</a>
                </div>
            </div>
        </div>
    </div>