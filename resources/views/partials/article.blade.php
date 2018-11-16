<div class="container">
  <div class="row">
    <div class="col-md-8 col-sm-7 blog-posts">
      <!-- Post item -->
      @foreach ($contenuArticle as $key => $item)
          
      <div class="post-item">
        <div class="post-thumbnail">
        <img src="{{$item->image}}" alt="">
          <div class="post-date">
            <h2>03</h2>
            <h3>Nov 2017</h3>
          </div>
        </div>
        <div class="post-content">
          <h2 class="post-title">{{$item->name}} </h2>
          <div class="post-meta">
            
          <a href="">{{$item->tags[0]->tag}}</a>
          <a href="">{{$item->categories->categorie}}</a>
            <a href="">2 Comments</a>
          </div>
        <p>{{$item->preview}}</p>
          <a href="/blogpost/{{$item->id}}" class="read-more">Read More</a>
        </div>
      </div>


    

      @endforeach
      {{-- <!-- Post item -->
      <div class="post-item">
        <div class="post-thumbnail">
          <img src="" alt="">
          <div class="post-date">
            <h2>03</h2>
            <h3>Nov 2017</h3>
          </div>
        </div>
        <div class="post-content">
          <h2 class="post-title">Just a simple blog post</h2>
          <div class="post-meta">
            <a href="">Loredana Papp</a>
            <a href="">Design, Inspiration</a>
            <a href="">2 Comments</a>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.</p>
          <a href="/blogpost" class="read-more">Read More</a>
        </div>
      </div>
      <!-- Post item -->
      <div class="post-item">
        <div class="post-thumbnail">
          <img src="img/blog/blog-3.jpg" alt="">
          <div class="post-date">
            <h2>03</h2>
            <h3>Nov 2017</h3>
          </div>
        </div>
        <div class="post-content">
          <h2 class="post-title">Just a simple blog post</h2>
          <div class="post-meta">
            <a href="">Loredana Papp</a>
            <a href="">Design, Inspiration</a>
            <a href="">2 Comments</a>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.</p>
          <a href="/blogpost" class="read-more">Read More</a>
        </div>
      </div> --}}
      <!-- Pagination -->
      <div class="page-pagination">
        <a class="active" href="">01.</a>
        <a href="">02.</a>
        <a href="">03.</a>
      </div>
    </div>
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
        
          <li><img src="{{$item->image}}" alt=""></li>
              
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
          <a href=""><img src="img/add.jpg" alt=""></a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>