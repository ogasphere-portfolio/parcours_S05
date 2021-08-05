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

  <table>

  <thead>
    <tr class="odd">
      <td class="column1"></td>
      <th scope="col" abbr="description">Qui suis-je</th>
      <th scope="col" abbr="type">Mon type</th>
      <th scope="col" abbr="image">Ma photo</th>
    </tr>
  </thead>

  <tbody>

    
      <?php foreach ($Characters as $character) : ?>
        <tr>
      <th scope="row" class="column1"><?= $character->getName() ?></th>
      <td><?= $character->getdescription() ?></td>
      <td><?= $character->typeName ?></td>
      <td><img src="<?= $absoluteURL ?>/assets/images/<?= $character->getpicture() ?>" alt="product" class="img-fluid"></td>
     
    </tr>
      <?php endforeach; ?>
    
      </tbody>
</table>
  </div>
</section>

