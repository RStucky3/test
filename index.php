<!doctype html>
<html lang="en">
  <head>
    <link rel ="icon" href ="fotos/profielfoto.jpeg" type ="image/x-icon"> <!-- Icon van de webpagina-->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--Stylesheet-->
    <link rel="stylesheet" href="CSS/StyleSheet.css">
    <title>Project Portfolio</title> <!--Titel-->
  </head>
  <body>
  <div class="bovenbalk"> <!--Header-->
    <div class="Header"> <!--Bovenbalk met grid, gesoorteerde vlakken van a t/m f-->
      <div class="boxa"> 
        <div id="topNav" class="navigation"> <!--Navigation knop-->
            <span id="closebtn" onclick="navToggle()">
                <span class="line1"></span>
                <span class="line2"></span>
                <span class="line3"></span>
            </span>
          <div class="logo"> 
            <img src=""/>
          </div>
          <ul class="menulist">
            <li><a class="menuitems" href="index.php">Home</a></li>
            <li><a class="menuitems" href="subpages/Contact.html">Contact</a></li>
            <li><a class="menuitems" href="subpages/Ervaring.html">Ervaring</a></li>
          </ul>			
        </div>        
        <div id="main">
        </div>
      </div>
      <div class="boxb"></div>
      <div class="boxc"></div>
      <div class="boxd"></div>
      <div class="boxe"><h1></h1></div>
      <div class="boxf"><br><a href="subpages/Contact.html"><button class="button"><span>Contact </span></button></a></div> <!--Knop naar contact pagina-->
      <br>
      </div>
    </div>
  </div>

    <div class="container"> 
      <center>
        <hr>
        <input id="checkbox" type="checkbox">
      <div class="logo"> <!--logo-->
        <hr>
        <a href="index.html">
            <img src="fotos/profielfoto.jpeg" class="profielfoto" 
            alt="profielfoto" 
            height="150" 
            width="150">
        </a>
      </div>
      <hr>
    

    
        <h2>Welkom op mijn Portfolio</h2> <!--Welkom-->
    </div>  
    <div class="container-fluid">
        <br>
        <div class="textbox"> <!--Over mij-->
            <div class="text">
                <h1>Over mij</h1>
                <p>ik ben Ruben Stucky en kom uit Delft. 
                    Daar ben ik getogen, geboren ben ik in Dordrecht. 
                    Ik ben een schapenkop als de dortenaren zichzelf noemen. 
                    In Delft woon ik met mijn moeder en drie katten. 
                    Ik hou van zwemmen, en als ik tijd heb kook ik graag. 
                    Als bijbaan werk ik bij de <a href="https://www.ah.nl" style="color:red">Albert Heijn</a>, <!-- href Link naar (favoriete) website -->
                    hier voer ik verschillende functies uit. 
                    Ik ben sociaal en vindt het fijn om met andere te zijn maar ik kan mezelf ook goed vermaken. 
                    Ik vind het leuk om mijzelf uit te dagen en is het mijn bedoeling de lat altijd hoog te leggen bij nieuwe uitdagingen.</p>
            </div>
        </div>   
    </div>

  <?php
  include_once ("Classes/eigenschappen.php");
  $db = new PDO("mysql:host=localhost;dbname=portfolio","root","");

  $query = $db->prepare("SELECT * FROM `eigenschappen` WHERE `sterkzwak` = 'sterk'");

  $query->execute();

  $result = $query->fetchAll(PDO::FETCH_CLASS, "eigenschappen");
  ?>

    <div class="container">
        <div class="punten"> <!--Sterke en zwakke punten-->
            <div class="row">
                <div class="col-6">
                    <div class="punt">				
                        <h2>Sterke punten</h2>  <!--sterke-->
                            <ul> <!-- Unordered List -->
                                <?php global $eigenschappen?>
                                <?php foreach ($result as $eigenschap): ?>
                                    <li><p><?= $eigenschap->eigenschap ?></p></li>
                                <?php endforeach; ?>
                            </ul>
                    </div>
                </div>
                <?php
                include_once ("Classes/eigenschappen.php");
                $db = new PDO("mysql:host=localhost;dbname=portfolio","root","");

                $query = $db->prepare("SELECT * FROM `eigenschappen` WHERE `sterkzwak` = 'zwak'");

                $query->execute();

                $result = $query->fetchAll(PDO::FETCH_CLASS, "eigenschappen");
                ?>
                <div class="col-6">
                    <div class="punt2">
                        <h2>Zwakken punten</h2> <!--zwakke-->
                        <ul>
                            <?php global $eigenschappen?>
                            <?php foreach ($result as $eigenschap): ?>
                                <li><p><?= $eigenschap->eigenschap ?></p></li>
                            <?php endforeach; ?>
                        </ul>					
                    </div>
                </div>
            </div>
        </div>
        </div>
        
      
    </center>
    <br><br>
    <footer> <!--Footer-->
      <div class="row">
        <div class="col-3 col-sm-4" style="text-align: center;">
          <p>Ruben&nbspStucky</p>
        </div>
        <div class="col-5 col-sm-4" style="text-align: center;" >
          <p>ROC&nbspMondriaan</p>
        </div>
        <div class="col-4 col-sm-4" style="text-align: center;">
          <p>T1Nb</p>
        </div>
      </div>
  </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="JS/myscripts.js"></script>
  </body>
</html>