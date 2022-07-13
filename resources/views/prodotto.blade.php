@extends('templates.base')

@section('pageTitle', 'Comics - Home')

@section('pageMain')
    <main>
        <section class="my-jumbotron">

        </section> 
        
        <section>
            <div class="info-container">
                <div class="info-card">
                    <img src="{{$comic['thumb']}}" alt="">
                    <h2>{{$comic["title"]}}</h2>
                    <span class="price">
                        <div>U.S. Price: {{$comic["price"]}}</div>
                        <div>AVAILABLE</div>
                    </span> 
                    <span> <a href="#">Check Availability</a></span>      
                    <p>{{$comic['description']}}</p>
                </div>       
            </div>     
        </section>

        <section class="lower">
            <div class="lower-container">
                <div class="row">
                    <div class="col-6"></div>
                    <div class="col-6"></div>
                </div>
            </div>
        </section>
    </main>
@endsection