@extends('settings.layouts.app')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        DataTable {{ucfirst($type)}}
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Info</th>
                        <th>More</th>
                        <th>Extra</th>
                        <th>Image</th>
                        <th>State</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($data as $key => $value)
                    <tr>
                        <td data-sortable="true">{{$value->id}}</td>
                        <td data-sortable="true">{{$value->title}}</td>
                        <td data-sortable="true">{!!$value->desc!!}</td>
                        <td data-sortable="true">{!!$value->more!!}</td>
                        <td data-sortable="true">{!!$value->extra!!}</td>
                        <td data-sortable="true"><a target="_blank"
                                href="{{ isset($value->image) ? secure_asset('storage/'.json_decode($value->image,true)[0]) :secure_asset('image/placeholder-image.jpg') }}"><img
                                    height="80px" width="80px"
                                    src="{{ isset($value->image) ? secure_asset('storage/'.json_decode($value->image,true)[0]) :secure_asset('image/placeholder-image.jpg') }}"
                                    alt=""></a></td>
                        <td data-sortable="true">{!! $value->state ? '<a class="btn btn-danger"
                                href="'.route('dashboard.state',$value->id).'">Disable</a>':'<a class="btn btn-success"
                                href="'.route('dashboard.state',$value->id).'">Enable</a>' !!}

                        </td>
                        <td data-sortable="true">
                            <div class="dropdown show">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                    id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Actions
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{route('dashboard.edit',$value->id)}}">Edit</a>
                                    <a class="dropdown-item" onclick="formSubmit()" href="#">Delete</a>
                                    <form style="display: none" id="deleted"
                                        action="{{route('dashboard.delete',$value->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Info</th>
                        <th>More</th>
                        <th>Extra</th>
                        <th>Image</th>
                        <th>State</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<script>
    function formSubmit(){
        document.getElementById('deleted').submit();
}
    function state_change(){
        document.getElementById('state_change').submit();
}
</script>
@endsection