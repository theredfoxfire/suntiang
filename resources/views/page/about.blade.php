@extends('layouts.front')

@section('content')
<section id="page-about" class="page-bottompadd img-overflow">
<div id="banner">
<img class="img-responsive" src="{{ asset('images/banner4.jpg') }}" alt="">
</div>
<div class="bg-body-brushup">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <ol class="breadcrumb">
                <li><a href="{{ route('item.list') }}">Home</a></li>
                <li class="active">About</li>
            </ol>
            <h2 class="text-damion-curved">About Us</h2>
            <p class="text-center">THE FIRST WEST SUMATRAN AND JAPANESE FUSION RESTAURANT</p>
            <div class="content-article">
                <div class="row center-gap">
                    <div class="col-sm-6">
                        <p>West Sumatra's dining scene is well-known for its spiciness and the richness of its ingredients. It is served from simple 'kaki lima' food stalls to some famous franchised restaurants across the country.</p>
                        <p>West Sumatran food has becoming the Nation's favorite. Yet, the country has been lacking in innovative cuisine that is based on these authentic traditional recipes. Until now.</p>
                        <p>Suntiang Restaurant is the first to combine authentic West Sumatran recipes in a Japanese style. It is reflected in our extensive menus, from Ayam Pop Roll to Otak Tempura Balado.</p>
                        <p>Suntiang Restaurant brings West Sumatran cuisine to a new level, serving more than 50 different types of fusion menu. Our favorites are; Edamame Balado, Beef Rinds Miso Soup, Rendang Roll, Gulai Ramen, Rendang Tamago Bowl, Sizzling Beef Tongue with Green Chilli and Asam Pade Sauce. For the dessert, we bring an old recipe from our grandmothers, Laman Katan Sarikayo.</p>
                        <p>Our dedicated chef with years of experience in Japanese restaurants. He combines his skill in Japanese food with hundred years recipes from our grandmothers, creating a feast to your taste buds.</p>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('images/about1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="text-indented">
                            <h3 class="text-damion">Opening hours</h3>
                            <p>Monday-Sunday: 10:00 - 22:00 WIB</p>
                        </div>
                        <div class="text-indented">
                            <h3 class="text-damion">For Reservation</h3>
                            <ul>
                                <li>Suntiang Grand Indonesia, 021-2358044</li>
                                <li>Suntiang Setiabudi One, 021-5257393</li>
                                <li>Suntiang Catering, 021-5260 777 / 082311999426</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-indented">
                            <h3 class="text-damion">Promo</h3>
                            <p>For interviews/photos, contact</p>
                        </div>
                        <div class="text-indented">
                            <h3 class="text-damion">For interviews/photos, contact</h3>
                            <p>info@suntiang.com / Mobile: (62)812 9326 0002 (Mr.Dono)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
@endsection
