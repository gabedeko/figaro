{{--
  Template Name: Facial Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <?php /*@include('partials.content-page')*/ ?>

    <div class="facial-top container-fluid">
        <div class="row">
            <div class="col-md facial-top-right">
                <p class="body-2">All</p>
            </div>
            <div class="col-md facial-top-left">
            <?php
                    if( have_rows('facial') ):
                    $x = 0;
                    while( have_rows('facial') ) : the_row();
                        $name = get_sub_field('name');
                        ?>

                        <p id="facial-top-left-<?php echo $x ?>" class="body-3 facial-top-left-title <?php if ($x == 0)echo 'animate__animated animate__fadeIn'?>">Facials / <?php echo $name ?></p>
                        <?php
                        $x++;
                    endwhile;
                    else :
                    echo "nothing here :/";
                    endif;
                    ?>
                    <?php /* Loop HTML Template
                <p id="facial-top-left-0" class="body-3 facial-top-left-title">Facials / Glow</p>
                    */
                    ?>

            </div>
        </div>
    </div>
    <div class="facial-mid container-fluid">
        <div class="row">
        <div class="col-md-2 col-md-push facial-mid-right">
                <ul class="nav flex-column nav-pills figaro-facial-tabs" id="figaro-facial-tabs" role="tablist">
                    <?php
                    if( have_rows('facial') ):
                    $x = 0;
                    while( have_rows('facial') ) : the_row();
                        $name = get_sub_field('name');
                        ?>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link <?php if ($x == 0)echo 'active'?>" id="facial-tab-<?php echo $x ?>" data-toggle="tab" href="#facial-tab-pane-<?php echo $x ?>" role="tab" aria-controls="facial-tab-<?php echo $x ?>" aria-selected="true"><?php echo $name ?></a>
                        </li>
                        <?php
                        $x++;
                    endwhile;
                    else :
                    echo "nothing here :/";
                    endif;
                    ?>
                    <?php /* Loop HTML Template
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="facial-tab-0" data-toggle="tab" href="#facial-tab-pane-0" role="tab" aria-controls="facial-tab-0" aria-selected="true">Glow</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="facial-tab-1" data-toggle="tab" href="#facial-tab-pane-1" role="tab" aria-controls="facial-tab-1" aria-selected="false">Reset</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="facial-tab-2" data-toggle="tab" href="#facial-tab-pane-2" role="tab" aria-controls="facial-tab-2" aria-selected="false">Baby Face</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="facial-tab-3" data-toggle="tab" href="#facial-tab-pane-3" role="tab" aria-controls="facial-tab-3" aria-selected="false">Relax</a>
                    </li>
                    */ 
                    ?>
                </ul>
            </div>
            <div class="col-md col-md-push-2 facial-mid-left tab-content">
                <?php
                if( have_rows('facial') ):
                $x = 0;
                while( have_rows('facial') ) : the_row();
                    $name = get_sub_field('name');
                    $price = get_sub_field('price');
                    $short_description = get_sub_field('short_description');
                    $long_description = get_sub_field('long_description');
                    $main_image = get_sub_field('main_image');
                    ?>
                    <div class="tab-pane fade show <?php if ($x == 0)echo 'active'?> row" id="facial-tab-pane-<?php echo $x ?>" role="tabpanel" aria-labelledby="facial-tab-<?php echo $x ?>">
                        <div class="col-sm-7 facial-mid-left-img" style="background-image:url('<?php echo $main_image['url']; ?>')"></div>
                        <div class="col-sm-5 facial-mid-left-desc">
                            <h1><?php echo $name ?></h1>
                            <h5><?php echo $short_description ?></h5>
                            <h3>$<?php echo $price ?></h3>
                            <p><?php echo $long_description ?></p>
                            <div class="btn-container">
                            <a href="/book"><button type="button" class="btn btn-primary btn-lg figaro-btn-1">Book Appointment</button></a>
                            </div>
                        </div>
                    </div>
                    <?php
                    $x++;
                endwhile;
                else :
                echo "nothing here :/";
                endif;
                ?>
                <?php
                /* Loop HTML Template
                <div class="tab-pane fade showactive row" id="facial-tab-pane-0" role="tabpanel" aria-labelledby="facial-tab-0">
                    <div class="col-sm-7 facial-mid-left-img" style="background-image:url(@asset('images/placeholder/figaro_placeholder_4.jpg'))"></div>
                    <div class="col-sm-5 facial-mid-left-desc">
                        <h1>Glow</h1>
                        <h5>Melanin friendly treatment</h5>
                        <h3>$85</h3>
                        <p>Vivamus elementum consectetur rutrum. Cras pellentesque condimentum leo, eu viverra ante lacinia sit amet. Nulla facilisi. Ut vel scelerisque quam. Etiam tincidunt posuere enim, dapibus imperdiet lacus eleifend quis. Donec tempor nisl tellus, eu porta dui elementum cursus. Donec quis orci dolor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        <div class="btn-container">
                        <a href="/book"><button type="button" class="btn btn-primary btn-lg figaro-btn-1">Book Appointment</button></a>
                        </div>
                    </div>
                </div>
                */
                ?>
            </div>
            
        </div>
    </div>
    <div class="facial-btm container-fluid">
        <div class="facial-btm-div">
        <?php
        if( have_rows('facial') ):
        $x = 0;
        while( have_rows('facial') ) : the_row();
            $short_description = get_sub_field('short_description');
            ?>
            <h1 id="facial-msg-<?php echo $x ?>" class="facial-btm-title animate__animated <?php if ($x == 0)echo 'animate__fadeIn'?>"><?php echo $short_description ?></h1>
            <?php
            $x++;
        endwhile;
        else :
        echo "nothing here :/";
        endif;
        ?>
        <?php
        /* Loop HTML Template
        <h1 id="facial-msg-0" class="facial-btm-title animate__animated animate__fadeIn">Melanin friendly treatment</h1>
        */ 
        ?>
        </div>
        <div class="facial-btm-info row">
            <div class="col-md-6 facial-btm-info-left">
                <?php
                if( have_rows('facial') ):
                $x = 0;
                while( have_rows('facial') ) : the_row();
                    $process = get_sub_field_object('process');
                    $process_image = get_sub_field('process_image');
                    ?>
                     <div class="facial-btm-info-left-container <?php if ($x == 0)echo 'animate__animated animate__fadeIn'?>" id="facial-process-<?php echo $x ?>">
                        <h3 class="facial-btm-info-left-title"><?php echo $process['label']; ?> </h3>
                            <ul class="list-group list-group-flush facial-btm-info-left-list">
                    <?php
                    // check for rows (sub repeater)
                    if( have_rows('process') ): ?>
                    <?php 
                    $y = 0;
                    // loop through rows (sub repeater)
                    while( have_rows('process') ): the_row();

                        // display each item as a list - with a class of completed ( if completed )
                        ?>
                        <li class="list-group-item"><?php echo $y+1 ?>. <?php if( get_sub_field('process_step') ){ echo get_sub_field('process_step'); } ?></li>
                    <?php $y++; ?>
                    <?php endwhile; ?>
                    <?php endif; //if( get_sub_field('items') ): ?>
                    </ul>
                </div>
                    <?php
                    $x++;
                endwhile;
                else :
                echo "nothing here :/";
                endif;
                ?>
                <?php
                /* Loop HTML Template
                <h1 id="facial-msg-0" class="facial-btm-title animate__animated animate__fadeIn">Melanin friendly treatment</h1>
                */ 
                ?>
                <?php /* Loop HTML Template
                <div class="facial-btm-info-left-container animate__animated animate__fadeIn" id="facial-process-0">
                    <h3 class="facial-btm-info-left-title">Process 0</h3>
                    <ul class="list-group list-group-flush facial-btm-info-left-list">
                        <li class="list-group-item">1. Cras justo odio</li>
                        <li class="list-group-item">2. Dapibus ac facilisis in</li>
                        <li class="list-group-item">3. Morbi leo risus</li>
                        <li class="list-group-item">4. Porta ac consectetur ac</li>
                        <li class="list-group-item">5. Vestibulum at eros</li>
                    </ul>
                </div>
                */ 
                ?>
            </div>
            <div class="col-md-6 facial-btm-info-right">
                <?php
                if( have_rows('facial') ):
                $x = 0;
                while( have_rows('facial') ) : the_row();
                    $process_image = get_sub_field('process_image');
                    ?>
                    <div class="facial-process-img <?php if ($x == 0)echo 'animate__animated animate__fadeIn'?>" id="facial-process-img-<?php echo $x ?>" style="background-image:url('<?php echo $process_image['url']; ?>')"></div>
                    <?php
                    $x++;
                endwhile;
                else :
                echo "nothing here :/";
                endif;
                ?>
                <?php /* Loop HTML Template
                <div class="facial-process-img animate__animated animate__fadeIn" id="facial-process-img-0" style="background-image:url(@asset('images/placeholder/figaro_placeholder_0.jpg'))"></div>
                */ ?>
            </div>
        </div>
        
    </div>
    <div class="facial-reviews container">
        <div class="row">
            <h3 class="facial-reviews-title">
                Leave a Review!
            </h3>
            <?php 
                gravity_form( 1, false, false, false, '', false );
            ?>
        </div>
    </div>

  @endwhile
@endsection
