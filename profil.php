<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "links.php" ?>
    <title>Profil</title>
    <script src="scripts/profil.js" defer></script>
</head>
<body>
    <?php require "nav.php" ?>
    <?php if(isset($_SESSION['uid'])): ?>
        <div id="profil"></div>
    <?php else : ?>
        <a href="login">vous n'êtes pas connecté, cliquez-ici.</a>
    <?php endif; ?>
</body>
</html>