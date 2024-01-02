<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN</title>
    <link rel="stylesheet" href="./admin.assets/css/admic.style.css">
    <?php
    include_once "./admin.assets/css/admin.css.php";
    ?>
    <style>
        /* Add your custom styles here */
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            color: white;
        }

        .content {
            padding: 20px;
        }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#" data-target="home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-target="about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-target="services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-target="contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-none d-md-block sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" data-target="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-target="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-target="services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-target="contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 content" id="content">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Content Area</h1>
            </div>
            <div class="dynamic-content" id="home">
                <h2>Home</h2>
                <p>Welcome to our website's home page.</p>
            </div>
            <div class="dynamic-content" id="about">
                <h2>About</h2>
                <p>Learn more about us and our mission.</p>
            </div>
            <div class="dynamic-content" id="services">
                <h2>Services</h2>
                <p>Explore the services we offer to our clients.</p>
            </div>
            <div class="dynamic-content" id="contact">
                <h2>Contact</h2>
                <p>Contact us for inquiries and information.</p>
            </div>
        </main>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php
include_once "./admin.assets/js/admin.js.php";
?>

</body>
</html>