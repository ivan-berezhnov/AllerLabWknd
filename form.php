<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CMSarch Twitter</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script
    src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
      <h1>Twitter JSON</h1>

      <form method="GET" action="index.php">
        <div class="form-group">
          <label for="screen_name">User name in Twitter:</label>
          <input class="form-control" id="screen_name" placeholder="ViUnge"
                 value="ViUnge" name="screen_name" type="text">
          <span id="name-format" class="help">Example: Name</span>
        </div>

        <div class="form-group">
          <label for="twitts">Twitter count:</label>
          <input class="form-control" id="twitts" placeholder="10"
                 value="10" name="twitts" type="text">
          <span id="name-format" class="help">Example: 10</span>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" name="object"> Show JSON as Object.
          </label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
    <div class="col-lg-4"></div>
  </div>
</div>
</body>
</html>
