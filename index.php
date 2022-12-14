<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!-- <ul>
        <?php foreach($hotels as $element) { ?>
        <li>
            <h2><?php echo $element['name']; ?></h2>
            <p><?php echo $element['description']; ?></p>
            <p><?php echo $element['parking']; ?></p>
            <p><?php echo $element['vote']; ?></p>
            <p><?php echo $element['distance_to_center']; ?></p>
        </li>
        <?php } ?>
    </ul> -->
    <div class="container">
    <table class="table table-dark">

  <thead>
    <tr>
    <?php foreach($hotels as $element) { ?>
      <th scope="col">#</th>
      <th scope="col"><?php echo $element['name']; ?></th>
      <?php } ?>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php foreach($hotels as $element) { ?>
      <th scope="row">1</th>
      <td><?php echo $element['description']; ?></td>
      <?php } ?>
    </tr>
    <tr>
    <?php foreach($hotels as $element) { ?>
      <th scope="row">2</th>
      <td><?php echo $element['vote']; ?></td>
      <?php } ?>
    </tr>
    <tr>
    <?php foreach($hotels as $element) { ?>
      <th scope="row">3</th>
      <td><?php echo $element['distance_to_center']; ?></td>
      <?php } ?>
    </tr>
  </tbody>

</table>
</div>
</body>
</html>