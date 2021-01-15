@extends('settings.layouts.app')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4">{{ucfirst($data->type)}} #{{$data->id}}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">Contacts</a></li>
        <li class="breadcrumb-item active">{{ucfirst($data->type)}} </li>
    </ol>
    <form method="POST" enctype="multipart/form-data" action="{{route('dashboard.updatearticle',$data->id)}}">
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
            <div class="form-group col-md-12">
                <label for="inputTitle">Description</label>
                <textarea name="desc" class="editor" cols="30" rows="10">{{$data->desc}}</textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6 ">
                <label for="inputPhone">Phone</label>
                <input type="text" class="form-control" name="phone" id="inputPhone" placeholder="Phone"
                    value="{{$data->button}}">
            </div>
            <div class="form-group col-md-6 ">
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="text" class="form-control" name="email" id="inputEmail" placeholder="Email"
                        value="{{$data->link}}">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="exampleFormControlTextarea1">Address</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="address"
                    rows="3">{{$data->extra}}</textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="latlog">https://www.embedgooglemap.net/</label>
                <input id="latlog" name="map" class="form-control" type="text" placeholder="link" value="{{json_decode($data->image)}}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary float-right mb-5">Update</button>
    </form>
</div>
@endsection