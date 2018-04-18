<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>E-shop</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
    <?php wp_head(); ?>
    </head>
  <body>
    <section class="top">
      <ul>
        <li id="best-offer">
          <a href="#"><p>Geriausias pasiūlymas šiandien</p></a>
        </li>
        <li >
          <form class="search" action="" method="post">
            <input id="s" type="text" name="search" value="" placeholder="Ką surasti?" >
            <input id="bpress" type="submit" name="button" value="Ieškoti">
          </form>
        </li>
        <li>
          <!-- <a href="#"><p id="bord">Jūsų krepšelis<i class="fa fa-cart-arrow-down"></i></p></a> -->
          <a href="http://localhost/cart/" class="added_to_cart2 wc-forward" title="View cart">Jūsų krepšelis</a>
        </li>
        <li id="sub">
          <a href="#"><i class="fa fa-user-circle"></i><i class="fa fa-caret-down"></i></a>
            <ul>
              <li> <a href="http://localhost/my-account/" class="wc-auth-login">Prisijungti / Užsiregistruoti  </a></li>

            </ul>
        </li>
        <li id="color-red">
          <a href="#"><p>Susisiekite su mumis</p></a>
        </li>
      </ul>
    </section>

    <!-- section header 2 -->
    <section class="header2">
      <div class="head2-left">
      <div class="logo">
        <a href="#">The Best Store</a>
      </div>
        <ul>
          <li id="h2l"  > <a  href="#">Artimiausios akcijos</a></li>
          <li id="rbord">/</li>
          <li id="h2l"> <a  href="#">Apie mus</a> </li>
          <li id="rbord">/</li>
          <li id="h2l"> <a  href="#">Geriausi pasiūlymas</a></li>
          <li id="rbord">/</li>
          <li id="h2l"> <a href="#">Mes rekomendojame</a> </li>
        </ul>
      </div>

    </section>

    <!-- section header 2 -->
    <section class="header3">
        <ul>
          <li> <a href="http://localhost/?product-page=1"><i class="fa fa-home"></i>Home</a> </li>
        </ul>
        <div class="cont">
          <ul>
            <li> <a href="#"><i class="fa fa-phone"></i>+37000000</a> </li>
            <li> <a href="#"><i class="fa fa-envelope-open"></i>email@email.com</a> </li>
          </ul>
        </div>
    </section>

    <main>
      <div class="left-menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- <a class="navbar-brand" href="#">Meniu</a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/product-category/vaisiai/">Vaisiai-Daržovės</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/product-category/gerimai/">Gėrimai</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="http://localhost/product-category/pusfabrikaciai/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pusfabrikačiai
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="http://localhost/product-category/konditerija/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Konditerija
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Bandelės</a>
                    <a class="dropdown-item" href="#">Sausainiai</a>
                  </div>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Prekės gyvunams
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Kačių maistas</a>
                    <a class="dropdown-item" href="#">Šunų maistas</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Įvairios prekės
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Aliejus</a>
                    <a class="dropdown-item" href="#">Bulvytės fri</a>
                    <a class="dropdown-item" href="#">Makaronai</a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>


          <?php $slider_args = array(
            'post_type' =>'slider',
            'post_per_page' => -1,
          );
          $slider = new WP_Query( $slider_args );
           ?>
          <!-- slider  -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php for($i = 0; $i < $slider->post_count; $i++):  ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i ?>" class="<?php if($slider->current_post == 0){echo 'active';} ?>"></li>
            <?php endfor; ?>
        </ol>
          <div class="carousel-inner">
            <?php while( $slider->have_posts() ) : $slider->the_post(); ?>
            <div class="carousel-item <?php if($slider->current_post == 0){echo 'active';} ?>">
              <img class="d-block w-100" src="<?php the_post_thumbnail_url(); ?>" alt="">
              <div class="carousel-caption d-none d-md-block">
                <h5>Geriausios Prekės Jums</h5>
                <p>Už Geriausią kainą</p>
              </div>
            </div>
            <?php endwhile; ?>
        <!-- <div class="carousel-item">
              <img class="d-block w-100" src="wp-content/themes/e-shop/assets/images/16.jpg" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Geriausias Maistas Jums</h5>
                <p>Už Geriausią kainą</p>
              </div>
            </div> -->
            <!-- <div class="carousel-item">
              <img class="d-block w-100" src="wp-content/themes/e-shop/assets/images/17.jpg" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Geriausias Maistas Jums</h5>
                <p>Už Geriausią kainą</p>
              </div>
            </div> -->
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </main>
