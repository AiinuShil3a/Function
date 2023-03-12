<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>LOGIN</title>
    <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                <div class="row g-0">
                    <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">

                        <div class="text-center">
                        <img src="https://th.bing.com/th/id/OIP.JkuEs0MGXdWSprIi-KVZ_gHaJA?pid=ImgDet&w=493&h=600&rs=1"
                            style="width: 100px;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1">Login your game</h4>
                        </div>

                        <form  method="get" action="controller/runFunction.php" enctype="multipart/form-data">
                        <p>Please login to your account</p>

                        <div class="form-outline mb-4">
                            <input type="text" id="UElogin" name="UElogin" class="form-control"
                            placeholder="Email or Username" required />
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="Password" name="Password" class="form-control" 
                            placeholder="Password" required />
                        </div>

                        <div class="text-center pt-1 mb-5 pb-1">
                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log
                            in</button><br>
                            <a class="text-muted" href="#!">Forgot password?</a>
                        </div>

                        <div class="d-flex align-items-center justify-content-center pb-4">
                            <p class="mb-0 me-2">Don't have an account?</p>
                            <button type="button" class="btn btn-outline-danger">Create new</button>
                        </div>

                        </form>

                    </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <center>
                        <img src="https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl=https://raw.githubusercontent.com/katalon-studio/docs-images/master/katalon-recorder/docs/jtbd/conditional-cases/media/image3.jpeg"
                                    title="TestLogin" />
                    </center>
                        <br>
                        <h4 class="mb-4">Scan me to test login</h4>
                        <p class="small mb-0">
                        It’s hard to look at other faces when I only want to see yours.</p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>