<main>
   <section class="my-jumbotron"></section> 

   <!-- Current Series -->
   <section class="current-series">
      <div class="card-container">
         @foreach($comicsArr as $item)
            <div class="my-card">
               <img src="{{$item['thumb']}}" alt="">
               <div>{{$item["title"]}}</div>
            </div> 
         @endforeach
      </div>
   </section>
</main>