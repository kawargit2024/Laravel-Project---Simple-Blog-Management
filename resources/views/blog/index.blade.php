<x-app-layout>
<div class="container">
  <div class="row">
    <div class="text-left">
    <a class="create-btn-lg" href="{{ route('blog.create') }}">Create Blog Post </a>
  </div>
    <table class="table table-striped text-center">
      <thead class="table-striped">
        <tr>
          <th scope="col"> ID </th>
          <th scope="col"> Post Title </th>
          <th scope="col"> Post Content </th>
          <th scope="col"> Created At </th>
          <th scope="col"> Action </th>
        </tr>
      </thead>
      <tbody class="">
      @foreach( $blogs as $blog )
        <tr>
          <th scope="row"> {{$blog->id}} </th>
          <td><strong> {{$blog->title}} </strong></td>
          <td> {{$blog->description}} </td>
           <td><strong> {{$blog->created_at}} </strong></td>
          <td class="btn-grp d-flex">
            <a href="{{ route('blog.show', $blog) }}" class="btn btn-sm btn-success"> View </a>
            <a href="{{ route('blog.edit', $blog) }}" class="btn btn-sm btn-info"> Edit </a>
            <form action="{{ route('blog.destroy', $blog) }}" method="POST">
              @method("DELETE")
              @csrf
              <button onclick="return confirm('Are you want to delete')" 
               class="btn btn-sm btn-danger" type="submit"> Delete </button>
            </form>
            
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
    <div class="pagination">
      {{ $blogs->links() }}
    </div>
  </div>
</div>
</x-app-layout>