<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin</title>
        <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet" type="text/css">
        <!-- <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css"> -->
        <link rel="stylesheet" type="text/css" href="../assets/css/font-linearicons.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-theme.css">
        <!-- <link rel="stylesheet" type="text/css" href="../assets/css/jquery-ui.css"> -->
        <link rel="stylesheet" type="text/css" href="../assets/css/owl.carousel.css">
        <!-- <link rel="stylesheet" type="text/css" href="../assets/css/owl.transitions.css"> -->
        <link rel="stylesheet" type="text/css" href="../assets/css/owl.theme.css">
        <link
            rel="stylesheet"
            type="text/css"
            href="../assets/css/theme.css"
            media="all"
        >
        <link
            rel="stylesheet"
            type="text/css"
            href="../assets/css/responsive.css"
            media="all"
        >
        <link
            rel="stylesheet"
            type="text/css"
            href="../assets/css/mynav.css"
            media="all"
        >
        <!-- <link rel="stylesheet" type="text/css" href="{% static 'css/bootstrap.css' %}"/> -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"> -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
        <!-- google font -->
        <link rel="preconnect" href="https://fonts.gstatic.com/">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
        <!-- bootstrap css -->
        <link
            id="rtl-link"
            rel="stylesheet"
            type="text/css"
            href="../myadmin/css/vendors/bootstrap.css"
        >
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="../myadmin/css/vendors/font-awesome.css">
        <!-- feather icon css -->
        <link rel="stylesheet" type="text/css" href="../myadmin/css/vendors/feather-icon.css">
        <!-- animation css -->
        <link rel="stylesheet" type="text/css" href="../myadmin/css/vendors/animate.css">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="../myadmin/css/vendors/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="../myadmin/css/vendors/slick/slick-theme.css">
        <!-- Theme css -->
        <link
            id="color-link"
            rel="stylesheet"
            type="text/css"
            href="../myadmin/css/demo2.css"
        >

        <!-- This is for the Nav Bar -->
        <link rel="stylesheet" type="text/css" href="../../assets/css/main.min.css">
        <link rel="stylesheet" type="text/css" href="../../assets/css/button.min.css">
    </head>
    <body>
        <div class="wrap">
            <!-- <div class=""> -->
                <?php 
                    include("../../backend/db.php");
                ?>
                               <?php 
                    include '../include/header.php';
                ?>
            <!-- </div> -->
            <div class="container">
                    <section class="section-content padding-y w-100" style="margin-top:60px;">
                        <div class=" d-flex justify-content-center">
                            <div class="w-75 d-flex flex-column align-items-center">
                                <div class="card w-75" style="margin-top:40px;">
                                    <article class="card-body">
                                        <header class="mb-4">
                                            <h4 class="card-title text-center">Do not be here</h4>
                                        </header>
                                        <form id="regenerationform" class="uniform" action="backend_register.php" method="POST">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>First name</label>
                                                    <input type="text" class="form-control" name="firstname">
                                                </div>
                                                <!-- form-group end.// -->
                                                <div class=" form-group col-md-6">
                                                    <label>Last name</label>
                                                    <input type="text" class="form-control" name="lastname">
                                                </div>
                                                <!-- form-group end.// -->
                                            </div>
                                            <!-- form-row end.// -->
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" name="email">
                                                </div>
                                                <div class="col form-group col-md-6">
                                                    <label>Phone Number</label>
                                                    <input type="tel" class="form-control" name="phone_number">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Create password</label>
                                                    <input type="password" id="password" class="form-control" name="password">
                                                </div>
                                                <!-- form-group end.// -->
                                                <div class="form-group col-md-6">
                                                    <label>Repeat password</label>
                                                    <input type="password" id="cpassword" class="form-control" name="cpassword">
                                                </div>
                                                <!-- form-group end.// -->
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block"> Register</button>
                                            </div>
                                        </form>
                                    </article>
                                    <!-- card-body.// -->
                                </div>
                                <!-- card .// -->
                                <p class="text-center mt-4">Have an account?
                                    <a href="login.php">Log In</a>
                                </p>
                                <br>
                                <br>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <all>
            <script type="text/javascript" src="{% static 'js/jquery-1.12.3.min.js' %}"></script>
            <script type="text/javascript" src="{% static 'js/bootstrap.min.js' %}"></script>
            <script type="text/javascript" src="{% static 'js/jquery.fancybox.js' %}"></script>
            <script type="text/javascript" src="{% static 'js/jquery-ui.js' %}"></script>
            <script type="text/javascript" src="{% static 'js/owl.carousel.js' %}"></script>
            <script type="text/javascript" src="{% static 'js/theme.js' %}"></script>
            <script>
                function openWhatsApp() {  
                    window.open('whatsapp://send?text= We are still working on it');  
                    }
            </script>
            <!-- latest jquery-->
            <!-- <script src="assets/js/jquery-3.5.1.min.js"></script> -->
            <script type="text/javascript" src="{% static 'myadmin/js/jquery-3.5.1.min.js' %}"></script>
            <!-- Add To Home js -->
            <script type="text/javascript" src="{% static 'myadmin/js/pwa.js' %}"></script>
            <!-- Bootstrap js-->
            <script type="text/javascript" src="{% static 'myadmin/js/bootstrap/bootstrap.bundle.min.js' %}"></script>
            <!-- feather icon js-->
            <script type="text/javascript" src="{% static 'myadmin/js/feather/feather.min.js' %}"></script>
            <!-- lazyload js-->
            <script type="text/javascript" src="{% static 'myadmin/js/lazysizes.min.js' %}"></script>
            <!-- Slick js-->
            <script type="text/javascript" src="{% static 'myadmin/js/slick/slick.js' %}"></script>
            <script type="text/javascript" src="{% static 'myadmin/js/slick/slick-animation.min.js' %}"></script>
            <script type="text/javascript" src="{% static 'myadmin/js/slick/custom_slick.js' %}"></script>
            <!-- Filter Hide and show Js -->
            <script type="text/javascript" src="{% static 'myadmin/js/filter.js' %}"></script>
            <!-- Notify js-->
            <script type="text/javascript" src="{% static 'myadmin/js/bootstrap/bootstrap-notify.min.js' %}"></script>
            <!-- script js -->
            <script type="text/javascript" src="{% static 'myadmin/js/theme-setting.js' %}"></script>
            <script type="text/javascript" src="{% static 'myadmin/js/script.js' %}"></script>
            <script>
                function Ham() {
                    var x = document.getElementById("myLinks");
                    if (x.style.display === "block") {
                    x.style.display = "none";
                    } else {
                    x.style.display = "block";
                    }
                }
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js">
            </script>

            <!-- This is for the Nav Bar -->
            <script src="../../assets/js/bundle.min.js"></script>
            <script src="../assets/js/addpost.js"></script>



        </all>
    </body>
</html>
