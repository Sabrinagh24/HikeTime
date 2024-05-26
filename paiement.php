<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paiement</title>
    <link rel="stylesheet" href="paiement.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo.svg" type="image/x-icon">
</head>
<body>
        <!--header-->
        <header>
            <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 130" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(47, 56, 2, 1)" offset="0%"></stop><stop stop-color="rgba(108.161, 122.543, 36.247, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,39L48,52C96,65,192,91,288,88.8C384,87,480,56,576,43.3C672,30,768,35,864,39C960,43,1056,48,1152,56.3C1248,65,1344,78,1440,84.5C1536,91,1632,91,1728,93.2C1824,95,1920,100,2016,88.8C2112,78,2208,52,2304,43.3C2400,35,2496,43,2592,45.5C2688,48,2784,43,2880,41.2C2976,39,3072,39,3168,49.8C3264,61,3360,82,3456,75.8C3552,69,3648,35,3744,19.5C3840,4,3936,9,4032,21.7C4128,35,4224,56,4320,71.5C4416,87,4512,95,4608,99.7C4704,104,4800,104,4896,93.2C4992,82,5088,61,5184,60.7C5280,61,5376,82,5472,88.8C5568,95,5664,87,5760,86.7C5856,87,5952,95,6048,84.5C6144,74,6240,43,6336,28.2C6432,13,6528,13,6624,30.3C6720,48,6816,82,6864,99.7L6912,117L6912,130L6864,130C6816,130,6720,130,6624,130C6528,130,6432,130,6336,130C6240,130,6144,130,6048,130C5952,130,5856,130,5760,130C5664,130,5568,130,5472,130C5376,130,5280,130,5184,130C5088,130,4992,130,4896,130C4800,130,4704,130,4608,130C4512,130,4416,130,4320,130C4224,130,4128,130,4032,130C3936,130,3840,130,3744,130C3648,130,3552,130,3456,130C3360,130,3264,130,3168,130C3072,130,2976,130,2880,130C2784,130,2688,130,2592,130C2496,130,2400,130,2304,130C2208,130,2112,130,2016,130C1920,130,1824,130,1728,130C1632,130,1536,130,1440,130C1344,130,1248,130,1152,130C1056,130,960,130,864,130C768,130,672,130,576,130C480,130,384,130,288,130C192,130,96,130,48,130L0,130Z"></path></svg>
            <div id="logo"><img src="./images/logo.svg"id="icon-image">
                <p id="logo-text">HikeTime</p>
            </div>
            <div id="search-bar">
                <input type="text" placeholder="Rechercher Randonée...">
            <button type="submit"><img src="./images/search (3).svg" alt="search" id="search-image"></button>
        </div>
    
            <div id="profil">
                <button class="boutton_liste" ><img src="./images/profile-user.svg" id="profil-image">
                </button>
                <div class="dropdown">
                    <a href="#">Connectez-vous</a>
                </div>
            </div>  
        </header>
        <!--forumulaire paiment-->
        <div class="espace-form">
            <h1>Formulaire de paiment </h1>
            
                <form action="" method="POST" class="form" name="paiement" >
                <!--champs a remplir-->
                <div class="form-content">
                    <div class="form-content-name">
                        <label for="name-card">titulaire de la carte</label>
                        <input type="text" placeholder="nom et prenom" id="name-card" required name="name">
                        <span class="error-message"></span>
                    </div>
                    <div class="form-content-num">
                        <label for="num-card">numero de la carte</label>
                        <input type="text"  placeholder="numero carte á 16 chiffres" id="num-card" maxlength="16" required name="numero">
                        <span class="error-message"></span>
                    </div>
                    <div class="form-date-expire">
                        <label for="date-exp">date d'expiration</label>
                        <input type="month" id="date-exp" required>
                        <span class="error-message"></span>
                    </div>
                    <div class="form-content-code">
                        <label for="code-card">code de la carte</label>
                        <input type="text"  placeholder="code carte á 3 chiffres" id="code-card" maxlength="3" required name="code">
                        <span class="error-message"></span>
                    </div>
                    <div class="form-content-price">
                        <label for="price">Montant</label>
                        <input type="number" placeholder="00.00da" step="any">
                    </div>
                </div>
                 <!--boutons-->
                 <div class="bouton">
                    <button type="submit" name="valider-paiement" onclick="openPopup(30000)" disabled>Valider</button>
                    <button><a href="randonnee.html">Annuler</a></button>
                 </div>
                </form>
                <div id="valider" class="valider">
                    <div class="valider-content">
                        <img id="logo" src="images/confirm-icon.svg" alt="confirmation icon">
                        <h2 id="h2">Votre paiement a ete effectué avec succees</h2>
                    </div>
                </div>
       </div>
    <script src="paiement.js"></script>
</body>
</html>
<?php
require 'vendor/autoload.php';
use Ramsey\Uuid\Uuid as uuidpaiement; // Alias pour la classe Uuid

try {
    $bdd = new PDO('mysql:host=localhost;dbname=hiketime', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}

// Fonction pour vérifier si un champ est vide
function checkEmpty($field) {
    return empty(trim($field));
}

// Récupérer les valeurs des champs du formulaire
$uuidpaiement = uuidpaiement::uuid4()->toString(); // Utilisation de l'alias avec l'opération uuid4()

$nomtitulaireCarte = $_POST['name'] ?? '';
$numCarte = $_POST['numero'] ?? '';
$codeCarte = $_POST['code'] ?? '';

// Valider les champs requis
$requiredFields = [
    'name' => $nomtitulaireCarte,
    'numero' => $numCarte,
    'code' => $codeCarte,
];

try {
    $sql = "INSERT INTO paiement (idPaiement, nomtitulaireCarte, numCarte, codeCarte)
            VALUES (:uuid, :name, :numero, :code)";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([
        ':uuid' => $uuidpaiement,
        ':name' => $nomtitulaireCarte,
        ':numero' => $numCarte,
        ':code' => $codeCarte,

    ]);
    echo "L'insertion a réussi.";
} catch (PDOException $e) {
    echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
}
?>
