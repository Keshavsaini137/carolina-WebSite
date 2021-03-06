<?php
$title = 'Home';
     include 'templates/header.php';
     include 'templates/navigation.php';
?>


<div class="container">
  <div id="main-slider" class="carousel slide mt-4" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#main-slider" data-slide-to="0" class="active"></li>
      <li data-target="#main-slider" data-slide-to="1"></li>
      <li data-target="#main-slider" data-slide-to="2"></li>
    </ol><!--.carousel-indicators-->

    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img src="img/slide_01.jpg" class="d-block img-fluid" alt="our facilities">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-uppercase">Brand new facilities</h3>
        </div>
      </div><!--.carousel-item-->

      <div class="carousel-item">
        <img src="img/slide_02.jpg" class="d-block img-fluid" alt="our facilities">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-uppercase">Learn about our Services</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/slide_03.jpg" class="d-block img-fluid" alt="our facilities">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-uppercase">New website 2 for 1 in all services</h3>
        </div>
      </div>
    </div><!--.carousel-inner-->

    <a href="#main-slider" class="carousel-control-prev" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a href="#main-slider" class="carousel-control-next" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<section class="new-website py-5">
  <h2 class="text-center text-uppercase"><span class="text-lowercase">Welcome to our new</span> website</h2>
  <p class="text-center mt-4">Feel like new with our massages and professional <br> therapsts</p>

</section>

<div class="container pb-5">
  <div class="row">
    <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
      <div class="image-links">
        <img class="img-fluid" src="img/service_01.jpg">
        <div class="row no-gutters">
          <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
            <h3 class="text-center text-uppercase"><span class="text-lowercase">learn more</span>About Us</h3>
            <a href="#" class="btn btn-success text-uppercase btn-block mt-4 py-3">read more</a>
          </div>
        </div>
      </div>
    </div><!--.col-md-4-->
    <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
      <div class="image-links">
        <img class="img-fluid" src="img/service_02.jpg">
        <div class="row no-gutters">
          <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
            <h3 class="text-center text-uppercase"><span class="text-lowercase">about our</span>services</h3>
            <a href="#" class="btn btn-success text-uppercase btn-block mt-4 py-3">read more</a>
          </div>
        </div>
      </div>
    </div><!--.col-md-4-->
    <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
      <div class="image-links">
        <img class="img-fluid" src="img/service_03.jpg">
        <div class="row no-gutters">
          <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
            <h3 class="text-center text-uppercase"><span class="text-lowercase">visit our</span>store</h3>
            <a href="#" class="btn btn-success text-uppercase btn-block mt-4 py-3">read more</a>
          </div>
        </div>
      </div>
    </div><!--.col-md-4-->
  </div>
</div>

<div class="business-hours">
  <div class="container">
    <div class="row">
      <div class="col-md-6 py-5">
        <h2 class="text-center text-uppercase">Business Hours</h2>
        <p class="text-center mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore sit reprehenderit illum architecto incidunt beatae dicta nam distinctio fuga, nobis.</p>
        <table class="table table-hover text-center mt-5">
          <thead class="table-danger">
            <tr>
              <th class="text-center">Day</th>
              <th class="text-center">From</th>
              <th class="text-center">To</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Monday</td>
              <td>09:00</td>
              <td>19:00</td>
            </tr>
            <tr>
              <td>Tuesday</td>
              <td>09:00</td>
              <td>19:00</td>
            </tr>
            <tr>
              <td>Wednesday</td>
              <td>09:00</td>
              <td>19:00</td>
            </tr>
            <tr>
              <td>Thursday</td>
              <td>09:00</td>
              <td>19:00</td>
            </tr>
            <tr>
              <td>Friday</td>
              <td>09:00</td>
              <td>19:00</td>
            </tr>
            <tr>
              <td>Saturday</td>
              <td>09:00</td>
              <td>19:00</td>
            </tr>
            <tr>
              <td>Sunday</td>
              <td>Closed</td>
              <td>Closed</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-6 bg-hours">

      </div>
    </div>
  </div>
</div>

<div class="container products py-5">
  <h2 class="text-center text-uppercase"><span class="text-lowercase">checkout our</span> products</h2>

  <div class="row py-4">
    <div class="col-6 col-md-3 mb-5 mb-md-0">
      <div class="card">
        <a href="#">
          <img src="img/product_thumb_01.jpg" class="card-img-top img-fluid">
          <div class="card-block">
            <h3 class="card-title text-center text-uppercase mb-0">Product 1</h3>
            <p class="card-text text-uppercase px-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio id dolorem reiciendis, repudiandae ea sunt.</p>
            <p class="price text-center mb-0">$ 25</p>
          </div>
        </a>
      </div><!--.card-->
    </div><!--col-6 col-md-3-->
    <div class="col-6 col-md-3">
      <div class="card">
        <a href="#">
          <img src="img/product_thumb_02.jpg" class="card-img-top img-fluid">
          <div class="card-block">
            <h3 class="card-title text-center text-uppercase mb-0">Product 2</h3>
            <p class="card-text text-uppercase px-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio id dolorem reiciendis, repudiandae ea sunt.</p>
            <p class="price text-center mb-0">$ 25</p>
          </div>
        </a>
      </div><!--.card-->
    </div><!--col-6 col-md-3-->
    <div class="col-6 col-md-3">
      <div class="card">
        <a href="#">
          <img src="img/product_thumb_03.jpg" class="card-img-top img-fluid">
          <div class="card-block">
            <h3 class="card-title text-center text-uppercase mb-0">Product 3</h3>
            <p class="card-text text-uppercase px-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio id dolorem reiciendis, repudiandae ea sunt.</p>
            <p class="price text-center mb-0">$ 25</p>
          </div>
        </a>
      </div><!--.card-->
    </div><!--col-6 col-md-3-->
    <div class="col-6 col-md-3">
      <div class="card">
        <a href="#">
          <img src="img/product_thumb_04.jpg" class="card-img-top img-fluid">
          <div class="card-block">
            <h3 class="card-title text-center text-uppercase mb-0">Product 4</h3>
            <p class="card-text text-uppercase px-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio id dolorem reiciendis, repudiandae ea sunt.</p>
            <p class="price text-center mb-0">$ 25</p>
          </div>
        </a>
      </div><!--.card-->
    </div><!--col-6 col-md-3-->
  </div><!--.row-->
</div><!--.container-->

<div class="appointment container-fluid py-5">
  <div class="row">
    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 py-3 text-center">
      <h3 class="text-uppercase">make an appionment</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet asperiores quo excepturi repellendus, voluptatem fugit rem veritatis magni cumque similique.</p>
      <a href="#" class="btn btn-primary btn-lg mt-3 text-uppercase">read more</a>
    </div><!--.col-12-->
  </div><!--.row-->
</div><!--.appointnment-->


<?php
     include 'templates/footer.php';

?>
