<?php
session_start();
if (!isset($_SESSION['form_submited'])) {
    $_SESSION['form_submited'] = '';
}

 
// Define variables and initialize with empty values
$name =""; $email =""; $domaine= "";
$name_err =""; $mail_err =""; $domaine_err = "";

if (isset($_POST['form_submission'])){
    // Check if name is empty
    if(empty(trim($_POST["fullname"]))){
        $name_err = "Veuillez indiquer votre nom.";
    }
    else{
        $name = trim($_POST["email"]);
    }

// Check if mail is empty or incorrect
if(empty(trim($_POST["email"]))){
  $mail_err = "Veuillez entrer une adresse mail.";
}  elseif(!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)){
$mail_err = "Email non valide";}
else{
  $mail = trim($_POST["email"]);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
  // Check if name is empty
  if(empty(trim($_POST["domaine"]))){
      $domaine_err = "Veuillez choisir un domaine.";
  }
  else{
      $domaine = trim($_POST["domaine"]);
  }

  if(empty($name_err) && empty($mail_err) && empty($domaine_err)){

        // Multiple recipients
        $to = 'jookhafor@gmail.com';

        // Subject
        $subject = 'Candidature a sein de l\'équipe UVUE-Togo';

        // Message
        $message = '
        <html>
        <body>
            <p>Détails de la candidature</p>
            <p> <strong>Nom complet:</strong> '.$name.' </p>
            <p> <strong>Email:</strong>  '.$email.' </p>
            <p><strong> Domaine:</strong> '.$domaine.' </p>
        </body> 
        </html>
        ';

        // To send HTML mail, the Content-type header must be set
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';

        // Additional headers
        $headers[] = 'From: UVUE admin <jookhafor@gmail.com>';

        if(mail($to, $subject, $message, implode("\r\n", $headers))) {
        $_SESSION['form_submited']= true;
        header("Location: nos-actions.php");
        exit;
      }

  }

}

}
   
?>
<!doctype html>
<html lang="en">

<?php     
        include 'components/head.php'
    ?>


<body>

  <div id="pageloader">
    <div class="loader-item">
      <div class="loader">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
      </div>
    </div>
  </div>

  <?php     
        include 'components/inner_nav.php'
    ?>
  <section class="breadcrumbs-page-wrap">
    <div class="bg-fixed pos-rel breadcrumbs-page">
      <div class="container">
        <h1>Nos activités</h1>
        <nav aria-label="breadcrumb" class="breadcrumb-wrap">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Acceuil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nos activités</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>


  <main id="body-content">


    <section class="wide-tb-100 pb-0 home-blog-post-wrap">
      <div class="container">
        <div class="row pb-5">
          <div class="col-lg-7 col-md-12">
            <h1 class="heading-main">
              <small>Ce que nous faisons</small>
              Nos domaines d'actions
            </h1>
            <p>Nous Œuvrons aux côtés des communautés rurales au travers du partage des acquis techniques,
              intellectuels, culturels et moraux de nos volontaires d'horizons divers afin d’améliorer leurs conditions
              de vie socio-économiques et culturelles dans une approche de développement humain durable </p>
          </div>
        </div>
        <div class="row pb-5">
          <div class="col-md-12">
            <div class="owl-carousel owl-theme" id="home-blog-post">

              <div class="item">
                <div class="blog-post-broken">
                  <div class="post-img">
                    <a href="blog-single.html"><img src="assets/images/causes/causes_img_3.jpg" alt=""></a>
                  </div>
                  <div class="post-content">
                    <h3 class="post-title"><a href="blog-single.html">SOCIAL</a></h3>

                    <p>Nous organisons plusieurs activités à l'endroit des populations rurales et de Lomé la capitale axées sur la lutte contre le VIH/SIDA au travers des sensibilisations sur la santé sexuelle et reproductive (formation, campagne de dépistage, sensibilisation et autres) et en milieux scolaires des activités de formation et de sensibilisation sur les règles d'hygiène, les premiers secours, l'alimentation, le diabète, etc....
                    </p>

                  </div>
                </div>
              </div>


              <div class="item">
                <div class="blog-post-broken">
                  <div class="post-img">
                    <a href="blog-single.html"><img src="assets/images/causes/causes_img_1.jpg" alt=""></a>
                  </div>
                  <div class="post-content">
                    <h3 class="post-title"><a href="blog-single.html">EDUCATION</a></h3>

                    <p>Nous soutenons et privilégions l'éducation des enfants à travers des séances de soutien scolaire qui est l'une de nos importante activités
                    </p>

                    <p>
                      Nous contribuons du mieux que nous pouvons à travers nos projets de rentrée scolaire qui visent à offrir aux enfants dans le bésoins des fournitures scolaire de base 

                    </p>

                  </div>
                </div>
              </div>


              <div class="item">
                <div class="blog-post-broken">
                  <div class="post-img">
                    <a href="blog-single.html"><img src="assets/images/causes/causes_img_6.jpg" alt=""></a>
                  </div>
                  <div class="post-content">
                    <h3 class="post-title"><a href="blog-single.html">ENVIRONEMENT ET SANTE</a></h3>

                    <p>Nous oeuvrons activement  dans la lutte contre la déforestation à travers nos programmes de reboisement.Nous favorisons la plantation d'arbres qui sont les poumons de la nature et dont l'humain ne peut pas vivre sans( manguiers, citronniers, bananier et tout autre arbres permettant à l'humain de mieux vivre</p>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="wide-tb-100 pattern-green pb-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h1 class="heading-main light-mode green">
              Rejoignez UVUE-Togo
            </h1>
            <p class="txt-white">Apporter son aide peut se faire de multiples façons : chaque personne peut trouver une
              formule qui lui convient selon sa disponibilité, ses centres d’intérêt, ses compétences, son activité et
              ses envies. Vous aussi, vous pouvez devenir bénévole. Pour cela il suffit de remplir le formulaire
              ci-contre</p>
          </div>
          <div class="col-lg-5 col-md-12 offset-lg-1 mt-5 mt-lg-0">
            <div class="home-second-donation-form img">
              <form class="form-style" action="" method="POST" >
                <div class="form-group">
                  <label for="fullname"><strong>Nom & Prénom</strong></label>
                  <input type="text" class="form-control form-light" name="fullname" placeholder="Entrez votre nom">
                  <p class="text-danger py-2 mt-1"><?php echo $name_err; ?></p>
                </div>
                <div class="form-group">
                  <label for="email"><strong>E-mail</strong></label>
                  <input type="email" name="email" class="form-control form-light" id="email" placeholder="Entrez votre e-mail">
                  <p class="text-danger py-2 mt-1"><?php echo $mail_err; ?></p>
                </div>
                <div class="form-group">
                  <label for="state"><strong>Choisissez un domaine</strong></label>
                  <select class="theme-combo home-charity select2-hidden-accessible"  id="state" name="domaine"
                    style="height: 400px" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-state">
                    <option value="Santé">Santé</option>
                    <option value="Education">Education</option>
                    <option value="Environement">Environement</option>
                  </select> </span>
                  <p class="text-danger py-2 mt-1"><?php echo $domaine_err; ?></p>
                </div>

                <button type="submit"  name="form_submission" class="btn btn-default mt-3 btn-block">Valider</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="wide-tb-100 bg-white">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 col-md-12">
            <div class="text-center">
              <img src="assets/images/start-with-us.png" alt="">
            </div>
          </div>
          <div class="col-lg-5 col-md-12">
            <h1 class="heading-main">
              <small>Vous pouvez aider</small>
              Contribuez à faire la différence
            </h1>
            <p>Avec ses 32 membres et bénévoles, UVUE-Togo s’appuie le plus fortement sur la bonne volonté et le
              dévouement des gens de cœur. Apporter son aide peut aider à faire la différence</p>


          </div>
        </div>
      </div>
    </section>

    <?php if ($_SESSION['form_submited']) :?>
        <div id="modalPop" class="modal">

            <div class="modalbox success  center animate">
                <div class="icon">
                    <div class="glyphicon glyphicon-ok">
                        <img src="assets/media/images/icons/like.svg" alt="" srcset="">
    </div>
                </div>
                <!--/.icon-->
                <h1>Thanks!</h1>
                <p>Your message have been sent successfully
                    <br>We'll be back to you very soon.</p>
                <button type="button" class="redo btn close">Ok</button>
            </div>

        </div>
       <?php unset($_SESSION['form_submited']) ?>    
        <?php endif; ?>

  </main>
  <?php     
        include 'components/footer.php';
        include 'components/back-to-top.php';
        include 'components/footer-script.php'
    ?>
</body>


</html>