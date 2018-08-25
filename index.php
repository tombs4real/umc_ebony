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
    <script src="js/global.js"></script>
    <!-- end scripts -->
  </body>
</html>
