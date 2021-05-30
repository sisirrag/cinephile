<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>CinePhile</title>
</head>
<body style="background-color:black;font-color:white;" >
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php" style="color:rgb(189, 10, 10)"> CinePhile</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="movie.php">Movies</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="signup.php">Sign Up</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <!-- Image and text -->

  <div class="container">
      <div class="row">
          <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
              <table class="table table-borderless">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://wallpapercave.com/wp/wp1817975.jpg" class="d-block w-100" alt="..." width="200" height="600">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Interstellar</h5>
                          
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="https://wallpapercave.com/wp/wp1867290.jpg" class="d-block w-100" alt="..." width="200" height="600">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>John Wick</h5>
                           </div>
                      </div>
                      <div class="carousel-item">
                        <img src="https://wallpapercave.com/wp/wp4138507.jpg" class="d-block w-100" alt="..." width="200" height="600">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Prestige</h5>
                           </div>
                      </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

              </table>
            </div>
      </div>
  </div>
  <div class="container">
      <div class="row">
      <div class="col">
      <h1 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:30px;color:white;"><center>
            <b> Trending</b> Movies</center></h1>
<ul class="list-group">
    <br>

    
  
    <li class="list-group-item list-group-item-secondary"> Interstellar</li>
    <li class="list-group-item list-group-item-dark">Inception</li>
    <li class="list-group-item list-group-item-secondary">Prestige</li>
    <li class="list-group-item list-group-item-dark">Predestination</li>
    <li class="list-group-item list-group-item-secondary">Eternal Sunshine of the spotless mind</li>
    <li class="list-group-item list-group-item-dark">Trainspotting</li>
    <li class="list-group-item list-group-item-secondary">Drive</li>
    <li class="list-group-item list-group-item-dark">Enemy</li>
  </ul>
      </div>
          <div class="col">
            
            <table class="table table-borderless">
                <tr>
                    <td></td>
                    <td><h1>CinePhile <span class="badge bg-danger">  Login</span></h1>
                  </tr>
                       <tr>
                          <td><center style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:20px;color:light;">Username</center></td>
                           <td><input type="text" class="form-control"></td>
                       </tr>
                       <tr>
                           <td><center style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:20px;color:light;">Password</center></td>
                           <td><input type="text" class="form-control"></td>
                       </tr>
                       <tr>
                           <td></td>
                           <td><button class="btn btn-outline-light">Submit</button></td>
                       </tr>
            </table>
          </div>
          
      </div>
  </div>
  <div class="container">
    <div class="row">
        <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
          <br>
          
</div>
</div>
</div>
 <br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>