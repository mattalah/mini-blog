<form method="POST" action="{{ route('comment.store') }}">
    @csrf
    <div class="input-group">
        <textarea class="form-control" placeholder="Entrer your commentaire" name="comment" rows="1"></textarea>
    </div>
    <input type="hidden" name="post_id" value="{{$post->id}}">
    <div class="d-flex align-items-end flex-column">
        <button type="submit" class="btn btn-outline-primary">Publish</button>
    </div>
</form>
