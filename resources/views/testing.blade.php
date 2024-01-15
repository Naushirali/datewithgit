@extends('layout.firstpagelayout')
@section('title', 'wheelsonlese')
@section('content')
<style>
    /* Define a container style */
    .content-container {
        max-width: 14600px;
        margin: 0 auto;
        padding: 10px;
        display: flex; /* Display children in a row */
        justify-content: flex-start; /* Adjust alignment */
        overflow-x: auto; /* Allow horizontal scrolling */
    }

    /* Style for individual items */
    .content-item {
        text-align: center;
        margin-left: 3%;
        margin-right: 3%; /* Add some space between elements */
        text-decoration: none; /* Remove underline from anchor */
        white-space: nowrap; /* Prevent text from wrapping */
        min-width: 2cm;
    }

    .content-item p {
        color: black; /* Set text color to black */
        font-size: 14px;

    }
    .content-item a {
        text-decoration: none;
    }

    .content-item img {
        width: 60%; /* Ensure the image takes up the full width of the container */
    }





    @media screen and (max-width: 932px) {

        .content-item {

        min-width: 2.3cm;
    }

    .content-item img {
        width: 65%; /* Ensure the image takes up the full width of the container */
    }

    }




</style>

<div class="content-scroll-container">
    <div class="content-container">
        <div class="content-item">
            <a href="#">
            <img src="{{ asset('images/bikesforrent.jpeg') }}" alt="Ads">
            <p>My ADS</p>
            </a>
        </div>

    <div class="content-item">
        <a href="#">
        <img src="{{ asset('images/bikesforrent.jpeg') }}" alt="Ads">
        <p>Bikes for rent</p>
    </a>
    </div>

    <div class="content-item">
        <a href="#">
        <img src="{{ asset('images/bikesforrent.jpeg') }}" alt="Ads">
        <p>Cars for rent</p>
    </a>
    </div>

    <div class="content-item">
        <a href="#">
        <img src="{{ asset('images/bikesforrent.jpeg') }}" alt="Ads">
        <p>Bikes for Lease</p>
    </a>
    </div>

    <div class="content-item">
        <a href="#">
        <img src="{{ asset('images/bikesforrent.jpeg') }}" alt="Ads">
        <p>Cars for Lease</p>
    </a>
    </div>

    <div class="content-item">
        <a href="#">
        <img src="{{ asset('images/bikesforrent.jpeg') }}" alt="Ads">
        <p>Make a Rent</p>
    </a>
    </div>

    <div class="content-item">
        <a href="#">
        <img src="{{ asset('images/bikesforrent.jpeg') }}" alt="Ads">
        <p>Make a Lease</p>
    </a>
    </div>
</div>
</div>
@endsection
