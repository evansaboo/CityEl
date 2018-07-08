<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide " src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
            <div class="container">
                <div class="carousel-caption " >
                    <h1>Välkommen till...</h1>

                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
        </div>
        <div class="item">
            <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->

<div class="container">

    <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
    </div>
    <div class="row text-center text-lg-left">

        <div class="col-md-3 col-sm-4 col-xs-6 top-img">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="http://placehold.it/300x450" alt="">
            </a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 top-img">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="http://placehold.it/300x450" alt="">
            </a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 top-img">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="http://placehold.it/300x450" alt="">
            </a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 top-img">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="http://placehold.it/300x450" alt="">
            </a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 top-img">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="http://placehold.it/300x450" alt="">
            </a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 top-img">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="http://placehold.it/300x450" alt="">
            </a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 top-img">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="http://placehold.it/300x450" alt="">
            </a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 top-img">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="http://placehold.it/300x450" alt="">
            </a>
        </div>

    </div>
</div><!-- /.container -->
<style>
    .top-img{
        padding-top: 20px;
    }

    /* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

    /* Carousel base class */
    .carousel {
        height: 500px;
        margin-bottom: 60px;
    }
    /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
        z-index: 10;
    }

    /* Declare heights because of positioning of img element */
    .carousel .item {
        height: 500px;
        background-color: #777;
    }
    .carousel-inner > .item > img {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 100%;
        height: 500px;
    }
    @media (min-width: 768px) {

        /* Bump up size of carousel content */
        .carousel-caption p {
            margin-bottom: 20px;
            font-size: 21px;
            line-height: 1.4;
        }


    }
    .vertical{
        margin-top:200px;
    }
    .carousel-caption{
        bottom: 40%;
    }
</style>
