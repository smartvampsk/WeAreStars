<?php
  if(session_id() == '' || !isset($_SESSION)) {
    session_start();
  }
  if (!isset($_SESSION['admin'])) {
        header('location:login');
    }
?>

<div class="card mb-3">
  <div class="card-header"><i class="fas fa-table"></i> Login Detail </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Username</th>
            <th>User Type</th>
            <th>Logged Date</th>
            <th>Login Time</th>
            <th>Logout Time</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Username</th>
            <th>User Type</th>
            <th>Logged Date</th>
            <th>Login Time</th>
            <th>Logout Time</th>
          </tr>
        </tfoot>

        <tbody>
          <?php 
            foreach ($logs as $log) {
              echo '<tr>';
              echo '<td>'.$log['username'].'</td>';
              if ($log['user_type']=='1') {
                echo '<td>Customer</td>';
              }
              if ($log['user_type']=='2') {
                echo '<td>Agency</td>';
              }
              echo '<td>'.$log['logged_date'].'</td>';
              echo '<td>'.$log['time_in'].'</td>';
              echo '<td>'.$log['time_out'].'</td>';
              echo '</tr>';
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>