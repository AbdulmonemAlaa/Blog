<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">My Blog</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="add_blog.html">Add Blog</a>
            </li>
        </ul>
    </div>
</nav>

@yield('content')

<!-- Footer -->
<footer class="bg-light text-center text-lg-start mt-4">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">About My Blog</h5>
                <p>
                    Welcome to My Blog! Here, we explore various topics, from technology to lifestyle, and
                    everything in between. Stay updated with our latest posts and insights.
                </p>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Categories</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-dark">Technology</a></li>
                    <li><a href="#" class="text-dark">Lifestyle</a></li>
                    <li><a href="#" class="text-dark">Finance</a></li>
                    <li><a href="#" class="text-dark">Health</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Contact Us</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-dark">Email</a></li>
                    <li><a href="#" class="text-dark">LinkedIn</a></li>
                    <li><a href="#" class="text-dark">Twitter</a></li>
                    <li><a href="#" class="text-dark">Facebook</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="text-center p-3 bg-dark text-white">
        © 2024 My Blog | All rights reserved.
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
