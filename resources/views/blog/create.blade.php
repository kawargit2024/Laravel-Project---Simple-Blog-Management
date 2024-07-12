<x-app-layout>
<div class="container mt-3 pdt-5">
</hr>
	<form action="{{route('blog.store') }}" method="post">
    @csrf
  <div class="form-group">
    <label for="title"><strong> Title </strong></label>
  </br>
    <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" placeholder="Write Post Title">

    @error("title")
    <div class="error"> {{$message}} </div>
    @enderror

  </div>
  <div class="form-group">
    <label for="description"><strong> Description </strong></label>
    <textarea class="form-control" name="description" id="description" rows="10" column="150" 
    value="{{old('description')}}" placeholder="Write Post Content">
    </textarea>

    @error("description")
    <div class="error">{{$message}}</div>
    @enderror

  </div>
  <button type="submit" class="btn btn-success create-btn"> Create Blog </button>
</form>
  <a  href="{{route('blog.index') }}" type="submit" class="btn btn-default"> < Go Back</a>
</div>
</div>
</x-app-layout>