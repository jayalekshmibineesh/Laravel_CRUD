@extends('index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-4 mt-5">
            @if(session('success'))
            <div class="alert alert-success">
            {!! session ('success')!!}    
            </div>
            @endif

        <table class="table table-bordered table-danger table-striped">
    <tr>
    <th> name</th>
    <th>email</th>
    <th>mobile</th>
    <th colspan="2"> Action</th>
    </tr>
    @foreach($view as $views)
    <tr>
        <td>{{ $views->name }} </td>
        <td>{{ $views->email }}</td>
        <td> {{ $views->mobile }}</td>
        <td><a class="btn btn-primary" href="{{ route('edit',$views->id) }}">edit</a> </td>
        <td><a  class="btn btn-danger"href="{{route('delete',$views->id)}}"> delete</a></td>
    </tr>
@endforeach

</table>
        </div>
    </div>
</div>











@endsection