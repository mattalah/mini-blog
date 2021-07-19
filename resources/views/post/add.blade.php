<form method="POST" action="{{ route('post.store') }}">
    @csrf
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Hi {{$user->name}}, what's new?</b>
            </button>
            </h2>
        </div>
        <div class="card-body">
            <div class="input-group">
                <textarea class="form-control" rows="1" name="title"></textarea>
                @foreach ($errors->all() as $error)
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $error }}</strong>
                    </span>
                @endforeach
            </div>
            <div class="d-flex align-items-end flex-column">
                <button type="submit" class="btn btn-outline-primary">Publish</button>
            </div>
        </div>
    </div>
</form>
