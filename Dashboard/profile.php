<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Profile — My Dashboard</title>
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

    .profile-card {
      background-color: #ffffff;
      border: 1px solid #dee2e6;
      border-radius: 6px;
      padding: 30px;
      max-width: 480px;
    }

    .profile-card img {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid #dee2e6;
      display: block;
      margin-bottom: 20px;
    }

    .profile-card table td {
      padding: 8px 12px;
      font-size: 0.9rem;
      vertical-align: middle;
    }

    .profile-card table td:first-child {
      font-weight: 600;
      color: #495057;
      width: 100px;
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

  <h4 class="fw-bold mb-4">My Profile</h4>

  <div class="profile-card">

    <!-- Placeholder profile picture -->
    <img src="https://ui-avatars.com/api/?name=Maria+Cruz&background=6c757d&color=fff&size=200"
         alt="Profile Picture">

    <!-- Profile info table -->
    <table class="table table-borderless mb-4">
      <tbody>
        <tr>
          <td>Name:</td>
          <td></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td></td>
        </tr>
        <tr>
          <td>Role</td>
          <td>Admin</td>
        </tr>
        <tr>
          <td>Status</td>
          <td><span class="badge bg-success">Active</span></td>
        </tr>
      </tbody>
    </table>

    <!-- Back button -->
    <a href="dashboard.php" class="btn btn-secondary btn-sm">
      &larr; Back to Dashboard
    </a>

  </div><!-- /profile-card -->

</div><!-- /main-content -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>