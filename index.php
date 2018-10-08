<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <!-- styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- end styles -->
  </head>
  <body class="uu-body">

    <!-- Page Loader -->
    <div class="page-loader">
      <!-- svg block u -->
      <div class="uu-logo-loader animated pulse infinite">
        <svg version="1.1" id="blocku-loader-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        	 viewBox="0 0 48.4 44.2" style="enable-background:new 0 0 48.4 44.2;" xml:space="preserve">
        <title>University of Utah Loader</title>
        <polygon class="blocku-loader-svg" points="1.1,13.7 5.3,13.7 5.3,34.8 13.7,43.1 34.7,43.1 43.1,34.8 43.1,13.7 47.4,13.7 47.4,1.1 26.3,1.1
        	26.3,13.7 30.5,13.7 30.5,30.5 17.9,30.5 17.9,13.7 22.1,13.7 22.1,1.1 1.1,1.1 "/>
        </svg>
      </div>
      <!-- end svg block u -->
      <div class="page-loader-bar"></div>
      <div class="page-loader-top"></div>
      <div class="page-loader-bottom"></div>
    </div>
    <!-- End Page Loader -->

    <!-- nav -->
    <?php include 'includes/nav.php'; ?>
    <!-- end nav -->

    <!-- page -->
    <div class="page-container">

      <!-- header -->
      <?php include 'includes/header.php'; ?>
      <!-- end header -->

      <!-- main -->
      <main>
        <?php include 'includes/style-guide.php'; ?>
      </main>
      <!-- end main -->

      <!-- footer -->
      <?php include 'includes/footer.php'; ?>
      <!-- end footer -->

      <!-- modals -->
      <!-- search modal -->
      <div id="uu-search-modal" class="modal fade" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <!-- search form -->
              <form class="search-form" action="index.html" method="post">
                <input type="text" class="search-input search-query" name="s" placeholder="Search Site" value="" title="Search for:">
                <button type="submit" name="button" class="search-form-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
              </form>
              <!-- end search form -->
            </div>
          </div>
      </div>
      <!-- end search modal -->
      <!-- end modals -->
    </div>
    <!-- end page -->

    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
    <script src="js/global.js"></script>
    <!-- end scripts -->
  </body>
</html>
