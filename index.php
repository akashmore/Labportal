<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Lab portal</title>
  <link rel="stylesheet" href="css/style.css">
    <?php
      include "sidenav.php";
    ?>
    </head>

<body>
  <hgroup>
  <h1>Please Make Entry And Have A Good Day</h1>
</hgroup>
<form role="form" name="loginform" action="labreg.php" method="post" >
    <div class="group">
    <input type="text" name="prn"><span class="highlight"></span><span class="bar"></span>
    <label>PRN</label>
    </div>
    <div class="group">
    <input type="text" name="fname"><span class="highlight"></span><span class="bar"></span>
    <label>Full Name</label>
    </div>
    <div class="group">
    <input type="text" name="class"><span class="highlight"></span><span class="bar"></span>
    <label>Class</label>
    </div>
    <button type="submit" name="submit" class="button buttonBlue">Register
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
    </button>
    
</form>
    


    <script src="js/index.js"></script>

</body>
</html>
