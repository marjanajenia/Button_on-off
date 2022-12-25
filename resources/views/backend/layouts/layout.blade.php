<!DOCTYPE html>
<html lang="en">
<head>

  <!----------CSS and META START----------->
  @include('backend.includes.css')
  <!----------CSS and META END----------->

</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-----------NAVBAR START--------------->
        @include('backend.includes.navbar')
        <!-----------NAVBAR END--------------->

        <!-----------SIDEBAR START--------------->
        @include('backend.includes.sidebar')
        <!-----------SIDEBAR END--------------->

        <!------------MAIN CONTENT START----------->
        <div class="content-wrapper">
            @yield('admin.content')
        </div>
        <!------------MAIN CONTENT END----------->

        <!-----------FOOTER START--------------->
        @include('backend.includes.footer')
        <!-----------FOOTER END--------------->

        <!-----------SCRIPT START--------------->
        @include('backend.includes.script')
        <!-----------SCRIPT END--------------->

</body>
</html>
