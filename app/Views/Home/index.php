<div class="container main ">
    <!-- Jumbotron Header -->
    <header class="jumbotron my-4 bg-info text-light">
        <h1 class="display-3">A Warm Welcome!</h1>
        <p class="lead">This is a website for cat lovers.
            If you already have a cat, we have plenty of articles
            that will help you to make your cat's life more comfortable. If you still
            do not own any cat, we have contacts of biggest cat shelters in Latvia.
            Find and rescue the purrest kitty near your town.</p>
        <a href="index.php?page=about-us" class="btn btn-light btn-lg">Shelter contacts</a>
    </header>

    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/cat1_carousel.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/cat2_carousel.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/cat3_carousel.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
    <div class="recent mt-3 ml-3">
        <p>3 most recent articles</p>
    </div>
    <div class="container-fluid">
        <div class="card-group">
            <div class="card mb-3" style="background-image: url('images/article1-cat.jpg');">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"> <a href="index.php?page=article&id=1" class="text-white">Surprising sign your cat actually likes you</a>
                            </h5>
                            <p class="card-text">Click to open</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="background-image: url('images/article2-cat.jpg');">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"> <a href="index.php?page=article&id=2" class="text-white">The Record For World’s Biggest Cat</a></h5>
                            <p class="card-text">Click to open</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="background-image: url('images/article3-cat.jpeg');">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"> <a href="index.php?page=article&id=3" class="text-white">How To Choose A Great Cat Sitter
                                </a></h5>
                            <p class="card-text">Click to open</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
                        <form action="subscribe.php" method="post">
                            <div class="input-group">

                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                                <span class="input-group-btn">
                                    <button class="btn" type="submit">Subscribe Now</button>
                                </span>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>