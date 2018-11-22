<div class="single-post">
    <div class="post-thumbnail">
        <img src="{{'/'.$article->image}}" alt="">
        <div class="post-date">
            (C.F.: Date on Blade )
            {{-- <h2>{{$article->created_at->format('d')}}</h2>
            <h3>{{$article->created_at->format('M Y')}}</h3> --}}
        </div>
    </div>
    <div class="post-content">
        <h2 class="post-title">{{$article->name}}</h2>
        <div class="post-meta">
            <a href="">{{$article->categories->categorie}}</a>
            <a href="">
                @foreach ($article->tags as $tag)
                {{$tag->tag}},
                @endforeach
            </a>

            <a href="">{{count($article->comments/* ->where('valid',true) */)}}
                @if ((count($article->comments/* ->where('valid',true) */)) < 2 ) 
                  Comment
                @else
                  Comments
                @endif 
            </a>
        </div>
        <p>{{$article->preview}}</p>
        <p>{{$article->text}} </p>
    </div>
    <!-- Post Author -->
    <div class="author">
        <div class="avatar">
            <img src="{{'/'.$article->user->image}}" alt="">
        </div>
        <div class="author-info">
            <h2>{{$article->user->name}} {{$article->user->fname}} <span>Author</span></h2>
            <p>{{$article->user->bio}} </p>
        </div>
        
    </div>