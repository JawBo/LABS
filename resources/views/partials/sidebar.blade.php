 <!-- Sidebar area -->
 <div class="col-md-4 col-sm-5 sidebar">
    <!-- Single widget -->
    <div class="widget-item">
      <form action="#" class="search-form">
        <input type="text" placeholder="Search">
        <button class="search-btn"><i class="flaticon-026-search"></i></button>
      </form>
    </div>
    <!-- Single widget -->
    <div class="widget-item">
      <h2 class="widget-title">Categories</h2>
      <ul>
        @foreach ($contenuCategories as $item)
            
      <li><a href="#">{{$item->categorie}}</a></li>
        @endforeach
      </ul>
    </div>
    <!-- Single widget -->
    <div class="widget-item">
      <h2 class="widget-title">Instagram</h2>
      <ul class="instagram">
        @foreach ($insta as $item)
      
        <li><img src="{{'/'.$item->image}}" alt=""></li>
            
        @endforeach
      </ul>
    </div>
    <!-- Single widget -->
    <div class="widget-item">
      <h2 class="widget-title">Tags</h2>
      <ul class="tag">
      @foreach ($tags as $item)
      
      <li><a href="">{{$item->tag}}</a></li>
          
      @endforeach
      </ul>
    </div>
    <!-- Single widget -->
    <div class="widget-item">
      <h2 class="widget-title">Quote</h2>
      <div class="quote">
        <span class="quotation">‘​‌‘​‌</span>
      <p>{{$quote[0]->quote}}</p>
      <p> - {{$quote[0]->author}}</p>
      </div>
    </div>
    <!-- Single widget -->
    <div class="widget-item">
      <h2 class="widget-title">Add</h2>
      <div class="add">
        <a href=""><img src="/img/add.jpg" alt=""></a>
      </div>
    </div>
  </div>
</div>
</div>
</div>