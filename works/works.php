<!DOCTYPE html>
<html lang="en">

<head>
    <title>Digital Magnet Media</title>
    <link rel="icon" href="style_sheets/pictures/logo.png" type="image/icon type">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e94d846b38.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--   bootstrap CDN,s  -->
    <!--   google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300&display=swap" rel="stylesheet">

    <!--    files   -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-bez@1.0.11/src/jquery.bez.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <link rel="stylesheet" href="../style_sheets/style.css">

</head>

<body>

    <!-- ..start..   -->

    <nav class="navbar ">
        <div id="mainbox" onclick="openFunction()">&#9776;</div>
        <div id="menu" class="sidemenu">
            <a href="#" id="link1" id="link1" class="tsb fon1">Home</a>
            <a href="#" id="link2" id="link2" class="tsb fon1">About</a>
            <a href="#" id="link3" id="link3" class="tsb fon1">Services</a>
            <a href="#" id="link4" id="link4" class="tsb fon1">Clients</a>
            <a href="#" id="link5" id="link5" class="tsb fon1">Contact</a>
            <div class="col-sm-10 mx-auto pt-5 m-5">
                <img src="style_sheets/pictures/logolgwhite.png" width="100%">
            </div>
            <div class="closebtn" onclick="closeFunction()">&times;</div>
        </div>
    </nav>


    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <div class="col-3 offset-md-2 offset-lg-4 offset-xl-5">
            <ul class="navbar-nav fon1">
                <li class="nav-item">
                    <div class="nav-link" id="link1">Home</div>
                </li>
                <li class="nav-item">
                    <div class="nav-link" id="link2">About</div>
                </li>
                <li class="nav-item">
                    <div class="nav-link" id="link3">Services</div>
                </li>
                <li class="nav-item">
                    <div class="nav-link" id="link4">Clients</div>
                </li>
                <li class="nav-item">
                    <div class="nav-link" id="link5">Contact</div>
                </li>
            </ul>
        </div>
    </div>
    </nav>



    <section class="gallery">
        <div class="container">
            <div class="row">
                <div class="gallery-filter">
                    <span class="filter-item active" data-filter="all">All</span>
                    <span class="filter-item" data-filter="Instagram">Instagram</span>
                    <span class="filter-item" data-filter="Facebook">Facebook</span>
                    <span class="filter-item" data-filter="Youtube">Youtube</span>
                </div>
            </div>
            <div class="row">
                <?php 
$db = mysqli_connect("localhost","root","","dmm");
mysqli_select_db($db,'dmm');
$query = "select * from yt";
$queryform = mysqli_query($db,$query);
if(mysqli_num_rows($queryform) > 0){
while($result= mysqli_fetch_array($queryform)){
?>

                <div class="gallery-item mt-2 <?php echo $result['category']?> ">
                    <div class="card text-center bg-light">
                        <iframe src="https://www.youtube.com/embed/<?php echo $result['links']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h4 class="card-title pt-1"><?php echo $result['head'] ?></h4>
                        <p class="card-text pb-1"><?php echo $result['description'] ?></p>
                    </div>
                </div>
                <?php
}
}
?>
            </div>
        </div>
    </section>

    <footer>
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-sm-4 pt-3 pb-3 order-3 order-sm-1 order-lg-1 ">
                    <img src="../style_sheets/pictures/logowhite.png" width="100%">

                    <div class="pt-2 text-center justify-content-center soc ">
                        <a href="mailto:@gmail.com?&subject=Hello"><i class="bsw fa fa-envelope mailicon" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.facebook.com/Digitalmagentmedia/" target="_blank"><i class="fa fa-facebook-square fbicon" aria-hidden="true"></i>
                        </a>
                        <a href="https://web.whatsapp.com/send?phone=+91 7259455013&text&app_absent=0" target="_blank"> <i class="fa fa-whatsapp wappicon" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/digitalmagnet.media/" target="_blank"><i class="fa fa-instagram insicon" aria-hidden="true"></i>
                        </a>
                        <a href="" target="_blank"><i class="fa fa-youtube-play yticon" aria-hidden="true"></i>
                        </a>

                    </div>

                </div>


                <div class="col-sm-4 pt-4 text-center ulsec fon1 bgc7 order-1">
                    <span class="bgc10 usel d-block">Usefull links:
                    </span>
                    <div class="fon1 ">
                        <br>
                        <div class="fon3 foottxt row mx-auto text-center ">
                            <div id="flink1" class="folink">Home</div>
                            <div id="flink2" class="folink">About</div>
                            <div id="flink3" class="folink">Services</div>
                            <div id="flink4" class="folink">Clients</div>
                            <div id="flink4" class="folink">Works</div>
                            <div id="flink5" class="folink">Contact</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 order-2">
                    <div class="pl-5 pr-5 pt-3 pb-3 map col-sm-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d31104.522779869072!2d77.515258072429!3d12.96767028619905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sDigital%20Magnet%20Media%20%2COld%20Annaporneshwari%20Nagar%20Police%20station%20Building%2C%20Papreddy%20Palya%2C%202nd%20Stage%2C%20Naagarabhaavi%2C%20Bengaluru%2C%20Karnataka%20560072.!5e0!3m2!1sen!2sin!4v1653868074360!5m2!1sen!2sin" width="100%;" style="box-shadow: 0 10px 20px -20px rgba(255,255,255, 0.5); border: .01px solid var(--c10);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>
                <div class="cpy mx-auto order-last pb-2">

                    <div class="zi text-center fon3 col-sm-12">
                        ©Reach On Digital. All Rights Reserved
                    </div>
                    <div class="bgc5 fon1 text-center loc pt-1 ">Handcrafted by<a href="http://bbk.epizy.com/" target="_blank" class="p-2 me"><span class="me bgc5">Life_On_Code</a><span class="me heart"><img src="../style_sheets/pictures/heart.png" class="sm-1" width="15px"></span> </span></div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        const filterContainer = document.querySelector(".gallery-filter"),
            galleryItems = document.querySelectorAll(".gallery-item");

        filterContainer.addEventListener("click", (event) => {
            if (event.target.classList.contains("filter-item")) {
                // deactivate existing active 'filter-item'
                filterContainer.querySelector(".active").classList.remove("active");
                // activate new 'filter-item'
                event.target.classList.add("active");
                const filterValue = event.target.getAttribute("data-filter");
                galleryItems.forEach((item) => {
                    if (item.classList.contains(filterValue) || filterValue === 'all') {
                        item.classList.remove("hide");
                        item.classList.add("show");
                    } else {
                        item.classList.remove("show");
                        item.classList.add("hide");
                    }
                });
            }
        });

    </script>
</body>

</html>
