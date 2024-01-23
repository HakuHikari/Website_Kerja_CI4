<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/footer/footer.css') ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Your custom CSS -->
    <style>

.form-group{
    margin-top: 20px;
}
    </style>
</head>

<body>
    <footer class="container-fluid">
        <div class="row">
            <!-- Left Section -->
            <div class="col-md-4 footer-left">
                <ul class="list-unstyled">
                    <li><a href="homepage">Home</a></li>
                    <li><a href="project">Project</a></li>
                    <li><a href="forum">Discussion</a></li>
                    <li><a href="Biodata">Biodata</a></li>
                </ul>
            </div>

            <!-- Center Section -->
            <div class="col-md-4 footer-center">
                <img src="images/logo.png" width="110" height="30" class="d-inline-block align-top" alt="Logo">
                <form action="#">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your email">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe Now</button>
                </form>
            </div>

            <!-- Right Section -->
            <div class="col-md-4 footer-right">
                <h5>Address</h5>
                <address>

                    #alamat<br>
                    mau makan<br>
                    di tokyo
                </address>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>