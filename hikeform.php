<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Space - Formulaire d’ajout randonnée - HikeTime</title>
    <link rel="stylesheet" href="./CSS/hikeform.css">
    <link rel="shortcut icon" href="./img/hiking.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./CSS/footer.css">
    <link rel="stylesheet" href="./CSS/header.css">
</head>
<body>
    <div class="conteneur">
        <header>
            <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 130" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(47, 56, 2, 1)" offset="0%"></stop><stop stop-color="rgba(108.161, 122.543, 36.247, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,39L48,52C96,65,192,91,288,88.8C384,87,480,56,576,43.3C672,30,768,35,864,39C960,43,1056,48,1152,56.3C1248,65,1344,78,1440,84.5C1536,91,1632,91,1728,93.2C1824,95,1920,100,2016,88.8C2112,78,2208,52,2304,43.3C2400,35,2496,43,2592,45.5C2688,48,2784,43,2880,41.2C2976,39,3072,39,3168,49.8C3264,61,3360,82,3456,75.8C3552,69,3648,35,3744,19.5C3840,4,3936,9,4032,21.7C4128,35,4224,56,4320,71.5C4416,87,4512,95,4608,99.7C4704,104,4800,104,4896,93.2C4992,82,5088,61,5184,60.7C5280,61,5376,82,5472,88.8C5568,95,5664,87,5760,86.7C5856,87,5952,95,6048,84.5C6144,74,6240,43,6336,28.2C6432,13,6528,13,6624,30.3C6720,48,6816,82,6864,99.7L6912,117L6912,130L6864,130C6816,130,6720,130,6624,130C6528,130,6432,130,6336,130C6240,130,6144,130,6048,130C5952,130,5856,130,5760,130C5664,130,5568,130,5472,130C5376,130,5280,130,5184,130C5088,130,4992,130,4896,130C4800,130,4704,130,4608,130C4512,130,4416,130,4320,130C4224,130,4128,130,4032,130C3936,130,3840,130,3744,130C3648,130,3552,130,3456,130C3360,130,3264,130,3168,130C3072,130,2976,130,2880,130C2784,130,2688,130,2592,130C2496,130,2400,130,2304,130C2208,130,2112,130,2016,130C1920,130,1824,130,1728,130C1632,130,1536,130,1440,130C1344,130,1248,130,1152,130C1056,130,960,130,864,130C768,130,672,130,576,130C480,130,384,130,288,130C192,130,96,130,48,130L0,130Z"></path></svg>
            <div id="logo"><img src="./img/hiking (2).svg" alt="logo" id="icon-image">
                <p id="logo-text">HikeTime</p>
            </div>
            <div id="search-bar">
                <input type="text" placeholder="Rechercher Randonnée...">
            <button type="submit"><img src="./img/search (3).svg" alt="search" id="search-image"></button>
        </div>
    
        <div class="buttons">
            <div id="ajouter">
                <button><img src="img\add-circle-svgrepo-com (3).svg" alt="ajouter" id="ajout-image"></button>
            </div>
            <div id="profil">
                <button class="boutton_liste" ><img src="./img/profile-user.svg" alt="profil" id="profil-image">
                    <div class="dropdown">
                        <a href="#">Deconnexion</a>
                    </div>
                </button>
            </div>  
    
        </div>
        </header>
        <form class="ajouter" method="post">
            <h1 id="h1">Ajouter une randonnée</h1>
            <div class="descriptions">
                <div class="descriptionp1">
                    <div class="champs">
                        <h4>Nom de la randonnée : </h4>
                        <input id="input" type="text" placeholder="..." name="nomrand">
                        <h4>Description de la randonnée : </h4>
                        <textarea id="userInput" name="description"></textarea> <!--oninput="adjustTextAreaHeight(this)"-->
                        <h4>Prix de la randonnée : </h4>
                        <input id="input" type="text" placeholder="... DA" name="prix">
                    </div>
                </div>
                <div class="decriptionp2">
                    <div class="champs">
                        <input type="file" id="file" accept="image/*" hidden>
                        <div class="img-conteneur" data-img="">
                            <i class="fa-solid fa-upload fa-2xl icon"></i>
                            <h4>Ajouter une image</h4>
                        </div>
                        <label for="file" class="btn1">Importer la photo principale</label>
                    </div>
                </div>
            </div>
            <div class="more">
                <div class="details">
                    <div class="info">
                        <div class="champ2">
                            <h4>Date </h4>
                            <input id="input2" type="date" min="2024-03-01" name="date">
                        </div>
                        <div class="champ2">
                            <h4>Heure </h4>
                            <input id="input2" type="time" name="heure">
                        </div>
                        <div class="champ2">
                            <h4>Niveau de difficulté </h4>
                            <input id="input2" type="number" min="1" max="5" name="nivdiff">
                        </div>
                    </div>
                    <div class="info">
                        <div class="champ2">
                            <h4>Lieu de départ :</h4>
                            <input id="input2" type="text" name="lieudep">
                        </div>
                        <div class="champ2">
                            <h4>Lieu d’arrivée :</h4>
                            <input id="input2" type="text" name="lieuarr">
                        </div>
                        <div class="champ2">
                            <h4>Distance :</h4>
                            <input id="input2" type="text" name="distance">
                        </div>
                    </div>
                    <div class="info">
                        <div class="champ2">
                            <h4>Total participants :</h4>
                            <input id="input2" type="number" min="5" max="30" name="total">
                        </div>
                        <div class="champ2">
                            <h4>Age minimal :</h4>
                            <input id="input2" type="number" min="16" name="agemin">
                        </div>
                        <div class="champ2">
                            <h4>Age maximal :</h4>
                            <input id="input2" type="number" min="16" max="75" name="agemax">
                        </div>
                    </div>
                    <div class="info">
                        <div class="champ2">
                            <h4>Nom du guide</h4>
                            <input id="input2" type="text" name="nomguide">
                        </div>
                        <div class="champ2">
                            <h4>Prénom du guide</h4>
                            <input id="input2" type="text" name="prenomguide">
                        </div>
                    </div>
                </div>
                <div class="parcours">
                    <div class="champs">
                        <input type="file" id="file2" accept="image/*" hidden>
                        <div class="img-conteneur2" data-img="">
                            <i class="fa-solid fa-upload fa-2xl icon"></i>
                            <h4>Ajouter une image</h4>
                        </div>
                        <label for="file2" class="btn2">Importer la photo de l’itinéraire</label>
                    </div>
                </div>
            </div>
            <div class="pictures">
                <div class="picturesp1">
                    <h4>Inserer plus de photos : </h4>
                    <input type="file" id="files" multiple="multiple" accept="image/*" hidden>
                    <label for="files" id="btn"><i class="fa-solid fa-upload fa-xl icone" style="color: #2f3802;"></i></label> 
                </div>
                <output id="result"></output>
            </div>
            <div class="boutons">
                <button id="ok" type="submit" name="valider">Valider</button>
                <button id="delete" type="reset" onclick="newFunction()">Effacer</button>
                <button id="exit" type="menu"><a href="./espaceadmin.php">Annuler</a></button>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
<?php
$bdd = new PDO('mysql:host=localhost;bdname=hiketime;', 'root', '');

    $nomRand = $_POST['nomrand'];
    $description = $_POST['description'];
    $prixRand = $_POST['prix'];
    $dateRand = $_POST['date'];
    $heureRand = $_POST['heure'];
    $nivDiff = $_POST['nivdiff'];
    $lieuDep = $_POST['lieudepp'];
    $lieuArr = $_POST['lieurrr'];
    $distanceRand = $_POST['distance'];
    $nbrPersonnes = $_POST['total'];
    $ageminRand = $_POST['agemin'];
    $agemaxRand = $_POST['agemax'];
    $nomGuide = $_POST['nomguide'];
    $prenomGuide = $_POST['prenomguide'];
    
    $sql = "INSERT INTO randonnée (nomRand, description, prixRand, dateRand, heureRand, nivDiff, lieuDep, lieuArr, distanceRand, nbrPersonnes, ageminRand, agemaxRand, nomGuide, prenomGuide) VALUES ('$nomRand', '$description', '$prixRand', '$dateRand', '$heureRand', '$nivDiff', '$lieuDep', '$lieuArr', '$distanceRand', '$nbrPersonnes', '$ageminRand', '$agemaxRand', '$nomGuide', '$prenomGuide')";
    

    if ($bdd->query($sql) === TRUE) {
        echo "Enregistrement de la randonnée réussi.";
    } else {
        echo "Erreur lors de l'enregistrement de la randonnée : " . $bdd->error;
    }
?>
