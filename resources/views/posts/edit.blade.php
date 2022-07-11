@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Post
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('posts.update', $post->id) }}">
                @csrf

        @method('PUT')

        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" name="name" id="post_name" value={{ $post->name }} />
        </div>
        <div class="form-group">
          <label for="price">Address:</label>
          <textarea name="address" id="post_address" class="form-control">{{ $post->address }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection