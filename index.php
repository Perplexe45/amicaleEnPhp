<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- My CSS -->  
    <link rel="stylesheet" href="./assets/css/style.css">
      
    <title>L'amicale du liège</title>
</head>

<?php require_once('src/header.php');?>

<body class="h-100 global-container">
  
    <!-- Présentation -->
      <div class="container cadre">
        <h1 class="text-center my-5">L'envie de jardiner vous prend !</h1>   
        <div class="row presentation">
            <div class="col-md-12 col-lg-12 col-xl-4 ps-3 col-sm-12 cadre">
              <img class="rounded my-5" src="assets/img/jardiniersHeureux.png" alt="jardiners heureux"> 
            </div>
            <div class="col-md-12 col-lg-12 col-xl-4 ps-5 col-sm-12 cadre">
              <p class="my-4 fs-5 lh-sm">
                Envie de jardiner, de cultiver vos légumes et vos fruits ? <br><br>
                A Tours, comme dans de nombreuses régions de France, des jardins familiaux permettent à chacun de bénéficier d'un espace à soi et de pouvoir cultiver ses légumes à moindre coût. <br><br>
                Ce jardin familial est situé , entre le quartier des 2 lions et la limite de Tours. <br><br>
                Cette association gère plus de 500 jardins, qui ont chacun une superficie de 150 m².
              </p>
            </div>
            <div class="localisationGarden col-md-12 col-lg-12 col-xl-4 ps-2 py-5 col-sm-12 cadre">
              <h5 class="">Localisation du jardin familiale</h5> 
              <img class="rounded-1 imgSituationGeo" src="assets/img/SituationGeoAmicale.png" alt="Lieu du local">
              <p class="fst-italic text-center" >(Passer la souris sur la photo pour agrandir)</p> 
            </div>
        </div>
      </div>

      <!-- Coordonnées de l'association et local -->
      <div class="container" >
        <div class="row cadre ">
      
          <div class="col-xl-6 col-md-6 ps-xxl-5 ps-5 py-4 ps-lg-1" >
            <h3 class=" my-3 ps-lg-5 ps-md-1">Adresse de l'amicale du liège</h3>
            <p class="my-2 ps-lg-5 ps-md-1 fs-5 lh-sm">
              40 allée des marguerites <br> 
              37200 - Tours 
            </p><br>
            <h3 class="my-3 ps-lg-5 ps-md-1">Responsable de l'association</h3>
            <p class="my-2 ps-lg-5 ps-md-1   fs-5 lh-sm">
              Madame Dupond Jeanne<br> 
              Tel : 01.02.03.04.05 <br>
              Email : dupond.jeanne@free.fr
            </p>

            </div>
         
          
          <div class="imgHouse col-xl-6 col-md-6 my-md-5 my-lg-5 ps-xxl-5 ps-sm-5 ps-4 my-4 ">
            <h3>Local de l'association</h3>
            <img src="assets/img/localDuLiege.jpg" class="img-fluid rounded" alt="Local de l'association" width="400" height="150">
            
        </div>
        </div>
      </div>

      <!-- Obligations du jardinier -->
      <div class="container py-4 cadre">
        <div class="row align-items-center justify-content-center">
            <div class="imgDisplay col-xl-5 mt-4  ">
              <img class="img-fluid rounded" src="assets/img/tableauInfosDuLiege.jpg" alt="jardiners heureux"  width="420" height="200"> 
              <p class="fst-italic" ><span>(Informations mises à jour que doivent consulter les jardiniers)</span></p> 
            </div>
          
            <div class="cadreObligation col-5 m-3 ps-5 pb-2 mt-4 pt-4 orangeCadre">
              <h2 class="my-1">Obligation du jardinier</h2><br>
              <p class="fs-5 lh-sm">
                  - Cultiver son jardin (Il ne doit jamais être en friche et ce, quelque soit la saison)<br><br>
                  - Etre sociable avec ses voisins (Eviter du mieux possible les nuisances sonores) <br><br>
                  - Se soustraire au règlement intérieur (Vérifier régulièrement le panneau d'affichage)
              </p>
          </div>
          
        </div>
      </div>

      <!-- Prix d'1 location de jardin : 3 cartes  --> 
      <section  class="container cadre py-4"  >
        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-3 justify-content-center mt-0 ">
          <div class="d-flex flex-column align-items-center">
            <div class="card threeCards text-center cardOne">
              <div class="card-body">
                  <h5 class="card-title">Adhérent</h5>
                  <p class="card-text">
                    - Jardinier depuis plus d'une année <br><br>
                    - Renouvellement de la parcelle
                  </p>
                  <h2 class="text-center pb-2">60 € / an </h2>
              </div>
            </div>
          </div>


          <div class="d-flex flex-column align-items-center">
            <div class="card threeCards text-center cardTwo" style="height: 300px;">
              <div class="card-body">
                  <h5 class="card-title">Nouvel arrivant</h5>
                  <p class="card-text">
                    - Caution : 60 € <br><span style="font-size: 0.8rem; line-height: 20px;">(remboursée à la restitution du jardin).</span> <br><br>
                    - cotisation de 60 €
                  </p>
                  <h2 class="text-center">120 €</h2>
              </div>
              <h6>(Si vous êtes interessé, veuillez remplir le formulaire)</h6>
            </div>
          </div>


          <div class="d-flex flex-column align-items-center">
            <div class="card threeCards text-center cardThree">
              <div class="card-body">
                <h5 class="card-title">Pas encore de jardin</h5>
                  <p class="card-text">
                    - Impossibilité de manger des légumes frais <br><br>
                    - Ne pas connaître les joies du jardinage
                  </p>
                  <h2 class="text-center pb-2">0 € / an </h2>
                </div>
                <h6>(Si vous êtes interessé, veuillez remplir le formulaire)</h6>
              </div>
            </div>
            
          </div>
      </section>
        
        <!-- Formulaire pour enregistrement avec l'association -->
      <section class="container py-4 cadre">
         
            <h3 class="text-center">Contactez-nous</h3>
            <form class="styleForms" id="contact">
              <!-- Nom - prenom -->
              <div class="row g-2 pb-2">
                <div class="col-md-6 col-sm">
                  <div class="input-group">
                    <span class="input-group-text">
                        <span class="fas fa-user"></span>
                    </span>
                    <input type="text" class="form-control lastName" placeholder="Nom" required>
                  </div>
                </div>
                <div class="col-md-6 col-sm">
                    <div class="input-group">            
                          <input type="text" class="form-control firstName" placeholder="Prénom" required>
                    </div>
                </div>
              </div>

              <!-- Adresse - CP - Ville -->
              <div class="row g-2">
                <div class="col-md-6 col-sm">
                  <div class="input-group">
                    <span class="input-group-text">
                    <span class="fa-sharp fa-solid fa-house"></span>
                    </span>
                    <input type="text" class="form-control" placeholder="Adresse" required>
                  </div>
                </div>
                <div class="col-md-2 col-sm">
                    <div class="input-group">            
                          <input type="text" class="form-control" placeholder="Code postal" required>
                    </div>
                </div>
                <div class="col-md-4 col-sm pb-2">
                  <div class="input-group">            
                        <input type="text" class="form-control" placeholder="Ville" required>
                  </div>
              </div>
              </div>

              <!-- Téléphone - Email -->
              <div class="row g-2 pb-2">
                <div class="col-md-5 col-sm">
                  <div class="input-group">
                    <span class="input-group-text">
                      <span class="fa-sharp fa-solid fa-phone"></span>
                  </span>
                  <input type="text" class="form-control" placeholder="Téléphone" required>
                  </div>
                </div>
                <div class="col-md-7 col-sm">
                  <div class="input-group">
                    <span class="input-group-text">
                      <span class="fa-sharp fa-solid fa-envelope"></span>
                    </span>
                    <input type="text" class="form-control" placeholder="E-mail">
                  </div>
                </div>
              </div>

              <!-- Message -->
              <div class="row g-2 pb-2">
                <div class="col-md-12 col-sm">
                  <div class="input-group">
                    <span class="input-group-text">
                      <span class="fa-sharp fa-solid fa-envelope"></span>
                    </span>
                    <label for="Textarea1"></label>
                    <textarea class="form-control" id="Textarea1" placeholder="Votre message ..." rows="3"></textarea>
                  </div>
                </div>

                <!-- Button -->
                <div class="formButton">
                  <button type="submit" class="greenButton text-center">Envoyer</button>
                  <!-- <input class="greenButton" type="submit" value="Valider"> -->
                </div>
              </div>
            </form>
       
      </section>
    
      <?php require_once('src/footer.php');?>
     
    <!-- Bootstrap JavaScript -->
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <!-- My JavaScript -->
    <script src="./assets/js/script.js"></script>
</body>
</html>