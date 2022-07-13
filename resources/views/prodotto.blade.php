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
                        <div><span class="colorlime">U.S. Price: </span>{{$comic["price"]}}</div>
                        <div class="colorlime">AVAILABLE</div>
                    </span> 
                    <span> <a href="#">Check Availability</a></span>      
                    <p>{{$comic['description']}}</p>
                </div>       
            </div>     
        </section>

        <section class="lower">
            <div class="lower-container">
                <div class="row">
                    <div class="col-6"><h4>Talent</h4></div>
                    <div class="col-6"><h4>Specs</h4></div>
                    <div class="col-6 myflex">
                        <div>Art by:</div>
                        <div>Artists</div>
                    </div>
                    <div class="col-6 myflex">
                        <div>Series:</div>
                        <div class="mycolor">{{$comic["series"]}}</div>
                    </div>
                    <div class="col-6"><div>Written by:</div></div>
                    <div class="col-6 myflex">
                        <div>U.S. Price:</div>
                        <div>{{$comic["price"]}}</div>
                    </div>
                    <div class="col-6"></div>
                    <div class="col-6 myflex">
                        <div>On Sale Date:</div>
                        <div>{{$comic["sale_date"]}}</div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection