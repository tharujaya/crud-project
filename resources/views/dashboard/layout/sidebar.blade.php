<div class="app-sidenav">

    <ul class="nav flex-column">
      <li class="nav-item">
        <span class="nav-link category" href="#">Category<a href="{{route('category.create')}}">+</a> </span>
        
        <ul>
          @foreach ($categorySidebar as $category)
          <li class="cat-list-style"><a href="{{route('category.edit',$category->id)}}">{{$category->name}}</a><a href="{{route('category.destroy',$category->id)}}"> X</a>
            
            {{-- <form action="{{route('product.create')}}" method="POST">
              @csrf
            <input type="hidden" name="category_id" value="{{$category->id}}">
          <button type="submit"> + </button>
            </form></li> --}}
          <a href="{{route('product.create')}}">+ </a></li> 
          @endforeach
        </ul>
      </li>
      </ul>

  </div>