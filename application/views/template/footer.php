            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Universitas Diponegoro 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DataTable -->
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script type="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

            <!-- Bootstrap core JavaScript-->
            <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <script type="text/javascript">
                $(document).ready(function() {
                    $('#example').DataTable({
                        "scrollX": true
                    });
                });
            </script>

            <script type="application/javascript">
                /** After windod Load */
                $(window).bind("load", function() {
                    window.setTimeout(function() {
                        $(".alert").fadeTo(1500, 0).slideUp(500, function() {
                            $(this).remove();
                        });
                    }, 500);
                });
            </script>

            <!-- Core plugin JavaScript-->
            <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="<?php echo base_url(); ?>assets/js/demo/chart-area-demo.js"></script>
            <script src="<?php echo base_url(); ?>assets/js/demo/chart-pie-demo.js"></script>

            <!-- Page level plugins -->
            <script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="<?php echo base_url(); ?>assets/js/demo/datatables-demo.js"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/js/sweetalert.js"></script>

            <script type="text/javascript">
                // Pie Chart Example
                var ctx = document.getElementById("myPieChart");
                var myPieChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: ["Baru", "Perpanjangan"],
                        datasets: [{
                            data: [<?php echo $this->db->query("select status from pkp where status='Baru'")->num_rows(); ?>,
                                <?php echo $this->db->query("select status from pkp where status='Perpanjangan'")->num_rows(); ?>
                            ],
                            backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
                            hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                            hoverBorderColor: "rgba(234, 236, 244, 1)",
                        }],
                    },
                    options: {
                        maintainAspectRatio: false,
                        tooltips: {
                            backgroundColor: "rgb(255,255,255)",
                            bodyFontColor: "#858796",
                            borderColor: '#dddfeb',
                            borderWidth: 1,
                            xPadding: 15,
                            yPadding: 15,
                            displayColors: false,
                            caretPadding: 10,
                        },
                        legend: {
                            display: false
                        },
                        cutoutPercentage: 80,
                    },
                });
            </script>

            <script type="text/javascript">
                // Area Chart Example
                var ctx = document.getElementById("myAreaChart");
                var myLineChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["Plastik", "Aluminium Foil", "Toples Plastik", "Plastik Mika", "Plastik Pouch", "Botol Plastik", "Kardus", "Komposit", "Botol Kaca", "Cup Plastik", "Plastik Vacum", "Besek", "Toples Kaca", "Thinwall", "Jerigen", "Mika"],
                        datasets: [{
                            label: "Jenis Kemasan Yang Digunakan",
                            backgroundColor: 'rgb(23, 125, 255)',
                            borderColor: 'rgb(23, 125, 255)',
                            data: [<?php echo $this->db->query("select kemasan from pirt where kemasan='Plastik'")->num_rows(); ?>,
                                <?php echo $this->db->query("select kemasan from pirt where kemasan='Aluminium Foil'")->num_rows(); ?>,
                                <?php echo $this->db->query("select kemasan from pirt where kemasan='Toples Plastik'")->num_rows(); ?>,
                                <?php echo $this->db->query("select kemasan from pirt where kemasan='Plastik Mika'")->num_rows(); ?>,
                                <?php echo $this->db->query("select kemasan from pirt where kemasan='Plastik Pouch'")->num_rows(); ?>,
                                <?php echo $this->db->query("select kemasan from pirt where kemasan='Botol Plastik'")->num_rows(); ?>,
                                <?php echo $this->db->query("select kemasan from pirt where kemasan='Kardus'")->num_rows(); ?>,
                                <?php echo $this->db->query("select kemasan from pirt where kemasan='Komposit'")->num_rows(); ?>,
                                <?php echo $this->db->query("select kemasan from pirt where kemasan='Botol Kaca'")->num_rows(); ?>,
                                <?php echo $this->db->query("select kemasan from pirt where kemasan='Cup Plastik'")->num_rows(); ?>,
                                <?php echo $this->db->query("select kemasan from pirt where kemasan='Plastik Vacum'")->num_rows(); ?>,
                                <?php echo $this->db->query("select kemasan from pirt where kemasan='Besek'")->num_rows(); ?>,
                                <?php echo $this->db->query("select kemasan from pirt where kemasan='Toples Kaca'")->num_rows(); ?>,
                                <?php echo $this->db->query("select kemasan from pirt where kemasan='Thinwall'")->num_rows(); ?>,
                                <?php echo $this->db->query("select kemasan from pirt where kemasan='Jerigen'")->num_rows(); ?>,
                                <?php echo $this->db->query("select kemasan from pirt where kemasan='Mika'")->num_rows(); ?>
                            ],
                        }],
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                    }
                });
            </script>

            </body>

            </html>