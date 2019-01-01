<?php
  include '../inc/header.php';
  include '../inc/backBtn.php';
  include '../classes/Dog.php';

  $dogs = [
    new Malamute(4, 'reindeer', 'Fluffy', 'male'),
    new Malamute('4 months', 'reindeer', 'Dude', 'female'),
    new Malamute(1, 'reindeer', 'Paw', 'female'),
    new Malamute(2, 'reindeer', 'Giant', 'female'),
    new Malamute('2 months', 'reindeer', 'SnowFlake', 'male')
  ];
?>

<div class="card-group">
  <?php foreach($dogs as $dog) : ?>
      <div class="card border-primary mb-3" style="max-width: 18rem;">
        <div class="card-header"><?php echo $dog->getAttributes()['name'] ?></div>
        <div class="card-body text-primary">
          <h5 class="card-title"><?php echo $dog->getAttributes()['species'] ?></h5>
          <p class="card-text">
            <ul>
              <li>Subspecies: <?php echo $dog->getAttributes()['subSpecies'] ?></li>
              <li>Age: <?php echo $dog->getAttributes()['age'] ?></li>
              <li>Sex: <?php echo $dog->getAttributes()['sex'] ?></li>
              <li>Food: <?php echo $dog->getAttributes()['food'] ?></li>
            </ul>
          </p>
        </div>
      </div>
  <?php endforeach; ?>
</div>

<?php include '../inc/footer.php'; ?>
