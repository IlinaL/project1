@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section id="first-section">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="caption">
        <h5>Welcome to <span>Dine</span></h5>
        <p>We take reservations for lunch and dinner. Whatever your event or celebration, we are here to make your
            special day a truly memorable one. You can reserve your table between 8:00AM - 6:00PM Monday till Sunday.
        </p>
    </div>
</section><!-- END First Section -->

<section id="second-section">
    <section id="menu" data-stellar-background-ratio="0.5"><!-- Special Menu -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="special-menu-title">
                        <h2>Special Menu</h2>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="menu-thumb"><!--Meatballs -->
                        <a href="pictures/special menu/meatballs.jpg" class="image-popup" title="Meatballs">
                            <img src="pictures/special menu/meatballs.jpg" class="img-responsive" alt="">

                            <div class="menu-info">
                                <div class="menu-item">
                                    <h3>Meatballs</h3>
                                    <p> Beef / Veal </p>
                                </div>
                                <div class="menu-price">
                                    <span>$8</span>
                                </div>
                            </div>
                        </a>
                    </div><!-- END Meatballs -->
                </div>

                <div class="col-md-4 col-sm-6">
                        <div class="menu-thumb"><!--Titanic -->
                            <a href="pictures/special menu/titanic.jpg" class="image-popup" title="Titanic">
                                <img src="pictures/special menu/titanic.jpg" class="img-responsive" alt="">

                                <div class="menu-info">
                                    <div class="menu-item">
                                        <h3>Titanic</h3>
                                        <p>Strawberries / Bananas / Chocolate Syrup</p>
                                    </div>
                                    <div class="menu-price">
                                        <span>$11</span>
                                    </div>
                                </div>
                            </a>
                        </div><!-- END Titanic -->
                    </div>


                    <div class="col-md-4 col-sm-6">
                        <div class="menu-thumb"><!-- Baked Clams -->
                            <a href="pictures/special menu/bakedclams.jpg" class="image-popup" title="Baked Clams">
                                <img src="pictures/special menu/bakedclams.jpg" class="img-responsive" alt="">

                                <div class="menu-info">
                                    <div class="menu-item">
                                        <h3>Baked Clams</h3>
                                        <p>Seasoned Breadcrumbs / Clam Broth</p>
                                    </div>
                                    <div class="menu-price">
                                        <span>$15</span>
                                    </div>
                                </div>
                            </a>
                        </div><!-- END Baked Clams -->
                    </div>


                    <div class="col-md-4 col-sm-6">
                        <div class="menu-thumb"><!-- Broccoli -->
                            <a href="pictures/special menu/broccoli.jpg" class="image-popup" title="Broccoli">
                                <img src="pictures/special menu/broccoli.jpg" class="img-responsive" alt="">

                                <div class="menu-info">
                                    <div class="menu-item">
                                        <h3>Broccoli</h3>
                                        <p>Garlic / Olive Oil / Chicken Stock</p>
                                    </div>
                                    <div class="menu-price">
                                        <span>$6</span>
                                    </div>
                                </div>
                            </a>
                        </div><!-- END Broccoli -->
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="menu-thumb"><!-- Lasagna -->
                            <a href="pictures/special menu/lasagna.jpg" class="image-popup" title="Lasagna">
                                <img src="pictures/special menu/lasagna.jpg" class="img-responsive" alt="">

                                <div class="menu-info">
                                    <div class="menu-item">
                                        <h3>Lasagna</h3>
                                        <p>Three Cheeses / Marinara Sauce</p>
                                    </div>
                                    <div class="menu-price">
                                        <span>$7</span>
                                    </div>
                                </div>
                            </a>
                        </div><!-- END Lasagna -->
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="menu-thumb"><!-- Italian Cheesecake -->
                            <a href="pictures/special menu/italian-cheesecake.jpg" class="image-popup"
                                title="Italian Cheesecake ">
                                <img src="pictures/special menu/italian-cheesecake.jpg" class="img-responsive" alt="">

                                <div class="menu-info">
                                    <div class="menu-item">
                                        <h3>Italian Cheesecake </h3>
                                        <p>Creamy Ricotta / Fresh Strawberries</p>
                                    </div>
                                    <div class="menu-price">
                                        <span>$12</span>
                                    </div>
                                </div>
                            </a>
                        </div><!-- Italian Cheesecake -->
                    </div>
                </div>
            </div>
    </section><!-- END Special Menu -->
</section><!-- END Second Section -->

<section id="third-section">
    <div class="caption">
        <h5>Your perfect <span>breakfast<span></h5>
        <p>The best dining quality can be here too.Discover a new dimension of delicious meals and original dishes.</p>
        <a class="" href="{{route('menu.index')}}">Our Menu</a></p>
    </div>
</section><!-- END Third Section -->


<section id="fourth-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="our-chefs-title">
                    <h2>Meet our chefs</h2>
                </div>
            </div>
            <div class="container-team"><!-- Team -->
                <div class="box">
                    <div class="imgBx">
                        <img src="pictures/team/team-image1.jpg" alt="">
                    </div>
                    <div class="content">
                        <div>
                            <h2>New Catherine</h2>
                            <p>KITCHEN OFFICER</p>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="pictures/team/team-image2.jpg" alt="">
                    </div>
                    <div class="content">
                        <div>
                            <h2>Isabella Grace</h2>
                            <p> MAIN CHEF</p>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBx">
                        <img src="pictures/team/team-image3.jpg" alt="">
                    </div>
                    <div class="content">
                        <div>
                            <h2>Lindsay Perlen</h2>
                            <p>OWNER & MANAGER</p>
                        </div>
                    </div>
                </div>
            </div><!-- END Team -->
        </div>
    </div>
</section><!-- END Fourth Section -->
<script>
$(".menu-thumb").magnificPopup({
    delegate: 'a',
    type: 'image',
    gallery: {
        enabled: true
    }
});
</script>
@endsection