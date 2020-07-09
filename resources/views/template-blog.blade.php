{{--
  Template Name: Blog Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <?php /*@include('partials.content-page')*/ ?>

<div class="figaro-hero" style="background-image:url(@asset('images/placeholder/figaro_placeholder_5.jpg'))">
    <div class="figaro-hero-container">
        <h1 class="display-4 figaro-hero-title">Blog</h1>
        <hr class="my-3">
    <p class="lead figaro-hero-copy">Coming Soon!</p>
    </div>
</div>

  @endwhile
@endsection
