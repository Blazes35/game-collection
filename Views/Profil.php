<?php
$title = "Profil";
ob_start();
?>
<link rel="stylesheet" href="Assets/CSS/Profil.css">
<body>
    <div class="profil">
        <div class="titre">
            <h1>Mon profil</h1>
        </div>
    </div>

    </div>

</body>
<?php
    $content = ob_get_clean();
    include 'Layout.php';
?>