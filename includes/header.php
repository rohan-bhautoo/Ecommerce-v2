<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-commerce</title>
    <link rel="stylesheet" href="../styles/Index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<!-- Top section -->
<div class="top">
    <!-- Top navigation section -->
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">

            <!-- Logo -->
            <a class="navbar-brand" href="/php/Index.php">
                <img src="../images/logo.png" alt="Logo" style="width: 50px;">
            </a>

            <!-- User section -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#registerModal">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#loginModal">Login</a>
                </li>
            </ul>

            <!-- Search Bar -->
            <form class="form-inline my-2 my-lg-0 col-md-8">
                <input class="form-control ml-sm-4 mr-sm-2 col-md-10" type="search" placeholder="Search..."
                       aria-label="Search" required>
                <button class="btn btn-primary my-2 my-sm-0 col-sm-1" type="submit"><i class="fas fa-search"></i></button>
            </form>

            <!-- Cart and favorites section -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link">
                        <i style="font-size: 22px" class="fas fa-heart"></i> 0
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i style="font-size: 22px" class="fas fa-shopping-cart"></i> 0
                    </a>
                </li>
            </ul>
        </div>
    </nav> <!-- End of Top navigation section -->
</div> <!-- End of Top section -->

<?

echo '<!-- Menu section -->';
echo '<div class="menu">';
echo '<nav class="nav navbar-expand-md bg-dark justify-content-end">';
echo '<!-- Collapsed button for smaller screens -->';
echo '<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">';
echo '<span class="navbar-toggler-icon"></span>';
echo '</button>';
echo '<!-- Navbar links -->';
echo '<div class="collapse navbar-collapse" id="collapsibleNavbar">';
echo '<ul class="navbar-nav ml-auto mr-auto">';

$linkNames = array("Home", "Shop", "Fashion", "Beauty & Care", "Electronics", "Sports & Outdoors", "Home Supplies", "Contact Us");
$linkAddresses = array("Index.php", "Shop.php", "#", "#", "#", "#", "#", "#");

for ($x = 0; $x < count($linkNames); $x++) {
    if(basename($_SERVER['PHP_SELF']) == $linkAddresses[$x]) {
        echo '<li class="nav-item active">';
        echo '<a class="nav-link" href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</a></li>';
    } else {
        echo '<li class="nav-item">';
        echo '<a class="nav-link" href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</a></li>';
    }
}

echo '</ul>';
echo '</div>';
echo '</nav>  <!-- End of Menu navigation section -->';
echo '</div>  <!-- End of Menu section -->';

?>