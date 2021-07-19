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
                @csrf
                <input type="hidden" value="{{$comment->id}}" name="comment_id">
                <p class="lead">{{ date_format($comment->created_at, 'd/m/Y h:m:s') }}@if (auth()->user()->id == $comment->user_id) -  <button type="submit" class="btn btn-outline-danger">Delete</button> @endif  </p>
            </form>

        </div>
    </div>

@endforeach
@include('comment.add')
