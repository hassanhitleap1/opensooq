<?php

include './Validation.php';
include './Hamming.php';
include './LevenShtein.php';


$hammingValue="";

$levenshtein="";
if(isset($_POST)){
    if(isset($_POST["submitHamming"])){

        $hamming= new Hamming($_POST["inputa"],$_POST["inputb"]);
        $hammingValue=$hamming->hamming_dis();
    }

    if(isset($_POST["submitLevenshtein"])){
        $levenshtein=LevenShtein::levenshtein_dis($_POST["inputa"],$_POST["inputb"]);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="card">
  <h5 class="card-header">calculat hamming_dis</h5>
  <div class="card-body">
    <form action="" method="post">
    <div class="form-group">
        <label for="inputa">input a</label>
        <input type="text" class="form-control" id="inputa"  placeholder="Enter A" name="inputa">
        
    </div>
    <div class="form-group">
        <label for="inputa">input B</label>
        <input type="text" class="form-control" id="inputb"  placeholder="Enter B" name="inputb">
        
    </div>

    <button type="submit" class="btn btn-primary" name="submitHamming">calculat hamming_dis</button>
    </form>
  </div>
  <div class="card-footer">
      <h3> the ruslut is <?=$hammingValue?></h3>
  </div>
</div>


<div class="card">
  <h5 class="card-header">calculat levenshtein_dis</h5>
  <div class="card-body">
  <form action="" method="post">
    <div class="form-group">
        <label for="inputa">input a</label>
        <input type="text" class="form-control" id="inputa"  placeholder="Enter A" name="inputa">
        
    </div>
    <div class="form-group">
        <label for="inputa">input B</label>
        <input type="text" class="form-control" id="inputb"  placeholder="Enter B" name="inputb">
    </div>

    <button type="submit" class="btn btn-primary" name="submitLevenshtein">calculat levenshtein_dis</button>
    </form>
  </div>
  <div class="card-footer">
      <h3> the ruslut is  <?=$levenshtein?></h3>
  </div>
</div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>