<?php include "./layout/head.php" ?>


<section class="contact">
  <!-- Page Caption -->
  <h1 class="underline-title">Contacts</h1>
  <div class="spacer-60"></div>
  <div class="row">
    <!-- Map -->
    <!-- <div id="map" class="map scale-animation" data-delay="1" data-duration="2">
                  </div> -->


    <div class="spacer-60"></div>
    <!-- contact info -->
    <div class="col-xl-5 scale-animation" data-duration="2">
      <div class="contact-info email">
        <p class="little-p info-title">Ecrivez Moi</p>
        <a href="mailto:hello@mosbycreative.com">infos@tagusdrone.com</a>
      </div>
      <div class="contact-info address">
        <p class="little-p info-title">Mes bureaux</p>
        <p>Cameroon, Yaoundé, Biyem-assi</p>
      </div>
      <div class="contact-info social">
        <p class="little-p info-title">Réseaux Sociaux</p>
        <a href="#">Linkedin</a>
        <a href="#">Youtube</a>
        <!-- <a href="#">Facebook.</a>
                      <a href="#">Twitter.</a>
                      <a href="#">Behance.</a>
                      <a href="#">Dribbble.</a>
                      <a href="#">Instagram.</a> -->
      </div>
    </div>
    <div class="col-xl-6 offset-xl-1 scale-animation" data-delay=".2" data-duration="2">
      <!-- form -->
      <div id="contact-formular">
        <p class="little-p info-title">Ou Remplir ce formulaire</p>
        <div class="spacer-10"></div>
        <div id="message"></div>
        <form method="post" name="contactform" action="./send_mail.php" id="contactform" class="row" autocomplete="off">
          <!-- name -->
          <div class="col-xl-12 contact-bar">
            <input type="text" style="display:none" />
            <input class="inp" name="name" type="text" placeholder="Nom" id="name">
          </div>
          <!-- email -->
          <div class="col-xl-12 contact-bar">
            <input class="inp" name="email" type="text" placeholder="Email" id="email">
          </div>
          <!-- phone -->
          <div class="col-xl-12 contact-bar">
            <input class="inp" name="phone" type="text" placeholder="Téléphone" id="phone">
          </div>
          <!-- company -->
          <div class="col-xl-12 contact-bar">
            <input class="inp" name="company" type="text" placeholder="Entreprise" id="company">
          </div>
          <!-- about project -->
          <div class="col-xl-12 contact-bar">
            <textarea class="inp" name="comments" id="comments" rows="3" placeholder="Quel est votre intérêt?"></textarea>
          </div>
          <!-- button -->
          <div class="form-btn col-xl-12 contact-bar">
            <input class="site-btn" type="submit" value="Envoyer">
          </div>
        </form>
      </div>
    </div>
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