<!DOCTYPE html>
<?php 
    include 'backend/db.php';
    // Material / Past question check


?>
<html lang="en">
    <!-- <head>
        <meta charset="UTF-8">
        <title>Index</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="keywords" content="">
        <link rel="icon" href="assets/img/favicon.png">
        <link rel="stylesheet" type="text/css" href="assets/css/button.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        
    </head> -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Index</title>
        <!-- <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.6.0/flatly/bootstrap.min.css"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/button.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/style2.css">
        <link rel="stylesheet" href="assets/css/main.min.css">
    </head>
    <body class="app">
        <?php 
                if (!isset($_GET['paper'])) {
                    header("location:index.php?paper=1");
                }
            if ($_GET['paper'] == 1 or $_GET['paper'] == 2 ) {
                if ($_GET['paper'] == 1) {
                    $wordID = $_GET['paper'];
                    $word = 'Materials';
                    $notword = 'Past Questions';
                    $notwordID = '2';
                    $icon = 'fa-solid fa-pen';
                }
                if ($_GET['paper'] == 2) {
                    $wordID = $_GET['paper'];
                    $word = 'Past Questions';
                    $notword = 'Materials';
                    $notwordID = '1';
                    $icon = 'fa fa-book';
                }
            } else{
                header("location:index.php?paper=1&msg=sorry that page does not exist");
            }
        
        ?>
        <div class="wrapper ">
                    <?php 
                        include 'include/header.php';
                    ?>
            <div class="container-wide">
                <div class="main-section">
                    <section class="main-banner">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-7">
                                    <div class="banner-text wow fadeInLeft" data-wow-duration="1000ms">
                                        <h2>The Better Way to get
                                            <span><?php echo $word;?></span>
                                        </h2>
                                        <p>Mauris malesuada enim eget blandit gravida. Duis hendrerit cursus turpis, id mollis est rutrum nec. Sed interdum nisi id libero tincidunt, sit amet vestibulum tortor porttitor. Cras ligula lacus, ullamcorper sed</p>
                                        <form class="search-form">
                                            <input type="text" name="search" placeholder="Search Files">
                                            <button>
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5">
                                    <div class="banner-img wow zoomIn" data-wow-duration="1000ms">
                                        <img src="assets/img/banner-img.png" alt="">
                                    </div>
                                    <!--banner-img end-->
                                    <div class="elements-bg wow zoomIn" data-wow-duration="1000ms"></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- main-banner end
                    <h2 class="main-title">Shelly</h2> -->
                </div>
                <!--main-section end-->
                <section class="about-us-section">
                    <div class="container">
                        <div class="section-title text-center">
                            <h2>Welcome to
                                <span><?php echo $word; ?></span>
                            </h2>
                            <p>Nunc consectetur ex nunc, id porttitor leo semper eget. Vivamus interdum, mauris quis cursus sodales, urn</p>
                        </div>
                        <!--section-title end-->
                        <div class="about-sec">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="abt-col wow fadeInUp" data-wow-duration="1000ms">
                                            <img src="assets/img/icon5.png" alt="">
                                            <h3>Update to date Questions</h3>
                                            <p>Vivamus interdum, mauris interdum quis curdum sodales</p>
                                        </div>
                                        <!--abt-col end-->
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="abt-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
                                            <img src="assets/img/icon7.png" alt="">
                                            <h3>Update to date Answers</h3>
                                            <p>Pelleneget tespharetra que fringilla egugue id eget pharetra</p>
                                        </div>
                                        <!--abt-col end-->
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="abt-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
                                            <img src="assets/img/icon8.png" alt="">
                                            <h3>Reliable Source</h3>
                                            <p>Etiam risus neque, volutpat vel laoreet a, finibus volutpat non</p>
                                        </div>
                                        <!--abt-col end-->
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="abt-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                                            <img src="assets/img/icon9.png" alt="">
                                            <h3>Student Support Service</h3>
                                            <p>Mauris nec mi fequis ugiat, cursus tortor nec, pharetra tellus</p>
                                        </div>
                                        <!--abt-col end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--about-us-section end-->
                <section class="classes-section">
                    <div class="container">
                        <div class="sec-title">
                            <h2>Some of Our <?php echo $word; ?></h2>
                            <p>Check out the latest updates</p>
                        </div>
                        <!--sec-title end-->
                        <div class="classes-sec">
                            <div class="row classes-carousel">
                                <?php 
                                    // if ($_GET['paper'] == 1) {
                                    //     $query = "SELECT * FROM `questions` where paperID = 1 ORDER BY id desc limit 0,8";
                                    // } else if ($_GET['paper'] == 2) {
                                    //     $query = "SELECT * FROM `questions` where paperID = 2 ORDER BY id desc limit 0,8";
                                    // } 
                                    $query = "SELECT * FROM `questions` where paperID = '$wordID' ORDER BY id desc limit 0,4";
                                    $result = mysqli_query($conn, $query);
                                    if (!$result) {
                                        die("Error in Query<br>".mysqli_error($conn));
                                    }
                                    while ($rows = mysqli_fetch_assoc($result)) {
                                        $id = $rows['id'];
                                        $id = htmlentities($id);
                                        $course_name = $rows['course_name'];
                                        $course_name = htmlentities($course_name);
                                        $date_created = $rows['date_created'];
                                        $levelID = $rows['levelID'];
                                        $levelID = htmlentities($levelID);
                                        $departmentID = $rows['departmentID'];
                                        $departmentID = htmlentities($departmentID);
                                        $author = $rows['posted_by'];
                                        $author = htmlentities($author);
                                        // $fulltime = $rows['fulltime'];
                                        // $fulltime = htmlentities($fulltime);
                                        $year = $rows['year'];
                                        $year = htmlentities($year);
                                        $pdf = $rows['pdf'];
                                        $pdf = htmlentities($pdf);
                                        $image = $rows['image'];
                                        $image = htmlentities($image);
                                        $course_code = $rows['course_code'];
                                        $course_code = htmlentities($course_code);
                                    
                                ?>
                                <div class="col-lg-4 col-md-3 col-sm-2">
                                    <div class="classes-col wow fadeInUp" data-wow-duration="1000ms">
                                        <a href="backend/read.php?pdf=<?php echo $pdf; ?>" title="" class="crt-btn" >
                                            <div class="class-thumb">
                                                <!-- <img style="width: 40px;" src="assets/img/play.png" alt=""> -->
                                                <img src="admin/pdf_images/<?php echo $image;?>" alt="" class="img-fluid img-thumbnail">
                                            </div>
                                        </a>
                                        <div class="class-info">
                                            <h3>
                                                <a href="#" title=""><?php echo $course_name; ?></a>
                                            </h3>
                                            <h3>
                                                <a href="#" title=""><?php echo $course_code; ?></a>
                                            </h3>
                                            <span style="display:block; margin-bottom: -2px" >
                                            <?php 
                                                    $dquery = "SELECT name FROM `dept` where id='$departmentID'";
                                                    $dresult = mysqli_query($conn, $dquery);
                                                    while ($row = $dresult->fetch_assoc()) {
                                                        echo $row['name']."<br>";
                                                    }
                                                ?>
                                            </span>       
                                            <span style="display:block;">
                                            <?php 
                                                $dquery = "SELECT name FROM `level` where id='$levelID'";
                                                $dresult = mysqli_query($conn, $dquery);
                                                while ($row = $dresult->fetch_assoc()) {
                                                    echo $row['name']." Level  <br>";
                                                }
                                                ?>
                                            </span>
                                            <div class="d-flex flex-wrap align-items-center">
                                                <div class="posted-by">
                                                    <a href="#" title=""><?php echo $author; ?></a>
                                                </div>
                                                <strong class="price"><?php echo $year; ?></strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                    }
                                ?>
                            </div>
                        </div>
                        <!--classes-sec end-->
                    </div>
                </section>
                <!--classes-section end-->
                <section class="course-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="find-course">
                                    <div class="sec-title">
                                        <h2>Find Your Department</h2>
                                        <p>ullam fringilla ipsum sed enim scelerisque, ac porttitor libero egestas. Donec iaculis nisi eget bibendum efficitur. Lorem ipsum dolor sit</p>
                                    </div>
                                    <!--sec-title end-->
                                    <div class="course-img">
                                        <img src="assets/img/course-img.png" alt="">
                                    </div>
                                    <!--course-img end-->
                                </div>
                                <!--find-course end-->
                            </div>
                            <div class="col-lg-6">
                                <div class="courses-list">
                                    <?php 
                                        $deptquery = "SELECT * FROM `dept` ORDER BY id desc";
                                        $deptresult = mysqli_query($conn, $deptquery);
                                        if (!$deptresult) {
                                            die("Error in Query<br>".mysqli_error($conn));
                                        }
                                        while ($rows = mysqli_fetch_assoc($deptresult)) {
                                            $id = $rows['id'];
                                            $id = htmlentities($id);
                                            $name = $rows['name'];
                                            $name = htmlentities($name);
                                            $date_created = $rows['date created'];
                                    
                                    ?>
                                    <div class="course-card wow fadeInLeft" data-wow-duration="1000ms">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <ul class="course-meta"></ul>

                                            <span>View <?php echo $word; ?></span>
                                        </div>
                                        <h3>
                                            <a href="event-single.html" title=""><?php echo $name; ?></a>
                                        </h3>
                                        <div class="d-flex flex-wrap">
                                            <div class="posted-by">
                                                <a href="#" title="">Posted by Admin</a>
                                            </div>
                                            <span class="locat">
                                                Count of PDF
                                            </span>
                                        </div>
                                    </div>
                                    <?php 
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--course-section end-->
                <section class="blog-section">
                    <div class="container">
                        <div class="section-title text-center">
                            <h2>Recent News</h2>
                            <p>Nam mattis felis id sodales rutrum. Nulla ornare tristique mauris, a laoreet erat ornare sit amet. Nulla sagittis faucibus lacusMorbi lorem sem, aliquet</p>
                        </div>
                        <!--section-title end-->
                        <div class="blog-posts">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog-post">
                                        <div class="blog-thumbnail">
                                            <img src="assets/img/blog1.jpg" alt="" class="w-100">
                                            <span class="category">English</span>
                                        </div>
                                        <div class="blog-info">
                                            <ul class="meta">
                                                <li>
                                                    <a href="#" title="">17/09/2020</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">by Admin</a>
                                                </li>
                                                <li>
                                                    <img src="assets/img/icon13.png" alt="">
                                                    <a href="#" title="">Teachers,</a>
                                                    <a href="#" title=""> School</a>
                                                </li>
                                            </ul>
                                            <h3>
                                                <a href="post.html" title="">Campus clean workshop</a>
                                            </h3>
                                            <p>Nam mattis felis id sodales rutrum. Nulla ornare tristique mauris, a laoreet erat ornare sit amet</p>
                                            <a href="post.html" title="" class="read-more">Read
                                                <i class="fa fa-long-arrow-alt-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!--blog-post end-->
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog-post">
                                        <div class="blog-thumbnail">
                                            <img src="assets/img/blog2.jpg" alt="" class="w-100">
                                            <span class="category">English</span>
                                        </div>
                                        <div class="blog-info">
                                            <ul class="meta">
                                                <li>
                                                    <a href="#" title="">17/09/2020</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">by Admin</a>
                                                </li>
                                                <li>
                                                    <img src="assets/img/icon13.png" alt="">
                                                    <a href="#" title="">Teachers,</a>
                                                    <a href="#" title=""> School</a>
                                                </li>
                                            </ul>
                                            <h3>
                                                <a href="post.html" title="">Campus clean workshop</a>
                                            </h3>
                                            <p>Nam mattis felis id sodales rutrum. Nulla ornare tristique mauris, a laoreet erat ornare sit amet</p>
                                            <a href="post.html" title="" class="read-more">Read
                                                <i class="fa fa-long-arrow-alt-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!--blog-post end-->
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog-post">
                                        <div class="blog-thumbnail">
                                            <img src="assets/img/blog3.jpg" alt="" class="w-100">
                                            <span class="category">English</span>
                                        </div>
                                        <div class="blog-info">
                                            <ul class="meta">
                                                <li>
                                                    <a href="#" title="">17/09/2020</a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">by Admin</a>
                                                </li>
                                                <li>
                                                    <img src="assets/img/icon13.png" alt="">
                                                    <a href="#" title="">Teachers,</a>
                                                    <a href="#" title=""> School</a>
                                                </li>
                                            </ul>
                                            <h3>
                                                <a href="post.html" title="">Campus clean workshop</a>
                                            </h3>
                                            <p>Nam mattis felis id sodales rutrum. Nulla ornare tristique mauris, a laoreet erat ornare sit amet</p>
                                            <a href="post.html" title="" class="read-more">Read
                                                <i class="fa fa-long-arrow-alt-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!--blog-post end-->
                                </div>
                            </div>
                        </div>
                        <!--blog-posts end-->
                    </div>
                </section>

                <?php 
                    include('include/join_us.php')
                ?>

                <?php 
                include 'include/footer.php';
                ?>
                
            <!--footer end-->
            </div>
        </div>
        <!-- <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous">
        </script>
        <script type="text/javascript"src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

        <script src="assets/js/bundle.min.js"></script>
        <script src="assets/js/contactEmail.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script> -->
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="assets/js/style.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <script src="assets/js/style2.js"></script>
        <script type="text/javascript">

                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-36251023-1']);
                _gaq.push(['_setDomainName', 'jqueryscript.net']);
                _gaq.push(['_trackPageview']);

                (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                })();
                                </script>
                                <script>
            try {
                fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
                return true;
                }).catch(function(e) {
                var carbonScript = document.createElement("script");
                carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
                carbonScript.id = "_carbonads_js";
                document.getElementById("carbon-block").appendChild(carbonScript);
                });
            } catch (error) {
                console.log(error);
            }
        </script>
    </body>
</html>
