<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title>PlayGround</title>

        <link rel="stylesheet" type="text/css" href="css/app.css">
        <style type="text/css">
            .portfolio-item {
                margin-bottom: 30px;
            }

            .pagination {
                margin-bottom: 30px;
            }

            footer {
                width: 100%;
                position: fixed;
                bottom: 0;
            }
        </style>
    </head>
    <body>
        <div id="app">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="#">PlayGround</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <router-link tag="li" :to="{ name: 'user' }" exact>
                                <a class="nav-link">User</a>
                            </router-link>
                            <router-link tag="li" :to="{ name: 'artikel' }">
                                <a class="nav-link">Artikel</a>
                            </router-link>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container">

                <router-view></router-view>

            </div>

            <footer class="py-1 bg-dark">
                <div class="container">
                    <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
                </div>
            </footer>
             
        </div>
    </body>

    <script type="text/javascript">
        window.myToken =  <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <script type="text/javascript" src="js/app.js"></script>

</html>