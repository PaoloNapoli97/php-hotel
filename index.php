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

    // correzione

    $filtered_hotels = $hotels;

    if( !empty($_GET['park']) || $_GET['park'] == 0) {
      $temp_hotels = [];
      foreach ($filtered_hotels as $hotel) {
        if( $hotel['parking'] == $_GET['park']) { 
          $temp_hotels[] = $hotel;
        }
      }
      $filtered_hotels = $temp_hotels;
    }


  //   Bonus Correzione
  //   if( !empty($_GET['vote']) ) {
  //     $temp_hotels = [];
  //     foreach ( $filtered_hotels as $hotel ) {
  //         if( $hotel['vote'] >= $_GET['vote'] ) {
  //             $temp_hotels[] = $hotel;
  //         }
  //     }
  //     $filtered_hotels = $temp_hotels;
  // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
      <h3>Scegli Hotel con parcheggio</h3>
      <form action="index.php" class="my-3">
                <div class="mb-3">
                    <label for="parcheggio" class="form-label">Parcheggio</label>
                    <select id="parcheggio" name="park" class="form-select">
                        <option value="" selected>Nessuna preferenza</option>
                        <option value="1">Si</option>
                        <option value="0">No</option>
                    </select>                
                </div>

                <!-- BONUS CORREZIONE -->
                <!-- <div class="mb-3">
                    <label for="voto" class="form-label">Voto</label>
                    <select id="voto" name="vote" class="form-select">
                        <option value="" selected>Nessuna preferenza</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>                
                </div> -->
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Filtra</button>
                </div>
        </form>
  <table class="table table-dark">

    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Voti</th>
        <th scope="col">Voti</th>
        <th scope="col">Distanza Centro</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($filtered_hotels as $element) { ?>
      <tr>

        <td><?php echo $element['name']; ?></td>
        <td><?php echo $element['description']; ?></td>
        <td><?php echo $element['parking'] ? 'Si' : 'No'; ?></td>
        <td><?php echo $element['vote']; ?></td>
        <td><?php echo $element['distance_to_center']; ?></td>

      </tr>
      <?php } ?>
    </tbody>

</table>
</div>
</body>
</html>