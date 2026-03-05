<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Paradise - Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') no-repeat center center;
            background-size: cover;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="hero">
        <div class="text-center">
            <h1>Welcome to Hotel Paradise</h1>
            <p>Your dream vacation awaits</p>
            <a href="signup.php" class="btn btn-primary btn-lg">Book Now</a>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://www.craftedbeds.co.uk/cdn/shop/articles/c6229643564835.57f4204983b16.jpg?v=1654414798" class="card-img-top" alt="Luxury Rooms">
                    <div class="card-body">
                        <h5 class="card-title">Luxury Rooms</h5>
                        <p class="card-text">Experience comfort and elegance in our premium rooms.</p>
                        <a href="#" class="btn btn-primary">View Rooms</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://images.surferseo.art/7d5164fa-7a4d-49bd-a811-307c98f79698.png" class="card-img-top" alt="Dining">
                    <div class="card-body">
                        <h5 class="card-title">Fine Dining</h5>
                        <p class="card-text">Savor exquisite cuisine at our world-class restaurant.</p>
                        <a href="#" class="btn btn-primary">View Menu</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/28/fd/7c/fa/caption.jpg?w=900&h=500&s=1" class="card-img-top" alt="Spa">
                    <div class="card-body">
                        <h5 class="card-title">Spa & Wellness</h5>
                        <p class="card-text">Relax and rejuvenate with our spa treatments.</p>
                        <a href="#" class="btn btn-primary">Book Spa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>