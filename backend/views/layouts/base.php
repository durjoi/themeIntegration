<?php
use backend\assets\MetronicAsset;

MetronicAsset::register($this);
 ?>

<!DOCTYPE html>
<?php $this->beginPage() ?>
<html lang="en">
<!--begin::Head-->

<head>
  <base href="../../">
  <meta charset="utf-8" />
  <title>Metronic | Empty Page</title>
  <meta name="description" content="Page with empty content" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!--begin::Fonts-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
  <!--end::Fonts-->

  <?php $this->head() ?>

  <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />

</head>
<!--end::Head-->

<!--begin::Body-->
<?php $this->beginBody() ?>
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

  <?php echo $content ?>

  <!-- <script>
    var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
  </script> -->
  <!--begin::Global Config(global config for global JS scripts)-->
  <script>
    var KTAppSettings = {
      "breakpoints": {
        "sm": 576,
        "md": 768,
        "lg": 992,
        "xl": 1200,
        "xxl": 1400
      },
      "colors": {
        "theme": {
          "base": {
            "white": "#ffffff",
            "primary": "#3699FF",
            "secondary": "#E5EAEE",
            "success": "#1BC5BD",
            "info": "#8950FC",
            "warning": "#FFA800",
            "danger": "#F64E60",
            "light": "#E4E6EF",
            "dark": "#181C32"
          },
          "light": {
            "white": "#ffffff",
            "primary": "#E1F0FF",
            "secondary": "#EBEDF3",
            "success": "#C9F7F5",
            "info": "#EEE5FF",
            "warning": "#FFF4DE",
            "danger": "#FFE2E5",
            "light": "#F3F6F9",
            "dark": "#D6D6E0"
          },
          "inverse": {
            "white": "#ffffff",
            "primary": "#ffffff",
            "secondary": "#3F4254",
            "success": "#ffffff",
            "info": "#ffffff",
            "warning": "#ffffff",
            "danger": "#ffffff",
            "light": "#464E5F",
            "dark": "#ffffff"
          }
        },
        "gray": {
          "gray-100": "#F3F6F9",
          "gray-200": "#EBEDF3",
          "gray-300": "#E4E6EF",
          "gray-400": "#D1D3E0",
          "gray-500": "#B5B5C3",
          "gray-600": "#7E8299",
          "gray-700": "#5E6278",
          "gray-800": "#3F4254",
          "gray-900": "#181C32"
        }
      },
      "font-family": "Poppins"
    };
  </script>
</body>
<!--end::Body-->
<?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>