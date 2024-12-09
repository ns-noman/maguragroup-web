@extends('layouts.admin.master')
@section('content')
    <div class="content-wrapper">
        @include('layouts.admin.content-header')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">{{ $data['title'] }} Form</h3>
                            </div>
                            <form action="{{ isset($data['items']) ? route('galleries.update',$data['items']->id) : route('galleries.store'); }}" method="POST" enctype="multipart/form-data">
                                @csrf()
                                @if(isset($data['items']))
                                    @method('put')
                                @endif
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-sm-4 col-md-4 col-lg-4">
                                            <label for="">Title</label>
                                            <input value="{{ isset($data['items']) ? $data['items']->title : null }}" type="text" class="form-control" id="title" placeholder="Title" name="title">
                                        </div>
                                        <div class="form-group col-sm-4 col-md-4 col-lg-4">
                                            <label for="description">Description</label>
                                            <textarea cols="30" rows="1" class="form-control" id="description" placeholder="Description" name="description">{{ isset($data['items']) ? $data['items']->description : null }}</textarea>
                                        </div>
                                        <div class="form-group col-sm-4 col-md-4 col-lg-4">
                                            <label for="">Alt (SEO)</label>
                                            <input value="{{ isset($data['items']) ? $data['items']->alt : null }}" type="text" class="form-control" id="alt" placeholder="Alt" name="alt"  >
                                        </div>
                                        <div class="form-group col-sm-5 col-md-5 col-lg-5">
                                            <label for="image">Image {{ !isset($data['items']) ? '*' : null }} (640 X 640)</label>
                                            <input value="{{ isset($data['items']) ? $data['items']->image : null }}" type="file" class="form-control" id="image" placeholder="image" name="image" @required(!isset($data['items']))>
                                        </div>
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2">
                                            <label>Serial No. *</label>
                                            <input value="{{ isset($data['items']) ? $data['items']->srln : null }}" type="number" class="form-control" name="srln" placeholder="0.00" required>
                                        </div>
                                        <div class="form-group col-sm-5 col-md-15 col-lg-15">
                                            <label>Status *</label>
                                            <select name="status" id="status" class="form-control" required>
                                                <option @selected(($data['items']->status ?? null) === 1) value="1">Active</option>
                                                <option @selected(($data['items']->status ?? null) === 0) value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection