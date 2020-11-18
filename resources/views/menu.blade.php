@extends('layouts.app')

@section('title', 'Menu')

@section('content')

<div class="background-image-menu"><!-- Background-image -->
    <h2 class="animated fadeInLeft" style="animation-delay: 1s">Menu</h2>
</div><!-- END Background-image -->

<header id="our-menu">
    
    <ul>
        <li class="active">all</li>
        <li>pasta</li>
        <li>chicken</li>
        <li>seafood</li>
        <li>desserts</li>
    </ul>
</header>

<section class="menu-section"><!-- Menu -->

    <div class="our-menu" data-id="pasta"><!-- Pasta -->
        <img src="pictures/menu/pasta_clam-sauce.jpg" alt="">
        <h4>Clam Sauce – Red Or White</h4>
    </div>

    <div class="our-menu" data-id="pasta">
        <img src="pictures/menu/bolognese-meat-sauce.jpg" alt="">
        <h4>Bolognese Meat Sauce</h4>
    </div>

    <div class="our-menu" data-id="pasta">
        <img src="pictures/menu/shrimp-red-or-white.jpg" alt="">
        <h4>Shrimp – Red Or White</h4>
    </div>

    <div class="our-menu" data-id="pasta">
        <img src="pictures/menu/pomodoro.jpg" alt="">
        <h4>Pomodoro</h4>
    </div>

    <div class="our-menu" data-id="pasta">
        <img src="pictures/menu/spaghetti-meatballs.jpg" alt="">
        <h4>Meatballs</h4>
    </div>

    <div class="our-menu" data-id="pasta">
        <img src="pictures/menu/rigatoni-and-broccoli-sausage.jpg" alt="">
        <h4>Rigatoni W/ Sausage & Broccoli</h4>
    </div><!-- END Pasta -->
    

    <div class="our-menu" data-id="chicken"><!-- Chicken -->
        <img src="pictures/menu/chicken-contadina.jpg" alt="">
        <h4>Chicken Contadina</h4>
    </div>

    <div class="our-menu" data-id="chicken">
        <img src="pictures/menu/chicken-saltimbocca.jpg" alt="">
        <h4>Chicken Saltimbocca</h4>
    </div>

    <div class="our-menu" data-id="chicken">
        <img src="pictures/menu/chicken-scarpariello.jpg" alt="">
        <h4>Chicken Scarpariello</h4>
    </div>

    <div class="our-menu" data-id="chicken">
        <img src="pictures/menu/chicken-parmigiana.jpg" alt="">
        <h4>Chicken Parmigiana</h4>
    </div>

    <div class="our-menu" data-id="chicken">
        <img src="pictures/menu/chicken-marsala.jpg" alt="">
        <h4>Chicken Marsala</h4>
    </div>

    <div class="our-menu" data-id="chicken">
        <img src="pictures/menu/chicken-scaloppini.jpg" alt="">
        <h4>Chicken Scaloppini</h4>
    </div><!-- END Chicken -->


    <div class="our-menu" data-id="seafood"><!-- Seafood -->
        <img src="pictures/menu/shrimp-marinara.jpg" alt="">
        <h4>Shrimp Marinara</h4>
    </div>

    <div class="our-menu" data-id="seafood">
        <img src="pictures/menu/shrimp-scampi.jpg" alt="">
        <h4>Shrimp Scampi</h4>
    </div>

    <div class="our-menu" data-id="seafood">
        <img src="pictures/menu/lobster-fra-diavolo.jpg" alt="">
        <h4>Lobster Fra Diavolo</h4>
    </div>

    <div class="our-menu" data-id="seafood">
        <img src="pictures/menu/broiled-lobster-oreganata.jpg" alt="">
        <h4>Broiled Lobster Oreganata</h4>
    </div>

    <div class="our-menu" data-id="seafood">
        <img src="pictures/menu/salmon-oreganata.jpg" alt="">
        <h4>Salmon Oreganata</h4>
    </div>
    
    <div class="our-menu" data-id="seafood">
        <img src="pictures/menu/shrimp-parmigiana.jpg" alt="">
        <h4>Shrimp Parmigiana</h4>
    </div><!-- END Seafood -->


    <div class="our-menu" data-id="desserts"><!-- Desserts -->
        <img src="pictures/menu/fresh-fruit-platter.jpg" alt="">
        <h4>Fresh Fruit Platter</h4>
    </div>

    <div class="our-menu" data-id="desserts">
        <img src="pictures/menu/chocolate-cake.jpg" alt="">
        <h4>Chocolate Cake</h4>
    </div>

    <div class="our-menu" data-id="desserts">
        <img src="pictures/menu/strawberry-shortcake.jpg" alt="">
        <h4>Strawberry Shortcake</h4>
    </div>

    <div class="our-menu" data-id="desserts">
        <img src="pictures/menu/chocolate-cannoli.jpg" alt="">
        <h4>Chocolate Cannoli</h4>
    </div>

    <div class="our-menu" data-id="desserts">
        <img src="pictures/menu/tiramisu.jpg" alt="">
        <h4>Tiramisu</h4>
    </div>
    
    <div class="our-menu" data-id="desserts">
        <img src="pictures/menu/bread-pudding.jpg" alt="">
        <h4>Bread Pudding</h4>
    </div><!-- END Desserts -->

</section> <!-- END Menu -->

<script>
const buttons = document.querySelectorAll("li");
const section = document.querySelectorAll(".our-menu");
buttons.forEach(item => {
    item.addEventListener('click', () => {
        buttons.forEach(item => {
            item.className = "";
        });
        item.className = "active";

        // Show images 
        let values = item.textContent;
        section.forEach(show => {
            show.style.display = "none";

            if (show.getAttribute("data-id") === values || values === "all") {
                show.style.display = "block";
            }
        });

    });

});
</script>

@endsection