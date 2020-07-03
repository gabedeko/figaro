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
            <div class="col-md facial-top-left">
                <p class="body-3">Facials / Glow</p>
                
            </div>
            <div class="col-md facial-top-right">
                <p class="body-2">All</p>
            </div>
        </div>
    </div>
    <div class="facial-mid container-fluid">
        <div class="row">
            <div class="col-md facial-mid-left tab-content">
                <div class="tab-pane fade show active row" id="facial-tab-pane-0" role="tabpanel" aria-labelledby="facial-tab-0">
                        <div class="col-sm-7 facial-mid-left-img" style="background-image:url(@asset('images/placeholder/figaro_placeholder_4.jpg'))"></div>
                        <div class="col-sm-5 facial-mid-left-desc">
                            <h1>Glow</h1>
                            <h5>Melanin friendly treatment</h5>
                            <h3>$85</h3>
                            <p>Vivamus elementum consectetur rutrum. Cras pellentesque condimentum leo, eu viverra ante lacinia sit amet. Nulla facilisi. Ut vel scelerisque quam. Etiam tincidunt posuere enim, dapibus imperdiet lacus eleifend quis. Donec tempor nisl tellus, eu porta dui elementum cursus. Donec quis orci dolor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <div class="btn-container">
                                <button type="button" class="btn btn-primary btn-lg figaro-btn-1">Book Appointment</button>
                            </div>
                        </div>
                </div>
                <div class="tab-pane fade row" id="facial-tab-pane-1" role="tabpanel" aria-labelledby="facial-tab-1">
                        <div class="col-md-7 facial-mid-left-img" style="background-image:url(@asset('images/placeholder/figaro_placeholder_2.jpg'))"></div>
                        <div class="col-md-5 facial-mid-left-desc">
                            <h1>Reset</h1>
                            <h5>Deep pore cleansing facial</h5>
                            <h3>$85</h3>
                            <p>Vivamus elementum consectetur rutrum. Cras pellentesque condimentum leo, eu viverra ante lacinia sit amet. Nulla facilisi. Ut vel scelerisque quam. Etiam tincidunt posuere enim, dapibus imperdiet lacus eleifend quis. Donec tempor nisl tellus, eu porta dui elementum cursus. Donec quis orci dolor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <div class="btn-container">
                                <button type="button" class="btn btn-primary btn-lg figaro-btn-1">Book Appointment</button>
                            </div>
                        </div>
                </div>
                <div class="tab-pane fade row" id="facial-tab-pane-2" role="tabpanel" aria-labelledby="facial-tab-2">
                        <div class="col-md-7 facial-mid-left-img" style="background-image:url(@asset('images/placeholder/figaro_placeholder_17.jpg'))"></div>
                        <div class="col-md-5 facial-mid-left-desc">
                            <h1>Baby Face</h1>
                            <h5>A deep tissue massage</h5>
                            <h3>$85</h3>
                            <p>Vivamus elementum consectetur rutrum. Cras pellentesque condimentum leo, eu viverra ante lacinia sit amet. Nulla facilisi. Ut vel scelerisque quam. Etiam tincidunt posuere enim, dapibus imperdiet lacus eleifend quis. Donec tempor nisl tellus, eu porta dui elementum cursus. Donec quis orci dolor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <div class="btn-container">
                                <button type="button" class="btn btn-primary btn-lg figaro-btn-1">Book Appointment</button>
                            </div>
                        </div>
                </div>
                <div class="tab-pane fade row" id="facial-tab-pane-3" role="tabpanel" aria-labelledby="facial-tab-3">
                        <div class="col-md-7 facial-mid-left-img" style="background-image:url(@asset('images/placeholder/figaro_placeholder_7.jpg'))"></div>
                        <div class="col-md-5 facial-mid-left-desc">
                            <h1>Relax</h1>
                            <h5>The stress relieving facial</h5>
                            <h3>$85</h3>
                            <p>Vivamus elementum consectetur rutrum. Cras pellentesque condimentum leo, eu viverra ante lacinia sit amet. Nulla facilisi. Ut vel scelerisque quam. Etiam tincidunt posuere enim, dapibus imperdiet lacus eleifend quis. Donec tempor nisl tellus, eu porta dui elementum cursus. Donec quis orci dolor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <div class="btn-container">
                                <button type="button" class="btn btn-primary btn-lg figaro-btn-1">Book Appointment</button>
                            </div>
                        </div>
                </div>
            </div>

            <div class="col-md-2 facial-mid-right">
                <ul class="nav flex-column nav-pills figaro-facial-tabs" id="figaro-facial-tabs" role="tablist">
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
                </ul>
            </div>
        </div>
    </div>
    <div class="facial-btm container-fluid">
        <div class="facial-btm-div">
        <h1 id="facial-msg-0" class="facial-btm-title animate__animated animate__fadeIn">Melanin friendly treatment</h1>
        <h1 id="facial-msg-1" class="facial-btm-title animate__animated">Deep pore cleansing facial</h1>
        <h1 id="facial-msg-2" class="facial-btm-title animate__animated">A deep tissue massage</h1>
        <h1 id="facial-msg-3" class="facial-btm-title animate__animated">The stress relieving facial</h1>
        </div>
        <div class="facial-btm-info row">
            <div class="col-md-6 facial-btm-info-left">
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
                <div class="facial-btm-info-left-container" id="facial-process-1">
                    <h3 class="facial-btm-info-left-title">Process 1</h3>
                    <ul class="list-group list-group-flush facial-btm-info-left-list">
                        <li class="list-group-item">1. Cras justo odio</li>
                        <li class="list-group-item">2. Dapibus ac facilisis in</li>
                        <li class="list-group-item">3. Morbi leo risus</li>
                        <li class="list-group-item">4. Porta ac consectetur ac</li>
                        <li class="list-group-item">5. Vestibulum at eros</li>
                    </ul>
                </div>
                <div class="facial-btm-info-left-container" id="facial-process-2">
                    <h3 class="facial-btm-info-left-title">Process 2</h3>
                    <ul class="list-group list-group-flush facial-btm-info-left-list">
                        <li class="list-group-item">1. Cras justo odio</li>
                        <li class="list-group-item">2. Dapibus ac facilisis in</li>
                        <li class="list-group-item">3. Morbi leo risus</li>
                        <li class="list-group-item">4. Porta ac consectetur ac</li>
                        <li class="list-group-item">5. Vestibulum at eros</li>
                    </ul>
                </div>
                <div class="facial-btm-info-left-container" id="facial-process-3">
                    <h3 class="facial-btm-info-left-title">Process 3</h3>
                    <ul class="list-group list-group-flush facial-btm-info-left-list">
                        <li class="list-group-item">1. Cras justo odio</li>
                        <li class="list-group-item">2. Dapibus ac facilisis in</li>
                        <li class="list-group-item">3. Morbi leo risus</li>
                        <li class="list-group-item">4. Porta ac consectetur ac</li>
                        <li class="list-group-item">5. Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 facial-btm-info-right">
                <div class="facial-process-img  animate__animated animate__fadeIn" id="facial-process-img-0" style="background-image:url(@asset('images/placeholder/figaro_placeholder_0.jpg'))"></div>
                <div class="facial-process-img" id="facial-process-img-1" style="background-image:url(@asset('images/placeholder/figaro_placeholder_13.jpg'))"></div>
                <div class="facial-process-img" id="facial-process-img-2" style="background-image:url(@asset('images/placeholder/figaro_placeholder_10.jpg'))"></div>
                <div class="facial-process-img" id="facial-process-img-3" style="background-image:url(@asset('images/placeholder/figaro_placeholder_11.jpg'))"></div>
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
