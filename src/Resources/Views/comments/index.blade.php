<div class="container">
    <div class="comments">
        @auth()
            @include("Front::comments.create", ['commentable' => $course])
        @else
            <div class="comment-main">
                <div class="ct-header">
                    <h3>Comments ( 180 )</h3>
                    <p>To post a comment, you must first <a href="{{route('login')}}">log in</a>.</p>
                </div>
            </div>
        @endauth
        <div class="comments-list">
            @auth()
                @include("Front::comments.reply", ['commentable' => $course])
            @endauth
            @foreach($commentable->approvedComments()->latest()->get() as $comment)
                <ul class="comment-list-ul">
                    @auth()
                        <div class="div-btn-answer">
                            <button class="btn-answer" onclick="setCommentId({{$comment->id}})">Reply to comment</button>
                        </div>
                    @endauth
                    <li class="is-comment">
                        <div class="comment-header">
                            <div class="comment-header-avatar">
                                <img src="{{$comment->user->thumb}}" alt="{{$comment->user->name}}">
                            </div>
                            <div class="comment-header-detail">
                                <div class="comment-header-name">User: {{$comment->user->name}}</div>
                                <div class="comment-header-date">{{$comment->created_at}}</div>
                            </div>
                        </div>
                        <div class="comment-content">
                            <p>
                                {{$comment->body}}
                            </p>
                        </div>
                    </li>
                    @foreach($comment->Comments as $reply)
                        <li class="is-answer">
                            <div class="comment-header">
                                <div class="comment-header-avatar">
                                    <img src="{{$reply->user->thumb}}" alt="{{$reply->user->name}}">
                                </div>
                                <div class="comment-header-detail">
                                    <div class="comment-header-name">Admin: {{$reply->user->name}}</div>
                                    <div class="comment-header-date">{{$reply->created_at}}</div>
                                </div>
                            </div>
                            <div class="comment-content">
                                <p>
                                    {{$reply->body}}
                                </p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endforeach
        </div>
    </div>
</div>
