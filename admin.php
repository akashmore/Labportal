
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Lab portal</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <hgroup>
  <h1>Admin log in here</h1>
</hgroup>
<form role="form" name="loginform" action="adminlog.php" method="post">
    <div class="group">
    <input type="text" name="name"><span class="highlight"></span><span class="bar"></span>
    <label>Name</label>
  </div>
 
  <div class="group">
    <input type="password" name="pass"><span class="highlight"></span><span class="bar"></span>
    <label>password</label>
  </div>
  <button type="submit" name="submit" class="button buttonBlue">Login
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
    </button>
</form>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
