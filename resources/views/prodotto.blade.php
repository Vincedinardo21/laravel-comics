@extends('templates.base')

@section('pageTitle', 'Comics - Home')

@section('pageMain')
    <main>
        <section class="my-jumbotron">

        </section> 
        
        <section>
            <img src="{{$comic['thumb']}}" alt="">
            <h2>{{$comic["title"]}}</h2>
            <div>U.S. Price: {{$comic["price"]}}</div>
            <div>AVAILABLE</div>
            <p>{{$comic['description']}}</p>
        </section>
    </main>
@endsection