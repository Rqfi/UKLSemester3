<!DOCTYPE html>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title></title>
</head>

<body style="background-color:#76BA99;">
  <div class="row" style="margin-top:50px;">
    <div class="col-md"></div>
    <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
      <form action="proses_login.php" method="post">
        <h3 style="color:#224B0C;" align="center"><b>LOGIN Laundry</b></h3>
        <center><img src="Foto/logo.jpg" style="width:350px"></center>
        Username:
        <input type="text" name="username" value="" class="form-control" >
        Password:
        <input type="password" name="password" class="form-control"><br>
        <center><input type="submit" name="login" class="btn btn-success" value="LOGIN"></center>
      </form>
    </div>
    <div class="col-md"></div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>