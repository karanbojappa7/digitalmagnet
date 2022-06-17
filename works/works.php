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

    <nav class="navbar navbar-expand-md  fixed-top nav">
        <div class="navbar-brand col-sm-3 offset-lg-1 ">
            <img src="../style_sheets/pictures/logo.png" width="60%" class="nodrag logoxs">

            <div class="col-1 offset-10 d-block d-sm-none navtogler  navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

        </div>


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
