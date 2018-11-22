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
            
            <a href="">{{$item->categories->categorie}}</a>
            <a href="">
          @foreach ($item->tags as $tag)
            {{$tag->tag}}
          @endforeach
            </a>
            <a href="">
              {{count($item->comments/* ->where('valid',true) */)}}
                @if ((count($item->comments/* ->where('valid',true) */)) < 2 ) 
                  Comment
                @else
                  Comments
                @endif
              </a>
          </div>
        <p>{{$item->preview}}</p>
          <a href="/blogpost/{{$item->id}}" class="read-more">Read More</a>
        </div>
      </div>
      
      @endforeach
      <!-- Pagination -->
      <div class="page-pagination">
        <a class="active" href="">01.</a>
        <a href="">02.</a>
        <a href="">03.</a>
      </div>
    </div>
   