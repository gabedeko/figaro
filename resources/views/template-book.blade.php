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
    <div class="container-fluid book-container mb-5">
      <div class="row book-row">
        <div class="col-md-6 book-left">
        @include('partials.content-page')
        </div>
        <div class="col-md-6 book-right" style="background-image:url(@asset('images/placeholder/figaro_placeholder_24.jpg'))">
          <div class="book-right-content">
            <p class="body-1">Figaro Facials is Infection Control Certified to show commitment to client’s health and safety. We are also compliant with all laws and regulations relating to COVID-19.</p>

            <ul class="list-group list-group-flush">
              <p class="body-2">Refer a friend to our office and you’ll both receive $25 off on any Spa Service*</p>
              <li class="list-group-item">*Offer only valid once your referral purchases a package</li>
              <li class="list-group-item">*When you refer a friend to Silvia’s Esthetics and Day Spa you and your friend will receive a $25 credit</li>
              <li class="list-group-item">*Credits do not expire and they accrue .</li>
              <li class="list-group-item">*You can use only one $25 credit at a time.</li>
              <li class="list-group-item">*New clients get $25 discount on their first time using a service.</li>
              <li class="list-group-item">*Referral program applies to all Spa services.</li>
            </ul>

            <a href="#" ><button type="button" class="btn btn-primary btn-lg figaro-btn-2">Refer A Friend ></button></a>
          </div>
        </div>
      </div>
    </div>

  @endwhile
@endsection
