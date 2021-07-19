@if (count($post->comments)>0)
    <b>Comments</b>
@endif
@foreach ($post->comments as $comment)
    @csrf
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="d-flex align-items-center align-self-center">
                <div class="display-6">
                    <b>{{$comment->user->name}}</b> :</div>{{$comment->comment}}
                </div>
            <form method="POST" action="{{ route('comment.destroy') }}">
                <p class="lead">{{ date_format($comment->created_at, 'd/m/Y h:m:s') }} - @if (auth()->user()->id == $comment->user_id) <button type="submit" class="btn btn-outline-danger">Delete</button> @endif  </p>
            </form>
            <form method="POST" action="{{ route('comment.store') }}">
                <div class="input-group">
                    <textarea class="form-control" placeholder="Entrer your commentaire" name="comment" rows="1"></textarea>
                </div>
                <input type="hidden" name="post_id" value="{{$post->id}}">
                <div class="d-flex align-items-end flex-column">
                    <button type="submit" class="btn btn-outline-primary">Publish</button>
                </div>
            </form>
        </div>
    </div>

@endforeach
