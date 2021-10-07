@extends('dashboard.layout.main')

@section('content')

<form class="form-horizontal" method="post" action="{{route('product.store')}}">
    @csrf
    <input type="hidden" name="category_id" value="{{$category_id}}"/>

    <div class="form-group">
        <label for="type" class="cols-sm-2 control-label">Type</label> 
        <div class="cols-sm-10">
            <div class="input-group">
                <span class="input-group-addon"></span> 
                {{-- <input type="text" class="form-control" name="description" id="description" placeholder="Enter description" /> --}}
                <select name="type" id="type"> 
                    @foreach ($allcategory as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option> 
                    @endforeach
                  </select><a id="myBtn"> + </a>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="cols-sm-2 control-label">Product Name</label>
        <div class="cols-sm-10">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Product Name" />
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="description" class="cols-sm-2 control-label">Description</label>
        <div class="cols-sm-10">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="description" id="description" placeholder="Enter description" />
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <label for="status" class="cols-sm-2 control-label">Status</label>
        <div class="cols-sm-10">
            <div class="input-group">
                <span class="input-group-addon"></span>
                ​<input type="radio" id="active" name="status" value="1">
              <label for="html">Active</label>
              <input type="radio" id="deactive" name="status" value="0">
              <label for="deactive">Deactive</label><br>
            </div>
        </div>
    </div>
    
    <div class="form-group ">
        <button type="submit" class="btn btn-primary btn-lg btn-block login-button" >Create</button>
    </div>
    
</form>

<!-- The Modal -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <form class="form-horizontal" method="post" action="{{route('category.store')}}">
        @csrf
    
        <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Category Name</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" />
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="description" class="cols-sm-2 control-label">Description</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Enter description" />
                </div>
            </div>
        </div>
        <input type="hidden" name="modal" value="modal"/>
        
        <div class="form-group ">
            <button type="submit" name="modal" class="btn btn-primary btn-lg btn-block login-button" >Create</button>
        </div>
        
    </form>
    </div>
  </div>

  <script>
    // Get the modal
    var modal = document.getElementById("myModal");
    
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>
    
@endsection