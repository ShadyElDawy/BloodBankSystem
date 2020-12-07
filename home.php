<link rel="stylesheet" type="text/css" href="style1.css">
<!DOCTYPE html>
<html lang="en">
<head>

  <title>
    Blood bank
  </title>
  <meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style1.css">

</head>
<body>
  <div class="navbar" class="container">
  <nav class="navbar">

    <div ><img src="LOGO.png" id="rr" class="logo">
    <div id="myDIV" class="con">
    <a class="btn active" href="home.php"><span class="glyphicon glyphicon-home"></span>      Home</a>

    <a class="btn" href="don.php"><span class="glyphicon glyphicon-tint"></span>      Places of donation</a>
    <a class="btn" href="rel.php">Relationship between blood group</a>
    <a class="btn" href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
    <a  class="btn" href="manager/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
    </div>
  </div>
</div>
</div>
<div
  <div id="red"  style="margin-top: 5px">
      <div id="wh" class="row">
          <div class="col-md-8 col-md-offset-2">
            <div  class="container">
    <br/>
    <h1 align="center">Enter Your Blood Type</h1>
    <div class="form-group">
      <div id="new-search-area" class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
        <input type="text" id="myInputTextField" placeholder="Blood type..">
      </div>
    </div>
              <table id="tablee" class="table table-bordered table-hover">
                  <thead>
                      <tr>
                          <td>Name</td>
                          <td>Quantity</td>
                          <td>price</td>
                          <td>Hospital</td>
                      </tr>
                  </thead>
                  <tbody>
                    <?php
                      require'nee.php'; ?>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
  <script
          src="http://code.jquery.com/jquery-3.2.1.min.js"
          integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
          crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript" src="mine.js"></script>
</body>
</html>
