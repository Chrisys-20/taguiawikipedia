<?php include "./layout/head.php" ?>


<!-- Page Caption -->
<h5 class="underline-title">Gallerie</h5>
<div class="spacer-30"></div>

<!-- PORTFOLIO SECTION
        ================================================== -->

<section class="portfolio" id="portfolio">
  <div class="spacer-15"></div>
  <div class="section-head">
    <!-- Filter -->
    <div class="portfolio_filter">
      <ul>
        <li><a class="select-cat" data-filter="*" href="#">Tout</a></li>
        <li><a data-filter=".events" href="#">Evènements</a></li>
        <li><a data-filter=".drones" href="#">Drones</a></li>
        <li><a data-filter=".other" href="#">Autres</a></li>
      </ul>
    </div>
    <div class="spacer-60"></div>
  </div>
  <div class="row masonry">

    <!-- portfolio item -->
    <a href="#" class="col-xl-4 col-lg-6 col-md-6 grid-item events">
      <div class="work-holder scale-animation" data-duration="2" data-delay=".3">
        <figure class="portfolio-item">
          <img src="images/events/sortie_livre.png" alt="">
          <figcaption>
            <div class="outer">
              <div class="inner">
                <span>Evènements</span>
                <h3 class="title">Sortie du livre</h3>
              </div>
            </div>
          </figcaption>
        </figure>
      </div>
    </a>
    <!-- portfolio item -->
    <a href="#" class="col-xl-4 col-lg-6 col-md-6 grid-item drones">
      <div class="work-holder scale-animation" data-delay=".4" data-duration="2">
        <figure class="portfolio-item">
          <img src="images/drones/drone3.jpg" alt="">
          <figcaption>
            <div class="outer">
              <div class="inner">
                <span>Drones </span>
                <h3 class="title">Fantôme </h3>
              </div>
            </div>
          </figcaption>
        </figure>
      </div>
    </a>
    <!--  VIDEO portfolio item -->
    <a href="https://www.youtube.com/watch?v=o82gAQdfM6I&pp=ygUKdGFndXNkcm9uZQ%3D%3D" target="new" class="col-xl-4 col-lg-6 col-md-6 grid-item grid-video other">
      <div class="work-holder scale-animation" data-delay=".5" data-duration="2">
        <div class="video-caption">
          <div class="outer">
            <div class="inner">
              <span>Autres </span>
              <h3 class="title">Spot publicitaire</h3>
            </div>
          </div>
        </div>
        <div class="video-wrapper four-three">
          <video playsinline loop="" muted="">
            <source src="#" type="video/mp4">
          </video>
        </div>
        <div class="video-image" style="background-image: url(images/drones/drone3.jpg);"></div>
      </div>
    </a>
    <!-- portfolio item -->
    <a href="#" class="col-xl-4 col-lg-6 col-md-6 grid-item drones">
      <div class="work-holder scale-animation" data-delay=".9" data-duration="2">
        <figure class="portfolio-item">
          <img src="images/drones/drone11.jpg" alt="">
          <figcaption>
            <div class="outer">
              <div class="inner">
                <span>Drones </span>
                <h3 class="title">Fantôme</h3>
              </div>
            </div>
          </figcaption>
        </figure>
      </div>
    </a>
    <!-- portfolio item -->
    <a href="#" class="col-xl-4 col-lg-6 col-md-6 grid-item events">
      <div class="work-holder scale-animation" data-delay=".6" data-duration="2">
        <figure class="portfolio-item">
          <img src="images/events/congres.png" alt="">
          <figcaption>
            <div class="outer">
              <div class="inner">
                <span>Evènements</span>
                <h3 class="title">Cérémonie de présentation</h3>
              </div>
            </div>
          </figcaption>
        </figure>
      </div>
    </a>
    <!-- portfolio item -->
    <a href="#" class="col-xl-4 col-lg-6 col-md-6 grid-item drones">
      <div class="work-holder scale-animation" data-delay=".9" data-duration="2">
        <figure class="portfolio-item">
          <img src="images/drones/drone14.jpg" alt="">
          <figcaption>
            <div class="outer">
              <div class="inner">
                <span>Drones</span>
                <h3 class="title">Iconnu</h3>
              </div>
            </div>
          </figcaption>
        </figure>
      </div>
    </a>
  </div>
</section>



</div> <!-- page wrapper end -->
</div><!-- container -->
<!-- FOOTER -->
<?php include "./layout/footer.php" ?>
</main>
</div>
</div>
</div>
<!-- <div class="bg-image" style="background-image: url(images/bg.jpg);"></div> -->
<div class="bg-image" style="background-image: url(images/drones/drone1.jpg);"></div>


<!-- Javascripts -->
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3gqyHylICdokv-P1q2WtRihCFhiFnm_U&sensor=false"></script>
<script src="js/map.js"></script>
<script src="js/main.js"></script>

</body>

</html>