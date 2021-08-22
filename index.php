<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nokib Group & Company Limited</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img style="height: 50px; width: 100px;" src="images/pngtree-vector-web-search-icon-png-image_847735.jpg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#shoes">Shoes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#backpack">Backpack</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#watches">Watch</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#subscribe">Subscribe</a>
                </li>
              </ul>
            </div>
          </nav>
    </div>
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide orange-bg" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <h1>Mega LCD TV For Sports</h1>
                        <p>This is the best tv in the world for people who just want to waste time in front of tv.</p>
                        <h1 class="price">TK.1200</h1>
                      <form action="buy_form.php" method = "get"> 
                        <input type="submit" class = "buy-now-button" value = "Buy Now"> 
                    </form> 
                    </div>
                    <div class="col-md-5">
                        <img src="images/banner-images/tv.png" class="d-block w-100" alt="...">
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                  <div class="row  align-items-center">
                      <div class="col-md-7">
                        <h1>Cool Dude Headphone</h1>
                        <p>This is the best headphone in the world for people who just want to waste time in front of funky world.</p>
                        <h1 class="price">Tk.5000</h1>
                        <form action="buy_form.php" method = "get"> 
                        <input type="submit" class = "buy-now-button" value = "Buy Now"> 
                    </form>
                      </div>
                      <div class="col-md-5">
                        <img src="images/banner-images/headphone.png" class="d-block w-100" alt="...">
                      </div>
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="row align-items-center">
                      <div class="col-md-7">
                        <h1>X-Box for your living room</h1>
                        <p>This is the best x-box in the world for people who just want to waste time in front of fake sports.</p>
                        <h1 class="price">Tk.3000</h1>
                        <form action="buy_form.php" method = "get"> 
                        <input type="submit" class = "buy-now-button" value = "Buy Now"> 
                    </form>
                      </div>
                      <div class="col-md-5">
                        <img src="images/banner-images/xbox.png" class="d-block w-100" alt="...">
                      </div>
                  </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
    
    <div class="container categories">
      <div class="row">
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center cat1">
            <h1><a href="#watches">Watch</a></h1>
            <img src="images/categories/watch.png" alt="">
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center cat2">
            <h1><a href="#backpack">Bag</a> </h1>
            <img src="images/categories/bag.png" alt="">
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center cat3">
            <h1><a href="#shoes">Shoes</a> </h1>
            <img src="images/categories/shoes.png" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="container shoes" id="shoes">
      <h3>Shoes</h3>
      <div class="card-deck">
        <div class="card">
          <img src="images/shoes/shoe-1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Supply 350</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional.</p>
            <h5>Tk.5000</h5>
            <form action="buy_form.php" method = "get"> 
                        <input type="submit" class = "buy-now-button" value = "Buy Now>>"> 
                    </form> 
          </div>
        </div>
        <div class="card">
          <img src="images/shoes/shoe-2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Nike 360</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <h5>Tk.3200</h5>
            <form action="buy_form.php" method = "get"> 
                        <input type="submit" class = "buy-now-button" value = "Buy Now>>"> 
                    </form>
          </div>
        </div>
        <div class="card">
          <img src="images/shoes/shoe-3.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Red Airmax</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional.</p>
            <h5>Tk.3500</h5>
            <form action="buy_form.php" method = "get"> 
                        <input type="submit" class = "buy-now-button" value = "Buy Now>>"> 
                    </form>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container" id="backpack">
      <h3>Backpack</h3>
      <div class="card-deck">
        <div class="card">
          <img src="images/bags/bag-1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Red Bag</h5>
            <h5>Tk.1200</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
          <form action="buy_form.php" method = "get"> 
                        <input type="submit" class = "buy-now-button" value = "Buy Now>>"> 
                    </form>
          </div>
        </div>
        <div class="card">
          <img src="images/bags/bag-2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Blue Bag</h5>
            <h5>Tk.3200</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
          <form action="buy_form.php" method = "get"> 
                        <input type="submit" class = "buy-now-button" value = "Buy Now>>"> 
                    </form>
          </div>
        </div>
        <div class="card">
          <img src="images/bags/bag-3.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Black Bag</h5>
            <h5>Tk.1690</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class="card-footer">
          <form action="buy_form.php" method = "get"> 
                        <input type="submit" class = "buy-now-button" value = "Buy Now>>"> 
                    </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container watch" id="watches">
      <h3>Watch</h3>
      <div class="card-deck">
        <div class="card">
          <img src="images/watchs/4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Rolex</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional.</p>
            <h5>Tk.5000</h5>
            <form action="buy_form.php" method = "get"> 
                        <input type="submit" class = "buy-now-button" value = "Buy Now>>"> 
                    </form> 
          </div>
        </div>
        <div class="card">
          <img src="images/watchs/2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Pulsar</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <h5>Tk.3200</h5>
            <form action="buy_form.php" method = "get"> 
                        <input type="submit" class = "buy-now-button" value = "Buy Now>>"> 
                    </form>
          </div>
        </div>
        <div class="card">
          <img src="images/watchs/3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Fast Track</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional.</p>
            <h5>Tk.3500</h5>
            <form action="buy_form.php" method = "get"> 
                        <input type="submit" class = "buy-now-button" value = "Buy Now>>"> 
                    </form>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container d-flex align-items-center justify-content-center orange-bg" id="subscribe">
      <div>
        <h3>LET'S STAY IN TOUCH</h3>
        <h6>Get updates on sales, specials and more</h6>
        <input class="form-control" type="text">
        <button class="buy-now-button">SUBMIT</button>
        
      </div>
    </div>

    <footer>
      <small> ©2021.Nokib Group & Company </small>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>