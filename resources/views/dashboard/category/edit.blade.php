@extends('dashboard.layout.main')

@section('content')
<h1> Edit Category</h1>

<form class="form-horizontal" method="post" action="{{route('category.update',$category)}}">
    @method('PUT')
    @csrf

    <div class="form-group">
        <label for="name" class="cols-sm-2 control-label">Category Name</label>
        <div class="cols-sm-10">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                <input type="text" class="form-control" value="{{$category->name}}" name="name" id="name" placeholder="Enter Name" />
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="description" class="cols-sm-2 control-label">Description</label>
        <div class="cols-sm-10">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="description" value="{{$category->description}}" id="description" placeholder="Enter description" />
            </div>
        </div>
    </div>
    
    <div class="form-group ">
        <button type="submit" class="btn btn-primary btn-lg btn-block login-button" >Create</button>
    </div>
    
</form>
    
@endsection