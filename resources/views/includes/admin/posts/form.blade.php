@if($post->exists)
<form method="POST" action="{{route('admin.posts.update', $post->id)}}" enctype="multipart/form-data">
@method('PATCH')
@else
<form method="POST" action="{{route('admin.posts.store')}}" enctype="multipart/form-data">
@endif
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Titolo</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title', $post->title)}}">
      @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Descrizione</label>
        <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" rows="5">{{old('content', $post->content)}}</textarea>
        @error('content')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
    {{-- <div class="mb-3">
        <label for="image" class="form-label">Link Image</label>
        <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{old('image', $post->image)}}">
        @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div> --}}
    <div class="mb-3">
      @if($post->image)
      <div class="col-3">
        <img class="img-fluid" src="{{url("storage/$post->image")}}" alt="{{$post->title}}">
      </div>
      @endif
      <div class="col">
        <label for="image" class="form-label">Load Image</label>
        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
        @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
  </div>
    <div class="mb-3">
      <label for="category_id" class="form-label">Category</label>
      <select class="form-control" id="category_id" name="category_id">
        <option value="">Nessuna Categoria</option>
        @foreach($categories as $category)
        <option @if (old('category_id', $post->category_id) == $category->id ) selected @endif value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3 d-flex">
      @foreach ($tags as $tag)
      <div class="form-check mr-2">
        <input @if (in_array($tag->id, old('tags', $tagIds ?? []))) checked @endif class="form-check-input" type="checkbox" value="{{$tag->id}}" id="tag-{{$tag->id}}" name="tags[]">
        <label class="form-check-label" for="tag-{{$tag->id}}">
          {{$tag->name}}
        </label>
        {{-- @error('tags')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror --}}
      </div>
      @endforeach
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Back</a>
</form>