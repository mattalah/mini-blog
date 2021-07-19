@foreach ($posts as $post)
<div class="accordion container-fluid" id="accordion{{$post->index}}">
    <div class="card">
      <div class="card-header" id="heading{{$post->index}}">
        <form method="POST" action="{{ route('post.destroy') }}">
            @csrf
        <input type="hidden" value="{{$post->id}}" name="post_id">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{$post->index}}" aria-expanded="true" aria-controls="collapse{{$post->index}}">
            [{{ date_format($post->created_at, 'd/m/Y h:m:s') }}] <b> {{$post->user->name}}</b>
          </button>
        </h2>
        <button type="submit" class="btn btn-outline-danger">delete</button>
        </form>
      </div>
      <div id="collapse{{$post->index}}" class="collapse show" aria-labelledby="heading{{$post->index}}" data-parent="#accordion{{$post->index}}">
        <div class="card-body">
            {{$post->title}}
            <hr>
            @include('comment.list')
        </div>
      </div>
    </div>
</div>
<br>
@endforeach
