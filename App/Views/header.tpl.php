
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="<?= $absoluteURL ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $absoluteURL ?>/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= $absoluteURL ?>/assets/css/styles.css">
  <title>oShop</title>
</head>
<body>
  <header>
    
    <nav class="navbar navbar-expand-lg navbar-sticky navbar-airy navbar-light">
      <div class="container-fluid">
        <!-- Navbar Header  -->
        <a href="index.html" class="navbar-brand">Sonic</a>
        <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
          aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
        <!-- Navbar Collapse -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
          
        <ul class="navbar-nav mx-auto">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a href="<?= $altoRouter->generate('home') ?>" class="nav-link active">Home</a>
            </li>
            <li class="nav-item">
              <a href="<?= $altoRouter->generate('home') ?>" class="nav-link">Créateurs du jeu</a>
            </li>
            
          </ul> 
        </ul>
          
        </div>
      </div>
    </nav>
  </header>
