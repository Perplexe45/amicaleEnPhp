<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap CSS -->
      <link href="assets/css/bootstrap.min.css" rel="stylesheet">
      <!-- My CSS -->  
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" media="only screen and (max-width: 500px)" href="assets/css/style.mobile.css " />
      <script src="https://kit.fontawesome.com/6ddde329a5.js" crossorigin="anonymous"></script>
      
    <title>L'amicale du liège</title>
</head>

<?php require_once('src/header.php');?>

<body class="h-100 global-container">
  <!-- Fonctionnement de l'association-->
    <main>
      <div class="container">
        <div class="row cadre">
          <h1 class="text-center my-5">Fonctionnement de l'association</h1>
          <div class="col-md-1 cadre"></div>
          <div class="col-md-5 cadre">
            <h2 class="text-center pb-3 mt-4">Historique de l'association</h2>
            <p class="fs-5 lh-sm">
              L'amicale du liège a vu le jour le 15 mai 1946, juste après la fin de la seconde guerre mondiale. <br><br>
              Le conseil d'administation de l'époque avait jugé bon d'aider les necessiteux.
            </p>
            <img src="./assets/img/debutChantier.png" alt="Pelleteuse du chantier" class="img-fluid  buildingGarden rounded-5 p-5 w-100">  
          </div>

          <div class="col-md-5 cadre">
            <h2 class="text-center pb-3 mt-4">Particularités</h2>
              <p class="fs-5 lh-sm ps-5">
                Elle est une association dite à but <span class="fst-italic ">non lucrative</span> <br><br>
                Si sa trésorerie est excédentaire en fin d'année, le surplus est systèmatiquement
                réutilisé pour l'aménagement des jardins. <br><br>
                Le personnel qui la compose est constitué uniquement d'adhérents qui ne percoivent aucun salaire. <br><br>
                Il est donc à féliciter pour son esprit d'abnégation.
              </p>
            </div>
          <div class="col-md-1 cadre"></div>
        </div>
      </div>
    </main>

    <!-- Personnel de la gérance + Activités -->
    <section>
      <div class="container">
        <div class="row cadre"> 
          <!-- Personnel -->
          <div class="col-md-4 blackCadre mt-md-5 col-sm-11 col-11">
            <h2 class="pt-5 mb-5 pb-3 text-center">Administration</h2>

            <div class="col my-5 ps-xl-1 ps-md-2 ps-lg-5 ms-sm-1 ps-sm-5 ps-5 mb-1">
              <img src="./assets/img/Mr Dupond.jpg" alt="Monsieur Dupond" style="width: 9rem; margin-left: 3rem ;"class="rounded-circle ms-4">
              <div class="d-inline-block ms-lg-2 ms-md-2 py-2">
                <h4 class="ps-4 mb-1 pt-lg-1 pt-md-1 ms-md-3">Gérant</h4>
                <p class="ps-4 text-center">Monsieur Dupond</p>
              </div>
            </div>

            <div class="col mt-lg-1 mt-xl-5 ps-xl-1 ps-md-3 ps-lg-5 ps-sm-5 ps-5 pb-1">
              <div class="d-inline-block py-2">
                <h4 class="ps-xl-2 mb-1 ps-md-2 pt-md-1">Vice président</h4>
                <p class="ps-4 text-center mb-lg-1 mb-md-1 ms-md-0">Monsieur Gerland</p>
              </div>
                <img src="./assets/img/Mr Gerland.jpg" alt="Mr Gerland" style="width: 9rem; margin-left: 4rem;"class="rounded-circle ms-3 pb-lg-2 ps-lg-2 pb-md-4 my-1">
            </div>
           
           
            <div class="col mt-xl-5 mt-lg-5 col my-4 ps-xl-1 ps-md-2 ps-lg-5 ms-sm-1 ps-sm-5 ps-5 pb-1">
              <img src="./assets/img/Monsieur Launay.jpg" alt="Monsieur Launay" style="width: 9rem; margin-left: 3rem ;"class="rounded-circle ms-4">
              <div class="d-inline-block ms-lg-2 ms-md-2 py-2 ">
                <h4 class="ps-4 mb-1 pt-lg-1 pt-md-1 ms-md-3">Trésorier</h4>
                <p class="ps-4 text-center">Monsieur Launay</p>
              </div>
            </div>
  
            <div class="col mt-xl-5 mt-lg-0 my-4 ps-xl-1 ps-md-3 ms-sm-1 ps-lg-5 ps-sm-5 ps-5 pb-1 ">
              <div class="d-inline-block pt-lg-1">
                <h4 class="ps-4 pt-lg-1 mb-1 ms-md-2">Secrétaire</h4>
                <p class="ps-4 text-center mb-lg-1 mb-md-1">Madame Thomas</p>
              </div>
              <img src="./assets/img/Mme Thomas.jpg" alt="Mr Gerland" style="width: 9rem ;"class="rounded-circle ms-3 pt-md-1 ">
            </div>

          </div>

          <!-- Activités -->
          <div class="col-md-7">
              <h2 class="text-center pt-5 mb-5">Activités de l'association</h2>
              <h4>Vente de graines et de plants</h4>
              <p class="fs-5 lh-sm">
                Toute l'année, on peut s'approvisionner en graine et commander des plants <br >
                Il suffit de remplir des formulaires fournis au local et bien sûr de régler la facture.
              </p>
              <div class="row mt-4">
                  <div class="col-md-6">
                    <h5>Graines les plus vendues</h5>


                    <div class="card imgSideToSide" style="width:6rem;">
                      <img class="card-img-top imgInCard" src="./assets/img/graineCarotte.jpg" alt="Card image">
                      <div class="card-body">
                        <h6 class="card-title m-0">Carotte</h6>
                      </div>
                    </div>

                    <div class="card imgSideToSide" style="width: 6rem;">
                      <img class="card-img-top imgInCard" src="./assets/img/graineDeBetterave.jpg" alt="Card image">
                      <div class="card-body ps-2">
                        <h6 class="card-title m-0 text-nowrap">Betterave</h6>
                      </div>
                    </div>

                    <div class="card imgSideToSide" style="width: 6rem;">
                      <img class="card-img-top imgInCard" src="./assets/img/graineHaricot.jpg" alt="Card image">
                      <div class="card-body">
                        <h6 class="card-title m-0 text-nowrap">Haricot</h6>
                      </div>
                    </div>

                    <div class="card imgSideToSide" style="width: 6rem;">
                      <img class="card-img-top imgInCard" src="./assets/img/grainePoireau.jpg" alt="Card image">
                      <div class="card-body">
                        <h6 class="card-title m-0 text-nowrap">Poireau</h6>
                      </div>
                    </div>

                    <div class="card imgSideToSide" style="width: 6rem;">
                      <img class="card-img-top imgInCard" src="./assets/img/graineRadis.jpg" alt="Card image">
                      <div class="card-body ps-4">
                        <h6 class="card-title m-0 text-nowrap">Radis</h6>
                      </div>
                    </div>

                    <div class="card imgSideToSide" style="width: 6rem;">
                      <img class="card-img-top imgInCard" src="./assets/img/graineTomate.jpg" alt="Card image">
                      <div class="card-body">
                        <h6 class="card-title m-0 text-nowrap">Tomate</h6>
                      </div>
                    </div>
                  </div>

                  <!-- Plants Les plus vendus -->
                  <div class="col-md-6">
                    <h5 class="">Plants les plus vendus</h5> 
                    <div class="card imgSideToSide" style="width:6rem;">
                      <img class="card-img-top imgInCard" src="./assets/img/plantAubergine.jpg" alt="Card image">
                      <div class="card-body ps-2">
                        <h6 class="card-title m-0 text-nowrap">Aubergine</h6>
                      </div>
                    </div>

                    <div class="card imgSideToSide" style="width: 6rem;">
                      <img class="card-img-top imgInCard" src="./assets/img/plantCourgette.jpg" alt="Card image">
                      <div class="card-body ps-2">
                        <h6 class="card-title m-0 text-nowrap text-center">Courgette</h6>
                      </div>
                    </div>

                    <div class="card imgSideToSide" style="width: 6rem;">
                      <img class="card-img-top imgInCard" src="./assets/img/plantFraisier.jpg" alt="Card image">
                      <div class="card-body">
                        <h6 class="card-title m-0 text-nowrap">Fraisier</h6>
                      </div>
                    </div>

                    <div class="card imgSideToSide" style="width: 6rem;">
                      <img class="card-img-top imgInCard" src="./assets/img/plantPommeDeTerre.jpg" alt="Card image">
                      <div class="card-body">
                        <h6 class="card-title m-0 text-wrap text-center">Pomme de terre</h6>
                      </div>
                    </div>

                    <div class="card imgSideToSide" style="width: 6rem;">
                      <img class="card-img-top imgInCard" src="./assets/img/plantSalade.jpg" alt="Card image">
                      <div class="card-body">
                        <h6 class="card-title m-0 text-center">Salade</h6>
                      </div>
                    </div>

                    <div class="card imgSideToSide" style="width: 6rem;">
                      <img class="card-img-top imgInCard" src="./assets/img/plantTomate.jpg" alt="Card image">
                      <div class="card-body">
                        <h6 class="card-title m-0 text-center">Tomate</h6>
                      </div>
                    </div>
                  </div>

                  <!-- Personnel de l'amicale -->
                  <div class=" personsAdmin my-5">
                    <div class="row cadre">
                      <h2 class="text-center pb-3 py-4">Personnel de l'amicale</h2>
                      <div class="col-md-6">
                        <p class="fs-5 lh-sm ps-2">
                          Cette heureuse équipe fera le plaisir de vous servir et de vous donner de bons conseils en jardinage. <br><br>
                          En effet, ces valheureuses personnes ont des années d'expérience en jardinage. <br><br>
                          le jardinage n'a donc plus de secret pour eux.
                        </p>
                      </div>
                      <div class="col-md-6">
                        <img src="./assets/img/En chantier.jpg" alt="Pesonnel de l'amicale">
                      </div>
                    </div>
                    </p>
                  </div>
                </div>  

          </div>
        </div>
      </div>
    </section>
    

    <?php require_once('src/footer.php'); ?>
     

    <!-- Bootstrap JavaScript -->
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <!-- My JavaScript -->
    <script src="./assets/js/script.js"></script>
</body>
</html>