{{--
  Template Name: Store Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <?php /*@include('partials.content-page')*/ ?>

<div class="figaro-hero" style="background-image:url(@asset('images/placeholder/figaro_placeholder_16.jpg'))">
    <div class="figaro-hero-container">
        <h1 class="display-4 figaro-hero-title">About</h1>
    </div>
</div>

  @endwhile
@endsection
