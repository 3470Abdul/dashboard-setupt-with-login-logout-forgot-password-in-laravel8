<!doctype html>
<html lang="en" dir="ltr"> <!-- This "app.blade.php" master page is used for all the pages content present in "views/livewire" except "custom" and "switcher" pages -->

<!-- Mirrored from laravel8.spruko.com/valex/index by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Oct 2022 23:02:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

        <meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Valex - Laravel Bootstrap 5 Admin & Dashboard Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="laravel admin template, bootstrap admin template, admin dashboard template, admin dashboard, admin template, admin, bootstrap 5, laravel admin, laravel admin dashboard template, laravel ui template, laravel admin panel, admin panel, laravel admin dashboard, laravel template, admin ui dashboard">

		<!-- Title -->
		<title> Valex - Premium dashboard ui bootstrap rwd admin html5 template </title>

		<!-- Favicon -->
    <link rel="icon" href="{{ url('assets/img/brand/favicon.png') }}" type="image/x-icon"/>

    <!-- Icons css -->
    <link href="{{ url('assets/plugins/icons/icons.css') }}" rel="stylesheet">

    <!-- Bootstrap css -->
    <link href="{{ url('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- style css -->
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">



    <!--- Animations css-->
    <link href="{{ url('assets/css/animate.css') }}" rel="stylesheet">

    <!---Switcher css-->
    <link href="{{ url('assets/switcher/css/switcher.css') }}" rel="stylesheet">
    <link href="{{ url('assets/switcher/demo.css') }}" rel="stylesheet">

    {{-- fontawesom CDN link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>

    <body class="ltr main-body app sidebar-mini">

        @include('layout.header')



            <!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">


        @yield('content')

    </div>
    <!-- Container closed -->
</div>
<!-- main-content closed -->


        @include('layout.footer')


    <!-- Back-to-top -->
    <a href="{{ url('#top') }}" id="back-to-top"><i class="las la-angle-double-up"></i></a>

    <!-- JQuery min js -->
    <script src="{{url('assets/plugins/jquery/jquery.min.js')}}"></script>

    <!--Internal  Datepicker js -->
<script src="{{url('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

    <!-- Bootstrap Bundle js -->
    <script src="{{url('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{url('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Moment js -->
    <script src="{{url('assets/plugins/moment/moment.js')}}"></script>

    <!-- P-scroll js -->
    <script src="{{url('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{url('assets/plugins/perfect-scrollbar/p-scroll.js')}}"></script>

    <!-- Rating js-->
<script src="{{url('assets/plugins/ratings-2/jquery.star-rating.js')}}"></script>
<script src="{{url('assets/plugins/ratings-2/star-rating.js')}}"></script>

    <!-- Sticky js -->
    <script src="{{url('assets/js/sticky.js')}}"></script>

    <!-- eva-icons js -->
    <script src="{{url('assets/plugins/eva-icons/eva-icons.min.js')}}"></script>

    <!-- Rating js-->
    <script src="{{url('assets/plugins/ratings-2/jquery.star-rating.js')}}"></script>
    <script src="{{url('assets/plugins/ratings-2/star-rating.js')}}"></script>

    <!-- Sidebar js -->
    <script src="{{url('assets/plugins/side-menu/sidemenu.js')}}"></script>

    <!-- Right-sidebar js -->
    <script src="{{url('assets/plugins/sidebar/sidebar.js')}}"></script>
    <script src="{{url('assets/plugins/sidebar/sidebar-custom.js')}}"></script>


    <!--Internal  Chart.bundle js -->
    <script src="{{url('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

    <!--Internal Sparkline js -->
    <script src="{{url('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

    <!--Internal Apexchart js-->
    <script src="{{url('assets/js/apexcharts.js')}}"></script>

    <!-- Internal Map -->
    <script src="{{url('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{url('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

    <!--Internal  index js -->
    <script src="{{url('assets/js/index.js')}}"></script>

    <!-- Apexchart js-->
    <script src="{{url('assets/js/apexcharts.js')}}"></script>
    <script src="{{url('assets/js/jquery.vmap.sampledata.js')}}"></script>

    <!-- DATA TABLE JS-->
		<script src="{{url('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{url('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
		<script src="{{url('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{url('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
		<script src="{{url('assets/plugins/datatable/js/jszip.min.js')}}"></script>
		<script src="{{url('assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
		<script src="{{url('assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
		<script src="{{url('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
		<script src="{{url('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
		<script src="{{url('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
		<script src="{{url('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{url('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

		<!--Internal  Datatable js -->
		<script src="{{url('assets/js/table-data.js')}}"></script>

        <!-- INTERNAL WYSIWYG Editor JS -->
        <script src="{{url('assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
        <script src="{{url('assets/plugins/wysiwyag/wysiwyag.js')}}"></script>

        <!-- INTERNAL Summernote Editor js -->
        <script src="{{url('assets/plugins/summernote-editor/summernote1.js')}}"></script>
        <script src="{{url('assets/js/summernote.js')}}"></script>

        <!--themecolor js-->
        <script src="{{url('assets/js/themecolor.js')}}"></script>

        <!-- custom js -->
        <script src="{{url('assets/js/custom.js')}}"></script>

        <!-- Switcher js -->
        <script src="{{url('assets/switcher/js/switcher.js')}}"></script>

</body>


<!-- Mirrored from laravel8.spruko.com/valex/index by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Oct 2022 23:04:18 GMT -->
</html>
