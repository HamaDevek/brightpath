@extends('settings.layouts.app')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4">New {{ucfirst($type)}} </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard.data',$type)}}">{{ucfirst($type)}}s</a></li>
        <li class="breadcrumb-item active">{{ucfirst($type)}} </li>
    </ol>
    <form method="POST" enctype="multipart/form-data" action="{{route('dashboard.insert',$type)}}">
        @csrf
        <div class="form-row">
            @include('settings.layouts.message')
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputTitle">Title</label>
                <input type="text" class="form-control" name="title" id="inputTitle" placeholder="Title"
                    value="{{old('title')}}">
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-6 ">
                <label for="inputButton">Button</label>
                <input type="text" class="form-control" name="button" id="inputButton" placeholder="Button"
                    value="{{old('button')}}">
            </div>
            <div class="form-group col-md-6 ">
                <div class="form-group">
                    <label for="inputLink">Link</label>
                    <input type="text" class="form-control" name="link" id="inputLink" placeholder="Link"
                        value="{{old('link')}}">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputDescription">Description</label>
                <textarea name="desc" class="editor" cols="30" rows="10">{{old('desc')}}</textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputTitle">Extra</label>
                <textarea name="extra" class="editor" cols="30" rows="10">{{old('extra')}}</textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="inputTitle">More</label>
                <textarea name="more" class="editor" cols="30" rows="10">{{old('more')}}</textarea>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6 ">
                <div class="form-check">
                    <input class="form-check-input" name="state" type="checkbox" {{old('state') ? 'checked':'' }}
                        id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Display
                    </label>
                </div>
            </div>
            <div class="form-group col-md-6 ">
                <div class="form-group float-right">
                    <input type="file" id="actual-upload" onchange="readURL(this);" name="imgs" style="display: none">
                    <div class="pull-right" id="upload"
                        style="height: 200px;width: 200px;background-image: url({{old('imgs') ? secure_asset('storage/'.old('imgs')) :secure_asset('image/placeholder-image.jpg') }});background-size: contain;background-repeat: no-repeat;">
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mb-5 float-right">Insert</button>
    </form>
</div>

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