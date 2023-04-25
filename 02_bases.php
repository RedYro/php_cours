<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PHP Cours">
    <meta name="author" content="Lyfoung Grégory">
    <title>PHP Cours - Bases</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="01_index.php"><img src="assets/img/logo.png" alt="Logo PHP"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="01_index.php">Introduction</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="02_bases.php">Bases PHP</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- fin navbar -->
    <header class="p-5 m-4 bg-light rounded-3 border ">
        <section class="container py-5">
            <h1 class="display-5 fw-bold">Introduction au PHP</h1>
            <p class="col-md-12 fs-4"> PHP, ce sigle est un acronyme récursif  <span>Préprocesseur Hypertexte PHP</span> (PHP Hypertext Preprocessor). Il s'agit d'un langage de script côté serveur open source utilisé pour le développement Web dynamique et peut être intégré dans des codes HTML, notez bien qu'un navigateur ne comprend pas le PHP.</p> 
        </section>
    </header>
    <!-- fin header -->
    <main class="container-fluid px-5">
        <div class="row border p-5 mt-5">
            <div class="col-sm-12 col-md-6">
                <h2>1- Balises PHP</h2>
                <p>Pour ouvrir un passage en PHP, on utilise la balise <span><code>&lt;?php</code></span></p>
                <p>Pour fermer un passage en PHP, on utilise la balise <span><code>?></code></span></p>
            </div>
            <div class="col-sm-12 col-md-6">
                <h2>2- Commentaires PHP</h2>
                <p>Pour faire un commentaire sur une seule ligne, on utilise : </p>
                <ul>
                    <li><em>// commentaire</em></li>
                    <li><em># commentaire</em></li>
                </ul>
                <?php
                    // Un premier commentaire
                    # Un deuxième commentaire 
                ?>
                <p>Pour faire des commentaires sur plusieurs lignes, on utilise : </p>
                <ul>
                    <li><em>/* commentaire */</em></li>
                </ul>
                <?php 
                    /* 
                    *commentaire multi-lignes 1
                    *commentaire multi-lignes 2
                    *commentaire multi-lignes 3
                    *commentaire multi-lignes 4
                    */
                ?>
            </div>
            <div class="col-sm-12">
                <h2>3- Extensions ".php" vs ".html"</h2>
                <p>En dehors des balises php, il est possible d'écrire du code HTML dans un fichier ayant l'extension ".php". Ce qui n'est pas possible dans un fichier ".html", cela est du au au faut que les fichiers ".php" sont traités par le serveur en tant que code PHP et peuvent inclure des instructions PHP et HTML, tandis que les fichiers ".html" ne sont pas traités comme du code PHP.</p>
                <p>Si le ficher ".php" ne contient que du script PHP, il n'est pas obligatoire de fermer la balise <span>&lt;?php</span> à la fin du script. Cependant, il est recommandé de fermer la balise afin d'éviter tous problèmes potentiels avec l'affichage du contenu HTML ou des erreurs de syntaxe si vous l'on ajoute du code HTML après les instructions PHP dans le même fichier. De plus, certains standards de codage et bonnes pratiques recommandes de fermer toutes les balises PHP pour une meilleure lisibilité et maintenabilité du code.</p>
            </div>
            <div class="col-sm-12">
                <h2>4- Affichage</h2>
                <p>Pour afficher du texte sur notre page à partir d'un script PHP, on peut utiliser : </p>
                <ul>
                    <li>L'instruction <span>echo</span> : permet d'effectuer un affichage. On peut y insérer du code HTML (ex : voir code sur VSC)</li>
                    <div class="alert alert-primary w-50">
                        <?php 
                            echo "Hello Echo World !";
                        ?>
                    </div>
                    <li>L'instruction <span>print</span> : autre instruction permettant d'effectuer un affichage. On peut aussi y inséser du code HTML (ex : voir code sur VSC)</li>
                    <div class="alert alert-primary w-50">
                        <?php 
                            print "Hello Print World !"
                        ?>
                    </div>
                    <li>Les instructions <span>var_dump()</span> et print_r() : permettent d'afficher du contenu mais sert principalement pour le debug. Ces deux fonctions d'affichage permettent d'analyser dans le navigateur le contenu d'une variable par exemple</li>
                </ul>
            </div>
        </div>
    </main>
    <footer>
        <div class="d-flex justify-content-evenly align-items-center bg-dark text-light p-3">
            <a class="nav-link" target="_blank" href="https://www.php.net/manual/fr/">Documentation PHP</a>
            <a class="nav-link" href="01_index.php"><img src="assets/img/logo.png" alt="Logo PHP"></a>
            <a class="nav-link" target="_blank" href="https://devdocs.io/php/">DevDocs</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>