<main>
   <section class="my-jumbotron"></section> 

   <!-- Current Series -->
   <section class="current-series">
      <div class="current-btn">
         <h2>CURRENT SERIES</h2>
      </div>
      <div class="card-container">
         @foreach($comicsArr as $item)
            <div class="my-card">
               <a href="{{route('prodotto', ['id' => $item['id']])}}">
                  <img src="{{$item['thumb']}}" alt="">
                  <div>{{$item["title"]}}</div>
               </a>       
            </div> 
         @endforeach

         <div class="btn-container">
            <div class="load-btn">
                <h3><a href="#">LOAD MORE</a></h3>
            </div>
        </div>
      </div>
   </section>
</main>