
@if(session('success'))
<p class="alert alert-success">
    {{Session::get('success' )}}
</p>
@endif

@if(session('danger'))
<p class="alert alert-danger">
    {{Session::get('danger' )}}
</p>
@endif

@if(session('warning'))
<p class="alert alert-warning">
    {{Session::get('warning' )}}
</p>
@endif