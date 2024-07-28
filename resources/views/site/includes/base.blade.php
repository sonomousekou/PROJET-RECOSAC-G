    <!DOCTYPE html>
    <html lang="fr">
    
    <head>
    
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/icofont.min.css">
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <link rel="stylesheet" href="assets/css/modal-video.min.css">
        <link rel="stylesheet" href="assets/fonts/flaticon.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/lightbox.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <link rel="stylesheet" href="assets/css/nice-select.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="assets/css/theme-dark.css">
    
        <style>

.capitalize-first {
    text-transform: lowercase;
}

.capitalize-first::first-letter {
    text-transform: uppercase;
}

        </style>

 <title>@yield('title') - RECOSAC GUINEE</title>
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>
    
    <body>
    
        <div class="loader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="pre-box-one">
                        <div class="pre-box-two"></div>
                    </div>
                </div>
            </div>
        </div>

    @include('site.includes.header_area')

    @yield('content')

    @include('site.includes.footer_area')


    <div class="go-top">
      <i class="icofont-arrow-up"></i>
      <i class="icofont-arrow-up"></i>
  </div>


  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  {{-- <script src="assets/js/form-validator.min.js"></script> --}}
  {{-- <script src="assets/js/contact-form-script.js"></script> --}}
  <script src="assets/js/jquery.ajaxchimp.min.js"></script>
  <script src="assets/js/jquery.meanmenu.js"></script>
  <script src="assets/js/jquery-modal-video.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/lightbox.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/odometer.min.js"></script>
  <script src="assets/js/jquery.appear.min.js"></script>
  <script src="assets/js/jquery.nice-select.min.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
    var linkText = document.getElementById('link-text');
    var textContent = linkText.textContent.toLowerCase();
    linkText.textContent = textContent.charAt(0).toUpperCase() + textContent.slice(1);
});

  </script>
</body>

</html>