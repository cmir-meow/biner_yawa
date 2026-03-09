<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>My Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
    }

    /* NAVBAR */
    .top-navbar {
      background-color: #212529;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .top-navbar .brand {
      color: #ffffff;
      font-weight: bold;
      font-size: 1rem;
    }

    /* MAIN CONTENT */
    .main-content {
      padding: 30px;
    }

    .page-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }
    .page-header h4 {
      font-weight: bold;
      margin: 0;
    }

    /* TABLE */
    table thead {
      background-color: #343a40;
      color: #ffffff;
    }
    table thead th {
      font-size: 0.9rem;
      font-weight: 600;
    }
    table tbody td {
      vertical-align: middle;
      font-size: 0.9rem;
    }

    /* MODAL HEADER */
    .modal-header {
      background-color: #343a40;
      color: #ffffff;
    }
    .modal-header .btn-close {
      filter: invert(1);
    }
  </style>
</head>
<body>

<!-- ========== NAVBAR ========== -->
<div class="top-navbar">
  <span class="brand">My Dashboard</span>
  <div>
    <a href="profile.php" class="btn btn-secondary btn-sm me-1">Profile</a>
    <a href="#"           class="btn btn-danger   btn-sm">Logout</a>
  </div>
</div>

<!-- ========== MAIN CONTENT ========== -->
<div class="main-content">

  <!-- Page header row -->
  <div class="page-header">
    <h4>Manage Users</h4>
    <button class="btn btn-primary btn-sm"
            data-bs-toggle="modal" data-bs-target="#addUserModal">
      Add New User
    </button>
  </div>

  <!-- Responsive Table -->
  <div class="table-responsive">
    <table class="table table-bordered table-hover bg-white">
      <thead>
        <tr>
          <th>ID</th>
          <th>Full Name</th>
          <th>Email</th>
          <th>Role</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Maria Cruz</td>
          <td>maria@gmail.com</td>
          <td>Admin</td>
          <td><span class="badge bg-success">Active</span></td>
          <td>
            <button class="btn btn-warning btn-sm"
                    data-bs-toggle="modal" data-bs-target="#editUserModal">Edit</button>
            <button class="btn btn-danger btn-sm"
                    data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
          </td>
        </tr>
        
      </tbody>
    </table>
  </div><!-- /table-responsive -->

</div><!-- /main-content -->


<!-- ========== ADD USER MODAL ========== -->
<div class="modal fade" id="addUserModal" tabindex="-1"
     aria-labelledby="addUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="addUserModalLabel">Add New User</h5>
        <button type="button" class="btn-close"
                data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label">Full Name</label>
          <input type="text" class="form-control" placeholder="Enter full name">
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" placeholder="Enter email address">
        </div>
        <div class="mb-3">
          <label class="form-label">Role</label>
          <select class="form-select">
            <option value="">-- Select Role --</option>
            <option>Admin</option>
            <option>User</option>
          </select>
        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"
                data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>

    </div>
  </div>
</div>


<!-- ========== EDIT USER MODAL ========== -->
<div class="modal fade" id="editUserModal" tabindex="-1"
     aria-labelledby="editUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
        <button type="button" class="btn-close"
                data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label">Full Name</label>
          <input type="text" class="form-control" value="Maria Cruz">
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" value="maria@gmail.com">
        </div>
        <div class="mb-3">
          <label class="form-label">Role</label>
          <select class="form-select">
            <option selected>Admin</option>
            <option>User</option>
          </select>
        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"
                data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-warning">Save Changes</button>
      </div>

    </div>
  </div>
</div><div class="modal fade" id="editUserModal" tabindex="-1"
     aria-labelledby="editUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
        <button type="button" class="btn-close"
                data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        
        <div class="mb-3">
          <input type="text" class="form-control" value="Maria Cruz"
                 placeholder="Full Name">
        </div>
        <div class="mb-3">
          <input type="email" class="form-control" value="maria@gmail.com"
                 placeholder="Email">
        </div>
        <div class="mb-3">
          <select class="form-select">
            <option selected>Admin</option>
            <option>User</option>
          </select>
        </div>

        
        <button type="button" class="btn-update mt-1">Update</button>
      </div>

    </div>
  </div>
</div>


<!-- ============================================================
     DELETE CONFIRM MODAL
     ============================================================ -->
<div class="modal fade" id="deleteModal" tabindex="-1"
     aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
        <button type="button" class="btn-close"
                data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        Are you sure you want to delete this record?
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"
                data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger">Confirm Delete</button>
      </div>

    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>