<div class="comments">
    <h2>{{count($article->comments/* ->where('valid',true) */)}}
        @if ((count($article->comments/* ->where('valid',true) */)) < 2 ) 
          Comment
        @else
          Comments
        @endif
      </h2>
    
    @foreach ($contenuComments as $key => $comment)
    @if ($key < 5) <ul class="comment-list">
        <li>
            
            <div class="avatar">
                <img src="{{'/'.$comment->user->image}}" alt="">
            </div>
            <div class="commetn-text">
                <h3>{{$comment->user->fname}} {{$comment->user->name}} |
                    {{$comment->created_at->format('d M H:i')}} | Reply</h3>
                <p>{{$comment->comment}}</p>
            </div>
        </li>
        </ul>
        @endif
        @endforeach



</div>