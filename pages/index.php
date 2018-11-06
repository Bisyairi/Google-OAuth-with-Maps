<?php
session_start();
if (!isset($_SESSION['access_token'])) {
	header('Location: login.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Google Youtube and Authentication</title>
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/googlemaps.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#">Google</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php" >Sign out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Page Content -->
    <div class="container">
      <h3 class="mt-5 text-center">Google Profile</h3>
      <div class="row">
        <div class="col-md-3 text-center">
          <img style="width: 80%;" src="<?php echo $_SESSION['picture'] ?>">
        </div>
        <div class="col-md-9">
          <table class="table table-hover table-bordered">
            <tbody>
              <tr>
                <td>ID</td>
                <td><?php echo $_SESSION['id'] ?></td>
              </tr>
              <tr>
                <td>First Name</td>
                <td><?php echo $_SESSION['givenName'] ?></td>
              </tr>
              <tr>
                <td>Last Name</td>
                <td><?php echo $_SESSION['familyName'] ?></td>
              </tr>
              <tr>
                <td>Email</td>
                <td><?php echo $_SESSION['email'] ?></td>
              </tr>
              <tr>
                <td>Gender</td>
                <td><?php echo $_SESSION['gender'] ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <h3 class="mt-2 text-center">Google Maps</h3>
      <div id="content">
        <div class="row">
          <div class="col s12">
            <form action="#">
              <div class="input-field col s12">
                <div class="pac-card" id="pac-card">
                  <div>
                    <div id="title">
                      Autocomplete search
                    </div>
                    <div id="type-selector" class="pac-controls">
                      <input type="radio" name="type" id="changetype-all" checked="checked">
                      <label for="changetype-all">All</label>
                      <input type="radio" name="type" id="changetype-establishment">
                      <label for="changetype-establishment">Establishments</label>
                      <input type="radio" name="type" id="changetype-address">
                      <label for="changetype-address">Addresses</label>
                      <input type="radio" name="type" id="changetype-geocode">
                      <label for="changetype-geocode">Geocodes</label>
                    </div>
                    <div id="strict-bounds-selector" class="pac-controls">
                      <input type="checkbox" id="use-strict-bounds" value="">
                      <label for="use-strict-bounds">Strict Bounds</label>
                    </div>
                  </div>
                  <div id="pac-container">
                    <input id="pac-input" type="text"
                    placeholder="Enter a location">
                  </div>
                </div>
                <div id="map" style="height: 500px; width: 1000px"></div>
                <div id="infowindow-content">
                  <img src="" width="10" height="10" id="place-icon">
                  <span id="place-name"  class="title"></span><br>
                  <span id="place-address"></span>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/googlemaps.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzF9bG1voYuDQb_EbrVe2JllsZb9k4wfg&libraries=places&callback=initMap"
    async defer></script>
  </body>
</html>