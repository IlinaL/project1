@extends('layouts.app')

@section('title','Gallery')

@section('content')

<div class="background-image-gallery"><!-- Background-image -->
    <h2 class="animated fadeInLeft" style="animation-delay: 1s">Gallery</h2>
</div><!-- END Background-image -->

<div class="gallery-section"><!-- Gallery -->
    <div class="inner-width">

        <div class="gallery">
            <a href="pictures/gallery/1.jpg" class="image">
                <img src="pictures/gallery/1.jpg" alt="">
            </a>
            <a href="pictures/gallery/2.jpg" class="image">
                <img src="pictures/gallery/2.jpg" alt="">
            </a>
            <a href="pictures/gallery/3.jpg" class="image">
                <img src="pictures/gallery/3.jpg" alt="">
            </a>
            <a href="pictures/gallery/4.jpg" class="image">
                <img src="pictures/gallery/4.jpg" alt="">
            </a>
        </div>

        <div class="gallery">
            <a href="pictures/gallery/5.jpg" class="image">
                <img src="pictures/gallery/5.jpg" alt="">
            </a>
            <a href="pictures/gallery/6.jpg" class="image">
                <img src="pictures/gallery/6.jpg" alt="">
            </a>
            <a href="pictures/gallery/7.jpg" class="image">
                <img src="pictures/gallery/7.jpg" alt="">
            </a>
            <a href="pictures/gallery/8.jpg" class="image">
                <img src="pictures/gallery/8.jpg" alt="">
            </a>
        </div>
    </div>
</div><!-- END Gallery -->

<script>
$(".gallery").magnificPopup({
    delegate: 'a',
    type: 'image',
    gallery: {
        enabled: true
    }
});
</script>
@endsection