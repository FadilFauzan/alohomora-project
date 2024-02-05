@extends('layouts.main')

@section('container')

<div class="about-us-page">
    <div class="container">
        <h1 class="title">About Us</h1>
        <hr style="color: white">
        <div class="about-content">
            <div class="image">
                <img src="/img/OurTeam.jpg" title="Alohomora Books" alt="Alohomora Books"> 
            </div>
            <div class="content">
                <p>At Alohomora Books, we are passionate about creating a haven for literary enthusiasts. Our website is not just a platform; 
                    it's a gateway to a world filled with diverse ebooks, captivating magazines, and insightful documents spanning a myriad of categories. 
                    We believe in the power of words to inspire, enlighten, and transport you to new realms. Whether you're seeking fiction or non-fiction, 
                    mysteries or romances, our curated collection ensures that every reader discovers a treasure trove of literary wonders. Join us on this literary journey, 
                    where the magic of words comes alive, and every click opens a new chapter of possibilities.
                </p>
                <a href="#" class="readmore">Read More</a>
            </div>
        </div>
        <hr style="color: white">

        <section>
            <h1 class="title-team">Developer</h1>
            <div class="team-row">
                <div class="member">
                    <img src="#" alt="">
                    <h2>Fadil Ahmad Fauzan</h2>
                    <p>Backend Developer</p>
                </div>
                <div class="member">
                    <img src="/img/Rizkya.jpg" alt="Rizkya Nanda Prakoso">
                    <h2>Rizkya Prakoso</h2>
                    <p>Frontend Developer</p>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection