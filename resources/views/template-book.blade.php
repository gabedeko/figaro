{{--
  Template Name: Book Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')   

    <div class="figaro-hero" style="background-image:url(@asset('images/placeholder/figaro_placeholder_14.jpg'))">
        <div class="figaro-hero-container">
            <h1 class="display-4 figaro-hero-title">Book Your Appointment</h1>
        </div>
    </div>
    <div class="container book-container mb-5">
      <div class="row book-row">
        <div class="col-md-6 book-left">
        @include('partials.content-page')
        </div>
        <div class="col-md-6 book-right">
          <h1><?php echo get_the_title() ?></h1>
          <h3>$85</h3>
          <p class="body-3">Radiate hotter than the sun with this melanin friendly treatment that reveals that inner glow. Papaya enzymes will prep the skin for Dermolanting, extractions & high frequency. A beauty junkie's best friend!</p>
          <a href="/facials" ><button type="button" class="btn btn-primary btn-lg figaro-btn-2">Choose Different Option ></button></a>
        </div>
      </div>
    </div>

  @endwhile
@endsection
