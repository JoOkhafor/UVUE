<?php
// session_start();
// if (!isset($_SESSION['form_submited'])) {
//     $_SESSION['form_submited'] = '';
// }

 
// // Define variables and initialize with empty values
// $name =""; $email =""; $domaine= "";
// $name_err =""; $mail_err =""; $domaine_err = "";

// if (isset($_POST['form_submission'])){
//     // Check if name is empty
//     if(empty(trim($_POST["fullname"]))){
//         $name_err = "Veuillez indiquer votre nom.";
//     }
//     else{
//         $name = trim($_POST["email"]);
//     }

// // Check if mail is empty or incorrect
// if(empty(trim($_POST["email"]))){
//   $mail_err = "Veuillez entrer une adresse mail.";
// }  elseif(!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)){
// $mail_err = "Email non valide";}
// else{
//   $mail = trim($_POST["email"]);
// }

// if($_SERVER["REQUEST_METHOD"] == "POST"){
//   // Check if name is empty
//   if(empty(trim($_POST["domaine"]))){
//       $domaine_err = "Veuillez choisir un domaine.";
//   }
//   else{
//       $domaine = trim($_POST["domaine"]);
//   }

//   if(empty($name_err) && empty($mail_err) && empty($domaine_err)){

//         // Multiple recipients
//         $to = 'jookhafor@gmail.com';

//         // Subject
//         $subject = 'Candidature a sein de l\'équipe UVUE-Togo';

//         // Message
//         $message = '
//         <html>
//         <body>
//             <p>Détails de la candidature</p>
//             <p> <strong>Nom complet:</strong> '.$name.' </p>
//             <p> <strong>Email:</strong>  '.$email.' </p>
//             <p><strong> Domaine:</strong> '.$domaine.' </p>
//         </body> 
//         </html>
//         ';

//         // To send HTML mail, the Content-type header must be set
//         $headers[] = 'MIME-Version: 1.0';
//         $headers[] = 'Content-type: text/html; charset=iso-8859-1';

//         // Additional headers
//         $headers[] = 'From: UVUE admin <jookhafor@gmail.com>';

//         if(mail($to, $subject, $message, implode("\r\n", $headers))) {
//         $_SESSION['form_submited']= true;
//         header("Location: nos-actions.php");
//         exit;
//       }

//   }

// }

// }
   
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
        <h1>Devenez bénévole</h1>
        <nav aria-label="breadcrumb" class="breadcrumb-wrap">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Acceuil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Devenir bénévol</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>



  <main id="body-content">

    <section class="wide-tb-100">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 col-md-12">
            <div class="text-center">
              <img src="assets/images/about_img.png" alt="">
            </div>
          </div>
          <div class="col-lg-5 col-md-12">
            <h1 class="heading-main">
              <small>Agissez avec nous</small>
              Devenir bénévole , Un geste simple
            </h1>
            <p>Vous souhaitez vous engager à nos côtés? Étudiant.e.s, salarié.e.s, retraité.e.s, Tout le monde peut
              devenir bénévole, et c’est bien plus simple que vous pensez.</p>
            <div class="mb-5 mt-5">
              <div class="theme-collapse">

                <div class="toggle arrow-down">
                  <span class="icon">
                    <i class="icofont-plus"></i>
                  </span> Pourquoi?
                </div>


                <div class="collapse show">
                  <div class="content">
                    Rejoindre UVUE-Togo en tant que bénévole c’est donner du temps et des compétences pour faire grandir
                    nos projets de solidarité. C’est aussi rejoindre une communauté de bénévoles vivante et
                    grandissante, et participer à des rencontres avec l’équipe !
                  </div>
                </div>


                <div class="toggle">
                  <span class="icon">
                    <i class="icofont-plus"></i>
                  </span> Comment?
                </div>


                <div class="collapse">
                  <div class="content">
                    Remplissez le formulaire ci-dessous pour proposer votre appui bénévole : chacun peut trouver une
                    formule qui lui convient selon sa disponibilité, ses centres d’intérêt, ses compétences.


                  </div>
                </div>


              </div>
            </div>

          </div>
        </div>
      </div>
    </section>


    <section class="wide-tb-100 map-bg bg-navy-blue pt-0">
      <div class="container">
        <div class="pos-rel become-volunteers bg-orange">
          <div class="row no-gutters">
            <div class="col-12 col-lg-6 col-md-12">
              <div class="inner-form">
                <h1 class="heading-main light-mode">
                </h1>
                <div class="form">
                  <form>
                    <div class="form-group">
                      <label for="state"><strong>Civilité</strong></label>
                      <select class="theme-combo home-charity select2-hidden-accessible" id="civilite" name="civilite"
                        style="height: 400px" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-state">
                        <option value="Charity For Food">M.</option>
                        <option value="Charity For Education">Mlle</option>
                        <option value="Charity For Medical">Mme</option>
                      </select> </span>
                    </div>
                    <div class="form-group">
                      <label for="phone"><strong>Nom & prénom</strong></label>
                      <input type="tel" class="form-control form-light" id="phone">
                    </div>
                    <div class="form-group">
                      <label for="refrence"><strong>E-mail</strong></label>
                      <input type="tel" class="form-control form-light" id="refrence">
                    </div>
                  
                    <div class="form-group">
                      <label for="refrence"><strong>Pays</strong></label>
                      <input type="tel" class="form-control form-light" id="refrence">
                    </div>

                    <div class="form-group">
                      <label for="refrence"><strong>Ville</strong></label>
                      <input type="tel" class="form-control form-light" id="refrence">
                    </div>

                    <div class="form-group">
                      <label for="state"><strong>Choisissez un domaine</strong></label>
                      <select class="theme-combo home-charity select2-hidden-accessible" id="state" name="state"
                        style="height: 400px" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-state">
                        <option data-select2-id="select2-data-9-inp6">Selectionner</option>
                        <option value="Charity For Food">santé</option>
                        <option value="Charity For Education">Education</option>
                        <option value="Charity For Medical">Evironement</option>
                      </select> </span>
                    </div>



                    
                   
                    <button type="submit" class="btn btn-outline-light mt-3">Envoyer</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-md-12 volunteers-img-bg">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <h1 class="heading-main light-mode">
                <small>On a toujours une place pour vous!</small>
             A UVUE-Togo, chacun.e peut y trouver sa place selon ses envies, ses disponibilités et/ou ses compétences
              </h1>
            </div>
           
          </div>
        </div>
      </div>
    </section>


    <section class="wide-tb-100">
      <div class="container">
        <div class="row justify-content-between align-items-end">
          <div class="col-lg-6 col-md-8">
            <h1 class="heading-main">
              <small>Nous rejoindre</small>
              Joignez vous à nos activités
            </h1>
          </div>
        </div>
        <div class="owl-carousel owl-theme" id="home-second-events">

          <div class="item">
            <div class="event-wrap-alternate">

              <div class="img-wrap">

                <a href="events-single.html"><img src="assets/images/events/event_alternate_img_1.jpg" alt=""></a>
                <div class="content-wrap">
                  <h3><a href="events-single.html">VOYAGER AVEC NOUS</a></h3>
                  <div class="event-details">
                    <a href="#" class="btn btn-default">En savoir plus</a>
                  </div>
                </div>
              </div>

            </div>
          </div>


          <div class="item">
            <div class="event-wrap-alternate">

              <div class="img-wrap">

                <a href="events-single.html"><img src="assets/images/events/event_alternate_img_3.jpg" alt=""></a>
                <div class="content-wrap">
                  <h3><a href="events-single.html">STAGE INTERNATIONAL</a></h3>
                  <div class="event-details">
                    <a href="#" class="btn btn-default">En savoir plus</a>
                  </div>
                </div>
              </div>

            </div>
          </div>


          <div class="item">
            <div class="event-wrap-alternate">

              <div class="img-wrap">

                <a href="events-single.html"><img src="assets/images/events/event_alternate_img_4.jpg" alt=""></a>
                <div class="content-wrap">
                  <h3><a href="events-single.html">STAGE INFIRMIER​ </a></h3>
                  <div class="event-details">
                    <a href="#" class="btn btn-default">En savoir plus</a>
                  </div>
                </div>
              </div>

            </div>
          </div>


          <div class="item">
            <div class="event-wrap-alternate">

              <div class="img-wrap">

                <a href="events-single.html"><img src="assets/images/events/event_alternate_img_5.jpg" alt=""></a>
                <div class="content-wrap">
                  <h3><a href="events-single.html">SOUTIEN SCOLAIRE</a></h3>
                  <div class="event-details">
                    <a href="#" class="btn btn-default">En savoir plus</a>
                  </div>
                </div>
              </div>

            </div>
          </div>


          <div class="item">
            <div class="event-wrap-alternate">

              <div class="img-wrap">
                <a href="events-single.html"><img src="assets/images/events/event_alternate_img_6.jpg" alt=""></a>
                <div class="content-wrap">
                  <h3><a href="events-single.html">BÉNÉVOLAT - RENFORCEMENT ASSOCIATIF </a></h3>
                  <div class="event-details">
                    <a href="#" class="btn btn-default">En savoir plus</a>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="item">
            <div class="event-wrap-alternate">

              <div class="img-wrap">

                <a href="events-single.html"><img src="assets/images/events/event_alternate_img_6.jpg" alt=""></a>
                <div class="content-wrap">
                  <h3><a href="events-single.html">CAMPS CHANTIERS </a></h3>
                  <div class="event-details">
                    <a href="#" class="btn btn-default">En savoir plus</a>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>
    </section>



  </main>
  <?php     
        include 'components/footer.php';
        include 'components/back-to-top.php';
        include 'components/footer-script.php'
    ?>
</body>


</html>