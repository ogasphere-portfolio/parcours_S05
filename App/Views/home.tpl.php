
<section class="hero">
    <div class="container">
     
      <!-- Hero Content-->
      <div class="hero-content pb-5 text-center">
        <h1 class="hero-heading">Les personnages de Sonic</h1>
       
      </div>
    </div>
  </section>

  <section class="products-grid">
    <div class="container-fluid">
      
      <div class="row">
        <?php foreach($Characters as $character) : ?>
        <!-- product-->
        <div class="product col-xl-3 col-lg-4 col-sm-6">
          <div class="product-image">
            <a href="<?= $absoluteURL ?>/catalogue/produit/<?= $character->getId() ?>" class="product-hover-overlay-link">
              <img src="<?= $absoluteURL ?>/assets/images/<?= $character->getpicture() ?>" alt="product" class="img-fluid">
            </a>
          </div>
          
          <div class="py-2">
              <h3 class="h2 text-uppercase mb-1"><a href="<?= $absoluteURL ?>/catalogue/produit/<?= $character->getId() ?>" class="text-dark"><?= $character->getName() ?></a></h3>
          </div>
        </div>
        <!-- /product-->
        <?php endforeach; ?>
      </div>
      
    </div>
  </section>
