<?php
include 'header.php';
 ?>
<div id="slides" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
            <li data-target="#slides" data-slide-to="3"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/car0.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2">Hello</h1>
                    <h3>Wellcome to my Selfy Site</h3>
                    <button type="button" class="btn btn-outline-light btn-lg">
                        Click Me
                    </button>
                    <button type="button" class="btn btn-primary btn-lg">Get started</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./images/car1.jpg">
            </div>
            <div class="carousel-item">
                <img src="./images/car2.jpg">
            </div>
            <div class="carousel-item">
                <img src="./images/car3.jpg">
            </div>
        </div>
    </div>
<?php
include 'footer.php';
   ?>