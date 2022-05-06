<?php include_once 'templates/header.php'; ?>

<div class="container mt-2" style="background-color: white">
    <nav aria-label="breadcrumb" style="padding-top: 10px"">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">e)(o</a></li>
        <li class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-house"></i> Home</li>
    </ol>
    </nav>
    <hr>

    <img class="img-fluid mb-2" src="img/background.jpg" alt="">

    <h4 class="mt-5"><i class="fa-solid fa-caret-right mx-2" style="color: #6C757D;"></i> <i class="fa-solid fa-compact-disc"></i>New Albums</h4>
    <hr>
    <div class="row">
        <?php
            $sql_new = mysqli_query($con, "SELECT * FROM albums");
            for($i = 0; $i <3; $i++):
                $new_result = mysqli_fetch_assoc($sql_new)
        ?>

        <div class="col-sm-3 mb-3">
            <div class="card">
                <img src="../admin/img/<?php echo $new_result['alb_img'] ?>" alt="" class="card-img">
                <div class="card-img-overlay text-white d-flex flex-column justify-content-center ch-back">
                    <h4><a href="home.php?id=<?php echo $new_result['alb_id'];?>" class="text-white"> <?php echo $new_result['alb_name'] ?> </a></h4>
                    <h6><?php echo $new_result['alb_artist'] ?></h6>
                    <div class="link d-flex">
                        <a href="" class="card-link text-white" style="text-decoration:none;"><i class="fa-solid fa-headphones"></i> / 0</a>
                        <a href="" class="card-link text-white" style="text-decoration:none;"><i class="fa-solid fa-heart"></i> / 0</a>
                    </div>
                </div>
            </div>
        </div>

        <?php endfor ?>

        <div class="col-sm-3 mb-3">
            <div class="card">
                <img src="img/seemore.jpg" alt="" class="card-img">
                <div class="card-img-overlay text-white d-flex flex-column justify-content-center ch-back">
                    <h4><a href="albums.php" class="text-white" style="text-decoration:none;">See more <i class="fa-solid fa-chevron-right"></i></a></h4>
                </div>
            </div>
        </div>
        
    </div>


    <h4 class="mt-5"><i class="fa-solid fa-caret-right mx-2" style="color: #6C757D;"></i> <i class="fa-solid fa-compact-disc"></i> Regular Album</h4>
    <hr>
    <div class="row">

        <?php
            $sql_regular = mysqli_query($con, "SELECT * FROM albums WHERE alb_type='regular'");
            for($i = 0; $i < 3; $i++):
                $regular_result = mysqli_fetch_assoc($sql_regular)
        ?>

        <div class="col-sm-3 mb-3">
            <div class="card">
                <img src="../admin/img/<?php echo $regular_result['alb_img'] ?>" alt="" class="card-img">
                <div class="card-img-overlay text-white d-flex flex-column justify-content-center ch-back">
                    <h4><a href="" class="text-white"> <?php echo $regular_result['alb_name'] ?> </a></h4>
                    <h6><?php echo $regular_result['alb_artist'] ?></h6>
                    <div class="link d-flex">
                        <a href="" class="card-link text-white" style="text-decoration:none;"><i class="fa-solid fa-headphones"></i> / 0</a>
                        <a href="" class="card-link text-white" style="text-decoration:none;"><i class="fa-solid fa-heart"></i> / 0</a>
                    </div>
                </div>
            </div>
        </div>

        <?php endfor ?>

        <div class="col-sm-3 mb-3">
            <div class="card">
                <img src="img/seemore.jpg" alt="" class="card-img">
                <div class="card-img-overlay text-white d-flex flex-column justify-content-center ch-back">
                    <h4><a href="albums.php" class="text-white" style="text-decoration:none;">See more <i class="fa-solid fa-chevron-right"></i></a></h4>
                </div>
            </div>
        </div>

    </div>

    
</div>



<hr class="my-4">

<div class="ch-jumbotron p-5 mb-5">
    <p class="lead">© EXO-L. All rights reserved</p>
    <hr class="my-3">
    <cite class="lead" title="Source Title" style="color:gray;">Let's listen to music and chill with us!</cite>
    <div class="ml-auto float-right mt-3">
        <p>Contact us:</p>
        <div class="m-2" style="display: inline"><i class="fa-brands fa-facebook-square fa-2x "></i></div>
        <div class="m-2" style="display: inline"><i class="fa-brands fa-instagram fa-2x"></i></div>
        <div class="m-2" style="display: inline"><i class="fa-brands fa-youtube fa-2x"></i></div>
        <div class="m-2" style="display: inline"><i class="fa-brands fa-twitter fa-2x "></i></div>
        <div class="m-2" style="display: inline"><i class="fa-brands fa-google fa-2x"></i></div>
    </div>
    <hr class="my-3">

</div>


<?php include_once 'templates/footer.php'; ?>