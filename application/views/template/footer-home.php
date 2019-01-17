
            </div>
            <!-- End of container-fluid-->
        </div>
        <!-- End of container 
        <div class="container-fluid mb-5 fixed-bottom" style="bottom:20px">
            <button type="button" class="btn btn-primary btn-lg waves-effect waves-light float-right" data-toggle="modal" data-target=".bs-example-modal-sm" style="border-radius:25%"><i class="dripicons-plus"></i></button>
        </div>
-->
        <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
            aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close mb-2" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="mt-0 header-title">You want to add some ?</h4>
                        <a href="<?php echo base_url();?>addincome" role="button" class="btn btn-primary btn-lg btn-block waves-effect waves-light">New Income</a>
                        <a href="<?php echo base_url();?>addexpense" role="button" class="btn btn-primary btn-lg btn-block waves-effect waves-light">New Expenses</a>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <footer class="footer fixed-bottom">© 2018 Cashtrack <span class="d-none d-sm-inline-block">- Crafted with <i class="mdi mdi-heart text-danger"></i>
                by MAD Design.</span></footer>
    </div><!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
</div><!-- END wrapper -->

<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/modernizr.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/metisMenu.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url();?>assets/js/waves.js"></script>
    <script src="<?php echo base_url();?>plugins/peity-chart/jquery.peity.min.js"></script>
    <!--Morris Chart-->
    <script src="<?php echo base_url();?>plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url();?>plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url();?>plugins/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url();?>assets/pages/morris.init.js"></script>
    <script src="<?php echo base_url();?>assets/pages/dashboard.js"></script><!-- App js -->
    <script src="<?php echo base_url();?>assets/pages/form-advanced.js"></script><!-- App js -->
    <script src="<?php echo base_url();?>plugins/chart.js/chart.min.js"></script> 
    <script src="<?php echo base_url();?>assets/js/app.js"></script>
    
    <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ["Bills", "Blue"],
        datasets: [{
            label: '# of Votes',
            data: [200, 190],
            backgroundColor: [ 
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',  
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    }
});
    </script>    
</body>
<!-- Mirrored from themesbrand.com/foxia/green-2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Jan 2019 06:39:38 GMT -->

</html>
