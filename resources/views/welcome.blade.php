@extends('layouts.app')

@section('content')
<div class="screen-box" id="reserveren">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center border-top border-right main-card border-raduis-top-right">
                <div class="p-5" data-aos="fade-right">
                    @livewire('reserveren')
                </div>
            </div>
            <div class="col-md-4">
                <div class="row text-center">
                    <div class=" h-45 p-4" data-tilt>
                        <div data-aos="fade-left" class="logo-bg mt-5">
                            <img src="/images/logo_ijverig_transparant.png" style="height: 200px;">
                            <h1 class="fw-bold mt-3">IJVERIG</h1>
                        </div>
                    </div>
                    <div class="border-bottom"></div>

                    <div class="h-15 p-4 mt-4">
                        <div data-aos="fade-up">
                            <h1
                             class="txt-rotate fw-bold p-5 shadow"
                             data-period="2000"
                             data-rotate='[ "Amsterdam", "Zaalverhuur", "Vergaderingen", "Workshops" ]'
                             style="background-color: #212529; color: #fff; border-radius: 5px;"></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="screen-box" id="informatie">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-4 mt-5 mb-5" data-aos="fade-right">
                <blockquote class="blockquote blockquote-custom bg-white p-5 border-right border-top">
                    <div class="blockquote-custom-icon shadow-sm"><i class="fa-solid fa-champagne-glasses"></i></div>
                    <p class="mb-0 mt-2 font-italic">
                        <ul class="text-left">
                            <li class="fw-bold" style="list-style-type:none;">Gratis:</li>
                            <li class="ms-5">Beamer (VGA-aansluiting)</li>
                            <li class="ms-5">Flipover + stiften</li>
                            <li class="ms-5">Koffiezetapparaat + koffie + filters</li>
                            <li class="ms-5">Waterkoker + thee</li>
                            <li class="ms-5">Borden, glazen en servetten</li>
                            <li class="ms-5">Schoonmaak</li>
                        </ul>
                    </p>
                </blockquote>
            </div>

            <div class="col-md-4 mt-5 mb-5" data-aos="fade-up">
                <blockquote class="blockquote blockquote-custom bg-white p-5 border-top">
                    <div class="blockquote-custom-icon shadow-sm"><i class="fa-solid fa-info"></i></div>
                    <p class="mb-0 mt-2 font-italic">
                        <ul class="text-left">

                            <li class="fw-bold" style="list-style-type:none;">Verhuur:</li>
                            <li class="ms-5">Zakelijke doeleinden (workshops, vergaderingen, etc.).</li>
                            <li class="ms-5">Geen verjaardagsfeestjes.</li>
                            <br>
                            <li class="fw-bold" style="list-style-type:none;">Voorruimte:</li>
                            <li class="ms-5">maximaal 40 zitplaatsen</li>
                            <br>
                            <li class="fw-bold" style="list-style-type:none;">Achterruimte:</li>
                            <li class="ms-5">maximaal 40 zitplaatsen</li>
                        </ul>
                    </p>
                </blockquote>
            </div>

            <div class="col-md-4 mt-5 mb-5" data-aos="fade-left">
                <blockquote class="blockquote blockquote-custom bg-white p-5 border-left border-top">
                    <div class="blockquote-custom-icon shadow-sm"><i class="fa-solid fa-euro-sign" style="margin-left: -4px;"></i></div>
                    <p class="mb-0 mt-2 font-italic">
                        <ul class="text-left">
                            <li class="fw-bold" style="list-style-type:none;">Prijs (excl. btw):</li>
                            <li class="ms-5">&euro;180,- per dagdeel (4 uur)</li>
                            <br>
                            <li class="fw-bold" style="list-style-type:none;">Extra:</li>
                            <li class="ms-5">Frisdrank &euro;3,50, Bier &euro;4,50, Wijn &euro;20,00 per fles</li>
                            <br>
                            <li class="fw-bold" style="list-style-type:none;">Tip:</li>
                            <li class="ms-5">Lunch, laat het gewoon bezorgen (broodjesexpress.nl, il-sogno.nl of thuisbezorgd.nl).</li>
                        </ul>
                    </p>
                </blockquote>
            </div>
        </div>
    </div>
</div>


<div class="screen-box" id="impressie">
    <div class="container">
        <div class="row d-flex justify-content-center mt-5" data-aos="fade-up">
            <div class="col-md-8">
                <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" align="center">
                    <div class="carousel-inner z-index-1 ">
                        <div class="carousel-item active d-block w-100"> 
                            <img src="/images/zaal-1.png" class="rounded" alt="Voorruimte"> 
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Voorruimte</h5>
                                <p>Maximaal 40 zitplaatsen.</p>
                            </div>
                        </div>
                        <div class="carousel-item d-block w-100"> 
                            <img src="/images/zaal-2.png" class="rounded" alt="Achterruimte"> 
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Achterruimte</h5>
                                <p>Maximaal 40 zitplaatsen.</p>
                            </div>
                        </div>
                    </div>
                    <ol class="carousel-indicators list-inline mt-3">
                        <li class="list-inline-item active"> <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel"> <img src="/images/zaal-1.png" class="img-fluid rounded"> </a> </li>
                        <li class="list-inline-item"> <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel"> <img src="/images/zaal-2.png" class="img-fluid rounded"> </a> </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Footer-->
<div class="modal fade" id="FooterModel" tabindex="-1" role="dialog" aria-labelledby="FooterModelLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="FooterModelLabel">Privacy statement</h5>
                <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="font-size: 25px;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Uw gegevens worden alleen gebruikt voor het verhuur proces. Verder doen wij niks met uw gegevens.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Sluiten</button>
            </div>
        </div>
    </div>
</div>

<div class="screen-box" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 mt-4 main-card text-center">
                <div class="p-5 border-bottom" style="min-height: 50vh;">
                    <h1 class="fw-bold" data-aos="fade-right"> {{ 'Contact' }}</h1>
                    <div class="row text-center mt-5" data-aos="fade-right">
                        <div class="col-md-6 fw-bold mt-3">
                            <a href="mailto: info@ijverig.nl" target="_blank" class="none">
                                <i class="fa-solid fa-envelope icons"></i>
                                <h5 class="p-2"> info@ijverig.nl </h5>
                            </a>
                        </div>
                        <div class="col-md-6 fw-bold mt-3">
                            <a href="tel:+31203629362" class="none">
                                <i class="fa-solid fa-mobile-screen-button icons"></i>
                                <h5 class="p-2"> +31 20 362 93 62</h5>
                            </a>
                        </div>
                        <div class="col-md-12 mt-5">
                            <a href="tel:+31203629362" class="none">
                                <i class="fa-solid fa-location-dot icons"></i>
                                <h5 class="p-2">IJburglaan 963, 1087EN Amsterdam</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-5 text-center" style="min-height: 15vh;">
                    <div class="footer-copyright text-center" data-aos="fade-up">&#169; {{ now()->year }} Copyright:
                        <a href="/" class="none"> IJverig | </a> 
                        <!-- Button trigger modal -->
                        <a href="" type="button" data-toggle="modal" data-target="#FooterModel">
                        Privacy
                        </a>    
                    </div>
                </div>
            </div>
            <div class="col-md-4 main-card text-center border-top border-left border-raduis-top-left">
                <div class="m-5" data-aos="fade-left" style="width: 80%;"><iframe width="100%" height="500" src="https://maps.google.com/maps?width=100%&height=600&hl=nl&q=IJburglaan%20963%2C%201087EN%20Amsterdam+(IJVerig)&ie=UTF8&t=h&z=14&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/nl/maak-een-google-map/">Maak een Google Map</a> van <a href="https://www.mapsdirections.info/nl/">Nederland Kaart</a></iframe></div>
            </div>
        </div>
    </div>
</div>

<a id="back-to-top" href="#" class="btn btn-outline-dark btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>
@endsection
