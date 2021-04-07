</div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->
    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
   
    <!--[if IE]>
        <script type="text/javascript" src="../plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
    <script src="../plugins/jquery-knob/jquery.knob.js"></script>
    <!-- Dashboard Init -->
    <script src="assets/pages/jquery.dashboard.init.js"></script>
    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>
        <script>
            //simple animation for services input radio
            $("#radio1").click(function(){

            var selValue = $("#radio1:checked").val();

            if(selValue = true){
                $("#file").slideDown();
                $("#file2").fadeOut(.0001);
            }

            });
            $("#radio2").click(function(){

                var selValue = $("#radio2:checked").val();

                if(selValue = true){
                    $("#file2").slideDown();
                    $("#file").fadeOut(.0001);

                }

            });
        </script>

</body>
<!-- Mirrored from coderthemes.com/highdmin/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2019 06:51:50 GMT -->

</html>