@extends('layouts.main')

@section('container')
    <div class="background-home-thumbnail">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-12 col-md-7 col-sm-12">
                    <h1 style="color: yellow" class="fw-bolder">Alohomora Book <br>
                        <span class="text-white auto-type"></span>
                    </h1>
                    <p class="text-white home-content">
                        Unlock the door to a universe of captivating stories with Alohomora Books,
                        where the power of words transforms into enchanting adventures. Immerse
                        yourself in the spellbinding realms crafted by talented authors, and let your
                        imagination soar beyond the ordinary.
                    </p>
                    <a href="/">
                        <button type="button" class="explore-button">Explore</button>
                    </a>
                </div>
                <div class="col-12 col-md-5 col-sm-12">
                    <div class="row">
                        <div class="col-6">
                            <div class="category-list category-card card1">
                                <h5>Ebooks</h5>
                                <p>So many categories</p>
                            </div>
                            <div class="category-list category-card card2">
                                <h5>Audiobooks</h5>
                                <p>So many categories</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="category-list category-card card3">
                                <h5>Magazines</h5>
                                <p>So many categories</p>
                            </div>
                            <div class="category-list category-card card4">
                                <h5>Documents</h5>
                                <p>So many categories</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
