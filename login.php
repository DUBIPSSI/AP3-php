<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "links.php" ?>
    <title>Connexion</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="scripts/login.js"  defer></script>

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
            <input id="signupmail" type="text" name="mail" placeholder="Mail">
            <input id="signupmdp"  type="password" name="password" placeholder="Mot de passe">
            <button id="signinbtn">Se connecter</button>
        </div>
        <div id="signupForm" class="forms notSelectedForm">
            <h2>S'inscrire</h2>
            <div class="formContainer">
                <input id="signupname" type="text" name="firstname" placeholder="Prénom" >
                <input id="signuplastname"  type="text" name="lastname" placeholder="Nom" >
                <input  id="signupemail"  type="mail" name="mail" placeholder="Mail" >
                <input  id="signupbirthdate"  type="date" name="birthDate" placeholder="Date de naissance">
                <input id="signupcodepostal"   type="number" name="codePostal" placeholder="Code postale">
                <select id="signuprole"  name="role">
                    <option value="random">random</option>
                    <option value="Association">Association</option>
                </select>
                <input id="signuppassword"  type="password" name="password" placeholder="Mot de passe">
                <input type="password" name="passwordConfirmation" placeholder="Confirmation du mot de passe">
            </div>
            <button id="signupbtn">S'inscrire</button>
        </div>
    </div>
</body>
</html>

<script>

// document.addEventListener('click', (e) => {
//     if (e.target.id == "signinbtn") {
//         const form = e.target.closest("#signinForm");
     
//         const email = form.querySelector("#signupmail").value;
//         const password = form.querySelector("#signupmdp").value;

//         axios.get('http://localhost:3000/post/login', {

//             email: email,
//             password: password,
        

//         })
//             .then(res=>{console.log(res)})
//             .catch(error => {
//                 console.log(error)
//             })
//     }
    
// })

</script>