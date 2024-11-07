@extends('layouts.app')

@section('content')
<div class="home">
    <div class="heroimage d-flex align-items-center justify-content-start">
        <div class="container-fluid content">
            <div class="d-flex flex-column justify-content-center" style="gap: 10px;">
                <p class="herotext">Find Jobs That Match Your Skills and Passion with Ease</p>
                <h1 class="heroheading">Unlock Your Career Potential with Top Opportunities</h1>
            </div>
            <br>
            <button class="hero-btn">Find a Job</button>
        </div>
    </div>
    <div class="category container my-5">
        <div class="d-flex align-items-center mb-4">
            <div style="width: 20px; height: 45px; flex-shrink: 0; background: var(--Navy-blue, #0D47A1);"></div>
            <h1 style="color: var(--black, #000); font-family: 'Work Sans', sans-serif; font-size: 18px; font-style: normal; font-weight: 600; line-height: normal; margin-left: 10px;">Categories</h1>
        </div>

        <div class="d-flex justify-content-center">
            <div class="row g-3">
                @foreach($categories->chunk(5) as $chunk)
                    @foreach($chunk as $category)
                        <div class="col-md-4 col-sm-6 col-lg-2 d-flex justify-content-center">
                            <div class="category-card">
                                <div class="category-img" style="background: url('{{ asset($category->image_path) }}') lightgray 50% / cover no-repeat;"></div>
                                <h2 class="category-name">{{ $category->name }}</h2>
                                <div class="d-flex justify-content-center align-items-center">
                                    <p class="category-results">
                                        270 jobs Results found
                                        <img src="{{ asset('imges/arrow.png') }}" style="width: 40px; height: 40px;" alt="arrow image">
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
<style>
.heroimage {
    background: linear-gradient(0deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.2)),
                url('./imges/Find a Job.png') lightgray center/cover no-repeat;
    height: 100vh; 
    width: 100vw; 
}
.content{
    max-width: 1100px; 
    margin-left: 108px;
}
.herotext{
    color: var(--black, #000);
    font-family: "Sans-Serif", Arial, sans-serif;
    font-size: 15px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
.heroheading{
    color: var(--Navy-blue, #0D47A1);
    font-family: "Anton", sans-serif;
    font-size: 60px;
    font-style: normal;
    font-weight: 900;
    line-height: normal;
}
.hero-btn{
    width: 197px;
    height: 42.521px;
    flex-shrink: 0;
    border-radius: 24px;
    background: var(--Navy-blue, #0D47A1);
    color: var(--White, #FFF);
    font-family: sans-serif;
    font-size: 17px;
    font-style: normal;
    font-weight: 700;
    line-height: 130%; /* 22.1px */
}
.category-card{
    width: 197px;
    height: 197px;
    flex-shrink: 0;
    border-radius: 20px;
    border: 1px solid var(--Nave-blue, #0D47A1);
    background: var(--light-blue, #E3F2FD);
    transition: transform 0.3s ease-in-out, box-shadow 0.6s ease-in-out;
}
.category-card:hover {
    transform: scale(1.05); /* Example: slightly enlarge the card */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Example: add shadow */
}        
.category-img{
    width: 65px;
    height: 65px;
    flex-shrink: 0;
    border-radius: 20px;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    margin: 28px 110px 32px 22px;
}
.category-name{
    color: var(--blacl, #000);
    font-family: "Work Sans";
    font-size: 18px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    margin-left: 18px;
}
.category-results{
    font-size: x-small;
}
@media (max-width: 768px) {
    .content{
        max-width: 350px; 
        margin: auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

    }
    .herotext{
        font-size: 15px;
        text-align: center;
    }
    .heroheading{
        font-size: 55px;
        text-align: center;
    }
    .hero-btn{
        width: 197px;
        height: 42.521px;
        font-size: 15px;
    }
    
}
</style>
@endsection
