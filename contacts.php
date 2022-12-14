<!DOCTYPE html>
<?php 
    include('backend/db.php');
    include('include/functions.php');
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Contact</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="Shelly - Website">
        <meta name="author" content="merkulove">
        <meta name="keywords" content="">
        <link rel="icon" href="assets/img/favicon.png">
        <link rel="stylesheet" type="text/css" href="assets/css/main.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/button.min.css">
    </head>
    <body>
        <div class="wrapper">
        <?php 
            include 'include/header.php';
            banner('Contacts', 'Contact');
          ?>
            <!--pager-section end-->
            <section class="page-content">
                <div class="container">
                    <!-- <div class="mdp-map">
                        <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>   
                    </div> -->
                    <!--mdp-map end-->
                    <div class="mdp-contact">
                        <div class="row">
                            <div class="col-lg-8 col-md-7">
                                <div class="comment-area">
                                    <h3>Add Comment</h3>
                                    <form id="contact-form" method="post" action="#">
                                        <div class="response"></div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input
                                                        type="text"
                                                        name="name"
                                                        class="name"
                                                        placeholder="Name"
                                                        required
                                                    >
                                                </div>
                                                <!--form-group end-->
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input
                                                        type="email"
                                                        name="email"
                                                        class="email"
                                                        placeholder="Email"
                                                        required
                                                    >
                                                </div>
                                                <!--form-group end-->
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <textarea name="message" placeholder="Message"></textarea>
                                                </div>
                                                <!--form-group end-->
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-submit">
                                                    <button type="button" id="submit" class="btn-default">Send Now
                                                        <i class="fa fa-long-arrow-alt-right"></i>
                                                    </button>
                                                </div>
                                                <!--form-submit end-->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--comment-area end-->
                            </div>
                            <div class="col-lg-4 col-md-5">
                                <div class="mdp-our-contacts">
                                    <h3>Our Contacts</h3>
                                    <ul>
                                        <li>
                                            <div class="d-flex flex-wrap">
                                                <div class="icon-v">
                                                    <img src="assets/img/icon15.png" alt="">
                                                </div>
                                                <div class="dd-cont">
                                                    <h4>Call</h4>
                                                    <span>+2 342 5446 67</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex flex-wrap">
                                                <div class="icon-v">
                                                    <img src="assets/img/icon16.png" alt="">
                                                </div>
                                                <div class="dd-cont">
                                                    <h4>Work Time</h4>
                                                    <span>Mon - Fri 8 AM - 5 PM</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex flex-wrap">
                                                <div class="icon-v">
                                                    <img src="assets/img/icon17.png" alt="">
                                                </div>
                                                <div class="dd-cont">
                                                    <h4>Address</h4>
                                                    <span>Franklin St, Greenpoint Ave</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!--mdp-our-contacts end-->
                            </div>
                        </div>
                    </div>
                    <!--mdp-contact end-->
                </div>
            </section>
            <!--page-content end-->
            <?php 
                include 'include/join_us.php';
                ?>
            <!--newsletter-sec end-->
            <?php 
                include 'include/footer.php';
            ?>  
        </div>
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous">
        </script>
        <script type="text/javascript"src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
        </script>
        <script src="assets/js/bundle.min.js"></script>
        <script src="assets/js/contactEmail.js"></script>
    </body>
</html>
