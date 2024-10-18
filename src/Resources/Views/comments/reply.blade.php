<div id="Modal2" class="modal">
    <div class="modal-content" style="width: 1000px;">
        <div class="modal-header">
            <p>Submit Reply</p>
            <div class="close">×</div>
        </div>
        <div class="modal-body">
            <form method="post" action="{{route("comments.store")}}">
                @csrf
                <input type="hidden" id="comment_id" name="comment_id" value="">
                <input type="hidden" name="commentable_type" value="{{get_class($commentable)}}">
                <input type="hidden" name="commentable_id" value="{{$commentable->id}}">
                <x-textarea name="body" placeholder="Submit a comment..."/>
                <button class="btn i-t">Submit Reply</button>
            </form>
        </div>

    </div>
</div>
