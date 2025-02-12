<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Icofont -->
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets/fonts/flaticon.css">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Theme Dark CSS -->
    <link rel="stylesheet" href="assets/css/theme-dark.css">

    <title>Review List</title>

    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <!-- Add the script here to ensure it's loaded before the button -->
    <script>
        function copyReview(event) {
            event.preventDefault(); // Prevent the default link behavior

            // Send an AJAX request to the PHP backend
            fetch('copy_review.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Copy the review_copy value to the clipboard
                        navigator.clipboard.writeText(data.review_copy).then(() => {
                            alert('Review copied to clipboard!');
                        }).catch(err => {
                            console.error('Failed to copy text: ', err);
                        });
                    } else {
                        alert(data.message || 'Failed to copy review.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    </script>
</head>
<body>
<!-- Preloader -->
<!--<div class="loader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div>
    </div>
</div>-->
<!-- End Preloader -->

<!-- Page Title -->
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-text">
                    <h2>Review List</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title -->

<!-- Companies -->
<section class="companies-area companies-area-two pt-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-12">
                <div class="companies-item wow fadeInUp" data-wow-delay=".3s">
                    <img src="assets/img/home-1/companies/1.png" alt="Companies">
                    <h3>
                        <a href="#">frogbid.com</a>
                    </h3>
                    <a class="companies-btn" href="#" onclick="copyReview(event)">Copy Review</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Companies -->

<!-- Footer -->
<footer>
    <div class="container">
        <div class="copyright-area">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="copyright-item">
                        <p>© <span>Gably</span> is Proudly Owned by <a href="#" target="_blank">HiBoostrap</a></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="copyright-item copyright-right">
                        <ul>
                            <li>
                                <a href="#" target="_blank">Terms & Conditions</a>
                            </li>
                            <li>
                                <span>-</span>
                            </li>
                            <li>
                                <a href="#" target="_blank">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- Essential JS -->

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Meanmenu JS -->
<script src="assets/js/jquery.meanmenu.js"></script>
<!-- Mixitup JS -->
<script src="assets/js/jquery.mixitup.min.js"></script>
<!-- Owl Carousel JS -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Form Ajaxchimp JS -->
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<!-- Form Validator JS -->
<script src="assets/js/form-validator.min.js"></script>
<!-- Contact JS -->
<script src="assets/js/contact-form-script.js"></script>
<!-- Wow JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Odometer JS -->
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/custom.js"></script>
</body>
</html>