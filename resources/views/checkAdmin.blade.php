<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Yes-Ooh Admin</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="../assets/img/navlogo.svg.png" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="../css/styles.css" rel="stylesheet" />
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-primary">

  <div class="position-relative mt-4">
    <!-- <div class="container" style="height: 20px;">
      <a class="w-25 h-25" href="#page-top"><img src="../assets/img/navlogo.svg.png" alt="..." /></a>
    </div> -->
    <h1 class="m-4 text-center">
      Yes-Ooh admin Panal
    </h1>
    <div class="card container mt-4">
      <form action="{{ route('check') }}"  method="POST">
      @csrf
        <div class="mb-3 card-body">
          <label for="exampleInputPassword1" class="form-label">please enter the admin Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <button type="submit" class="btn btn-danger">Submit</button>
      </form>
    </div>
  </div>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="../js/scripts.js"></script>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <!-- * *                               SB Forms JS                               * *-->
  <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>