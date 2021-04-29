<?php
include 'header.php';
 ?>
<!--Contact-->
<div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-12">
                <h1>Contact</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contactImg">
                    <img src="images/contact1.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                </div>

                <div class="mb-3">
                    <input type="number" class="form-control" id="exampleFormControlInput2" placeholder="Phone Number">
                </div>

                <div class="mb-3">
                    <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="Email">
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Note" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea"></label>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="seeMoreBtn">
                            <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include 'footer.php';
   ?>