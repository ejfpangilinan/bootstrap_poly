<!DOCTYPE html>
<html lang="en">

<html>

<head>
  <meta charset="utf-8">
  <title>Quotes and Polygons</title>
  <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.css">
  <link href='https://fonts.googleapis.com/css?family=Barlow Condensed' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Ek Mukta' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>


<body>

<?php
//OOP php for polygons
class Polygons {
  // Properties
  //for polygon computations
  public $sides;    //number of sides
  public $points; //array of point coordinate for polygon
  //for designs
  public $poly_color;
  //for quotes
  public $font;
  public $font_color;
  public $font_size;

  //METHODS
  function __construct($sides, $poly_color, $font, $font_color) { //constructor
    ($sides>=3)? $this->sides=$sides : $this->sides=3;
    $this->poly_color = $poly_color;
    $this->font = $font;
    $this->font_color = $font_color;
  }

  function generate_points($x, $y, $radius){ //function for creating coordinate for regular polygon
    $sides = $this->sides;
    $this->points = "";

    $angle = (2 * pi() / $sides);



    for ($i = 0; $i < $sides; $i++)
    {
        $xy = "";
        $xco = (int) $x + $radius * sin($i * $angle);
        $yco = (int) $y + $radius * cos($i * $angle);
        $xy = $xco.",".$yco." ";
        $this->points = $this->points.$xy;
    }
  }

  function render_poly($quotes){

    echo "<svg height=\"300\" width=\"300\">";
    echo "<polygon points=\"$this->points\" style=\"fill:$this->poly_color; stroke:black;stroke-width:1\"/>";
    echo "<foreignObject x=\"50\" y=\"100\" width=\"200\" height=\"300\" >";
    echo "<text xmlns=\"http://www.w3.org/1999/xhtml\" x=\"50%\" y=\"40%\" dominant-baseline=\"middle\" fill = \"$this->font_color\" text-anchor=\"middle\" style=\"font-size: 15px; font-weight:bold; color: $this->font_color\">$quotes</text>";
    echo "</foreignObject>";
    echo "</svg>";
  }

}

function rand_color() {
    return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
}

?>




<div class="col">
  <div  class = "header" >Quotes and Polygons</div>
  <img class= "hbg" src="header.jpg" alt="My Artwork" width="100%" height="auto">
</div>

<div class="barlow">
    <div class="row">
      <div class="col">
        <?php
          $bcol = rand_color();
          $cox = 150;
          $coy = 150;
          $rad = 150;
          $square = new Polygons(3, $bcol, "Ek Mukta", "White");
          $square->generate_points($cox,$coy,$rad);
          $square->render_poly("“Love For All, Hatred For None.” –Khalifatul Masih III");
        ?>
      </div>
      <div class="col" >
          <?php
            $bcol = rand_color();
            $square = new Polygons(4, $bcol, "Ek Mukta", "White");
            $square->generate_points(150,150,150);
            $square->render_poly("“Live as if you were to die tomorrow. Learn as if you were to live forever.” –Mahatma Gandhi");
          ?>
      </div>
      <div class="col" >
          <?php
            $bcol = rand_color();
            $square = new Polygons(5, $bcol, "Ek Mukta", "White");
            $square->generate_points(150,150,150);
            $square->render_poly("“That which does not kill us makes us stronger.” – Friedrich Nietzsche");
          ?>
      </div>
      <div class="col" >
          <?php
            $bcol = rand_color();
            $square = new Polygons(6, $bcol, "Ek Mukta", "White");
            $square->generate_points(150,150,150);
            $square->render_poly("“Be who you are and say what you feel, because those who mind don’t matter and those who matter don’t mind.” – Bernard M. Baruch");
          ?>
      </div>
      <div class="col" >
        <?php
          $bcol = rand_color();
          $square = new Polygons(7, $bcol, "Ek Mukta", "White");
          $square->generate_points(150,150,150);
          $square->render_poly("“We must not allow other people’s limited perceptions to define us.” – Virginia Satir");
        ?>
      </div>
    </div>
</div>

<div class="mukt">
    <div class="row">
      <div class="col">
        <?php
          $bcol = rand_color();
          $square = new Polygons(8, $bcol, "Barlow Condensed", "White");
          $square->generate_points(150,150,150);
          $square->render_poly("“Be yourself; everyone else is already taken.” – Oscar Wilde");
        ?>
      </div>
      <div class="col">
        <?php
          $bcol = rand_color();
          $square = new Polygons(9, $bcol, "Barlow Condensed", "White");
          $square->generate_points(150,150,150);
          $square->render_poly("“If you cannot do great things, do small things in a great way.” – Napoleon Hill");
        ?>
      </div>
      <div class="col">
        <?php
          $bcol = rand_color();
          $square = new Polygons(10, $bcol, "Barlow Condensed", "White");
          $square->generate_points(150,150,150);
          $square->render_poly("“If opportunity doesn’t knock, build a door.” – Milton Berle");
        ?>
      </div>
      <div class="col" >
        <?php
          $bcol = rand_color();
          $square = new Polygons(11, $bcol, "Barlow Condensed", "White");
          $square->generate_points(150,150,150);
          $square->render_poly("“Wise men speak because they have something to say; fools because they have to say something.” – Plato");
        ?>
      </div>
      <div class="col">
        <?php
          $bcol = rand_color();
          $square = new Polygons(12, $bcol, "Barlow Condensed", "White");
          $square->generate_points(150,150,150);
          $square->render_poly("Strive not to be a success, but rather to be of value.” – Albert Einstein");
        ?>
      </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>



</html>