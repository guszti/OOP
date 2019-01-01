<?php include '../inc/header.php';
      include '../inc/backBtn.php';
      include '../classes/Rabbit.php';

      $rabbits = [
        new Angora(1, 'grey'),
        new Angora(3, 'white'),
        new Angora(5, 'blue'),
        new Angora(1, 'black')
      ];

      Angora::getCount();
?>

<div class="card-group">
  <?php foreach($rabbits as $rabbit) : ?>
      <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-header"><?php echo $rabbit->getAttributes()['sub'] ?></div>
        <div class="card-body text-success">
          <h5 class="card-title"><?php echo $rabbit->getAttributes()['color'] ?></h5>
          <p class="card-text">
            <ul>
              <li>Age: <?php echo $rabbit->getAttributes()['age'] ?></li>
              <li>Food: <?php echo $rabbit->getAttributes()['food'] ?></li>
            </ul>
          </p>
        </div>
      </div>
  <?php endforeach; ?>
</div>
<h1 class="text-center">Currently <?php echo Angora::getCount(); ?> angora rabbits are available.</h1>

<?php include '../inc/footer.php'; ?>
