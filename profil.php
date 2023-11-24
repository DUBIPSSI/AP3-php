<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "links.php" ?>
    <title>Profil</title>
    <script src="scripts/login.js" defer></script>
</head>
<body>
    <?php require "nav.php" ?>
    <div id="loginContainer">
        <div id="onglets">
            <p id="signinOnglet" class="selectedOnglet">Se connecter</p>
            <p id="signupOnglet">S'enregistrer</p>
        </div>
        <div id="signinForm" class="forms">
            <h2>Se connecter</h2>
            <input type="text" name="mail" placeholder="Mail">
            <input type="password" name="password" placeholder="Mot de passe">
            <button>Se connecter</button>
        </div>
        <div id="signupForm" class="forms notSelectedForm">
            <h2>S'inscrire</h2>
            <div class="formContainer">
                <input type="text" name="firstname" placeholder="Prénom">
                <input type="text" name="lastname" placeholder="Nom">
                <input type="mail" name="mail" placeholder="Mail">
                <input type="date" name="birthDate" placeholder="Date de naissance">
                <input type="number" name="codePostal" placeholder="Code postale">
                <select name="role">
                    <option value="random">random</option>
                    <option value="Association">Association</option>
                </select>
                <input type="password" name="password" placeholder="Mot de passe">
                <input type="password" name="passwordConfirmation" placeholder="Confirmation du mot de passe">
            </div>
            <button>S'inscrire</button>
        </div>
    </div>
</body>
</html>