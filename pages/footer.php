        <!-- footer content -->
        <footer>

          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <script src="../gentela/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../gentela/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../gentela/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../gentela/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../gentela/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../gentela/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../gentela/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../gentela/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../gentela/vendors/Flot/jquery.flot.js"></script>
    <script src="../gentela/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../gentela/vendors/Flot/jquery.flot.time.js"></script>
    <script src="../gentela/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../gentela/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../gentela/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../gentela/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../gentela/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../gentela/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../gentela/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../gentela/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../gentela/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../gentela/vendors/moment/min/moment.min.js"></script>
    <script src="../gentela/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../gentela/build/js/custom.js"></script>
    <!-- <script src="../gentela/build/js/js.js"></script> -->
    <script src="../api/js/dash.js"></script>
    <script src="../api/js/calculations.js"></script>

    <script src="../api/js/loadfileonclick.js"></script>
    <script src="../api/js/updateTableDataDash.js"></script>
	
        <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });


        $(document).ready( function () {
            $('#datatablecapproved').DataTable({
              language: {
                  url: '//cdn.datatables.net/plug-ins/1.10.19/i18n/Hebrew.json'
              }
            });
        } );


        $(document).ready( function () {
            $('#datatablecreturned').DataTable({
              language: {
                  url: '//cdn.datatables.net/plug-ins/1.10.19/i18n/Hebrew.json'
              }
            });
        } );


        $(document).ready( function () {
            $('#datatablecheckbox').DataTable({
              language: {
                  url: '//cdn.datatables.net/plug-ins/1.10.19/i18n/Hebrew.json'
              }
            });
        } );
        </script>
        


        

        
  </body>
</html>