@extends('templates.base')

@section('pageTitle', 'Comics - Home')

@section('pageMain')
    <main>
        <section class="my-jumbotron">

        </section> 
        
        <section>
            <h2>{{$comic["title"]}}</h2>
        </section>
    </main>
@endsection