<?php
  include '../inc/header.php';
  include '../inc/backBtn.php';
  include '../classes/Cat.php';

  /*$m1 = new Munchkin('Princess', 1, 'fish', 'orange');
  var_dump($m1->getAttributes());*/
  $cats = [
    new Munchkin('Princess','male', 1, 'fish', 'orange'),
    new Munchkin('Hunter', 'female', 5, 'fish', 'grey'),
    new Munchkin('Cloud', 'female', 3, 'fish', 'white'),
    new Munchkin('Kitty', 'male', 6, 'fish', 'tricolor')
  ];
?>

<div class="card-group">
  <?php foreach($cats as $cat) : ?>
      <div class="card border-warning mb-3" style="max-width: 18rem;">
        <div class="card-header"><?php echo $cat->getAttributes()['name'] ?></div>
        <div class="card-body text-warning">
          <h5 class="card-title"><?php echo $cat->getAttributes()['species'] ?></h5>
          <p class="card-text">
            <ul>
              <li>Subspecies: <?php echo $cat->getAttributes()['subSpecies'] ?></li>
              <li>Sleeps: <?php echo $cat->getAttributes()['sleep'] ?> hours</li>
              <li>Keep: <?php echo $cat->getAttributes()['env'] ?></li>
              <li>Age: <?php echo $cat->getAttributes()['age'] ?></li>
              <li>Sex: <?php echo $cat->getAttributes()['sex'] ?></li>
              <li>Food: <?php echo $cat->getAttributes()['food'] ?></li>
            </ul>
          </p>
        </div>
      </div>
  <?php endforeach; ?>
</div>

<?php include '../inc/footer.php'; ?>
