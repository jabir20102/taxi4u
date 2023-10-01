@extends('layouts.app')

@section('content')
    <!-- Start image-gallery Area -->
    <section class="image-gallery-area section-gap">
        <div class="container">
            <div class="row section-title">
                <h1>Image Gallery that we like to share</h1>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
            <div class="row">
                    @foreach ($taxis as $taxi)
                    <div class="col-lg-4 single-gallery">
                        <a href="{{ asset('storage/' . $taxi->image) }}" class="img-gal">
                            <h4>{{$taxi->name}}</h4>
                            <img src="{{ asset('storage/' . $taxi->image) }}" class="img-fluid">
                            
                        </a>
                    </div>
                    @endforeach
            </div>

        </div>
    </section>
    <!-- End image-gallery Area -->
@endsection
