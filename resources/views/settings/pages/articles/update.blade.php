@extends('settings.layouts.app')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4">{{ucfirst($data->type)}} #{{$data->id}}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard.data',$data->type)}}">{{ucfirst($data->type)}}s</a></li>
        <li class="breadcrumb-item active">{{ucfirst($data->type)}} </li>
    </ol>
    <form method="POST" enctype="multipart/form-data" action="{{route('dashboard.update',$data->id)}}">
        @csrf
        @method('PUT')
        <div class="form-row">
            @include('settings.layouts.message')
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputTitle">Title</label>
                <input type="text" class="form-control" name="title" id="inputTitle" placeholder="Title"
                    value="{{$data->title}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6 ">
                <label for="inputButton">Button</label>
                <input type="text" class="form-control" name="button" id="inputButton" placeholder="Button"
                    value="{{$data->button}}">
            </div>
            <div class="form-group col-md-6 ">
                <div class="form-group">
                    <label for="inputLink">Link</label>
                    <input type="text" class="form-control" name="link" id="inputLink" placeholder="Link"
                        value="{{$data->link}}">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputTitle">Description</label>
                <textarea name="desc" class="editor" cols="30" rows="10">{{$data->desc}}</textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputTitle">Extra</label>
                <textarea name="extra"class="editor" cols="30" rows="10">{{$data->extra}}</textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="inputTitle">More</label>
                <textarea name="more" class="editor" cols="30" rows="10">{{$data->more}}</textarea>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6 ">
                <div class="form-check">
                    <input class="form-check-input" name="state" type="checkbox" {{$data->state ? 'checked':'' }}
                        id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                           Display
                    </label>
                </div>
            </div>
            
            @if (!$data->multi)
            <div class="form-group col-md-6 ">
                <div class="form-group float-right">
                    <input type="file" id="actual-upload" onchange="readURL(this);" name="imgs" style="display: none">
                    <div class="pull-right" id="upload"
                        style="height: 200px;width: 200px;background-image: url({{ isset($data->image) ? secure_asset('storage/'.json_decode($data->image,true)[0]) :secure_asset('image/placeholder-image.jpg') }});background-size: contain;background-repeat: no-repeat;">
                    </div>
                </div>
            </div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary float-right mb-5">Update</button>
    </form>

</div>
@if ($data->multi)

<div class="container-fluid">
    <br>
    <br>
    <br>
    <br>
    <hr>
    <form action="{{route('dashboard.addImage',$data->id)}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-6 ">
                <div class="form-group">
                    <input type="file" id="actual-upload" onchange="readURL(this);" name="imgs" style="display: none">
                    <div class="pull-right" id="upload"
                        style="height: 200px;width: 200px;background-image: url({{ secure_asset('image/placeholder-image.jpg') }});background-size: contain;background-repeat: no-repeat;">
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Add Image</button>

    </form>
    <br>
    <hr>
    <div class="row">
        @forelse (json_decode($data->image) as $img)
        <form class="card ml-3 mb-3 col-2 text-right" style="width: 18rem;"
            action="{{route('dashboard.deleteImage',$data->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <br>
            <img class="card-img-top" height="200px" width="200px" src="{{ secure_asset('storage/'.$img) }}"
                alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"></p>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
            <input type="hidden" name="imgs" value="{{$img}}">
        </form>
        @empty

        @endforelse


    </div>

</div>
@endif

<script>
    document.getElementById('upload').onclick = function() {
    document.getElementById('actual-upload').click();
};
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#upload').css("background-image", "url("+ e.target.result + ")");
        };
        reader.readAsDataURL(input.files[0]);
    }else{
            $('#upload').css("background-image", "url({{ secure_asset('image/placeholder-image.jpg') }})");
        reader.readAsDataURL(null);
    }
}

</script>
@endsection