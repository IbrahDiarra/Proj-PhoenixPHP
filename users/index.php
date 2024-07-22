<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Phoenix-Interim-RH</title>

        <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
        <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

       
    </head>
    <style>
        .txt{
            color: white;
            font-family: 'Comic Sans MS';
        }
        .txte{
            color: rgb(5, 5, 5);
            font-family: 'Rockwell';
        }
        :root {
        --sidebar: rgb(3, 74, 76);
        }
    </style>

    <body id="page-top">
        <div id="wrapper">
            <?php $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';  ?>
            
            <div>
            <?php require_once('code/navbar.php') ?>
            </div>

            <?php require_once('code/sidebar.php') ?>

            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <div class="container-fluid mt-5 pt-5">
                        <?php 
                            if(!file_exists($page.".php") && !is_dir($page)){
                                include '404.html';
                            }else{
                            if(is_dir($page))
                                include $page.'index.php';
                            else
                                include $page.'.php';
                            }
                        ?>
                    </div>
                </div>

                <?php include 'code/footer.php'; ?> 
            </div>
           
        </div>

        <!--Logout et modal-->
        <div>
            <a class="scroll-to-top rounded bg-success" href="#page-top1">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Prêt à partir?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Sélectionnez « Se déconnecter » ci-dessous si vous êtes prêt à mettre fin à votre session en cours.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                            <a class="btn btn-primary" href="../index.php">Se déconnecter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- les styles js-->
        <div>
            <!-- Bootstrap core JavaScript-->
            <script src="../assets/vendor/jquery/jquery.min.js"></script>
            <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="../assets/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="../assets/vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="../assets/js/demo/chart-area-demo.js"></script>
            <script src="../assets/js/demo/chart-pie-demo.js"></script>

            <script src="../assets/pagination.js"></script>

            <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

            <script src="../assets/js/demo/datatables-demo.js"></script>

        </div>
    </body>
</html>
