@extends('layouts.app')

@section('content')

<div class="figaro-hero" style="background-image:url(@asset('images/placeholder/figaro_placeholder_9.jpg'))">
  <div class="figaro-hero-container">
    <h1 class="display-4 figaro-hero-title">Figaro Facials</h1>
    <hr class="my-3">
    <p class="lead figaro-hero-copy">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut ornare arcu, non elementum ex.</p>
  </div>
</div>

<div class="container-fluid figaro-welcome">
  <div class="figaro-welcome-content">
    <h1 class="figaro-welcome-title mb-5">Welcome</h1>
    <p class="body-1 figaro-welcome-msg">We invite you to the Figaro Facials Esthetics experience where we provide a unique personalized that suits your unique skin. A tranquil, transformational environment that’s both memorable and healthful. From beginning to end, your entire visit will enhance your well-being completely. Relax, Refresh and Renew!</p>
  </div>
</div>

<div class="container-fluid figaro-slider-container">
  <div class="row">
    <div class="col-md-3">
      <h2 class="figaro-slider-title">Facial Services</h2>
    </div>
    <div class="col-md-9">
        <div class="container-fluid figaro-slider-row">
        <?php
        // Check rows exists.
        //IMPORTANT: local the page ID is 6 but live it is 5
        if( have_rows('facial', 5) ):
          // Loop through rows.
          //IMPORTANT: local the page ID is 6 but live it is 5
          while( have_rows('facial', 5) ) : the_row();

              // Load sub field value.
              $name = get_sub_field('name');
              $price = get_sub_field('price');
              $short_description = get_sub_field('short_description');
              $long_description = get_sub_field('long_description');
              $process = get_sub_field('process');
              $main_image = get_sub_field('main_image');
              $process_image = get_sub_field('process_image');
              // Do something...
              //echo $name;
              ?>
              <a class="figaro-slider" href="/facials">
                  <div class="figaro-slider-img" style="background-image:url('<?php echo $main_image['url']; ?>')"></div>
                  <div class="figaro-slider-txt">
                      <h3 class="figaro-slider-title"><?php echo $name ?></h3>
                      <p class="figaro-slider-desc"><?php echo $short_description ?></p>
                      <button type="button" class="btn btn-primary btn-lg figaro-btn-2">More Info ></button>
                  </div>
              </a>
              <?php


          // End loop.
          endwhile;

        // No value.
        else :
          echo "nothing here :/";
          // Do something...
        endif;
        ?>
        <?php
        /* Loop HTML Template
            <a class="figaro-slider" href="/facials">
                <div class="figaro-slider-img" style="background-image:url(@asset('images/placeholder/figaro_placeholder_7.jpg'))"></div>
                <div class="figaro-slider-txt">
                    <h3 class="figaro-slider-title">Relax</h3>
                    <p class="figaro-slider-desc">The stress relieving facial...</p>
                    <button type="button" class="btn btn-primary btn-lg figaro-btn-2">More Info ></button>
                </div>
            </a>
        */
        ?>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid fiaro-mod-1">
<div class="row justify-content-end">
    <div class="col-md-3">
      <h3 class="figaro-mod-1-title">Shop Skincare</h3>
      <div class="figaro-mod-1-img figaro-mod-1-img-x" style="background-image:url(@asset('images/placeholder/figaro_placeholder_8.jpg'))"></div>
    </div>
    <div class="col-md-5">
      <div class="figaro-mod-1-img figaro-mod-1-img-y" style="background-image:url(@asset('images/placeholder/figaro_placeholder_6.jpg'))"></div>
      <p class="figaro-mod-1-txt">Formulated with neo-bio ingridients to enhance ability to moisturize and protect skin barrier according to the humidity of the outside air and the skin condition. Relieving the redness with a gentle touch. </p>
      <a class="figaro-btn-container" href="/store">
        <button type="button" class="btn btn-primary btn-lg figaro-btn-1">Shop All Products</button>
      </a>
    </div>
    <div class="col-md-2">
      <div class="figaro-mod-1-img figaro-mod-1-img-z" style="background-image:url(@asset('images/placeholder/figaro_placeholder_3.jpg'))"></div>
    </div>
  </div>
</div>

@endsection