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
                            <form action="{{ isset($data['items']) ? route('service-types.update',$data['items']->id) : route('service-types.store'); }}" method="POST" enctype="multipart/form-data">
                                @csrf()
                                @if(isset($data['items']))
                                    @method('put')
                                @endif
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                            <label for="">Title *</label>
                                            <input required value="{{ isset($data['items']) ? $data['items']->title : null }}" type="text" class="form-control" id="title" placeholder="Title" name="title">
                                        </div>
                                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                            <label for="description">Description *</label>
                                            <textarea required cols="30" rows="1" class="form-control" id="description" placeholder="Description" name="description">{{ isset($data['items']) ? $data['items']->description : null }}</textarea>
                                        </div>
                                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                            <label for="">Icon *</label>
                                            <input required value="{{ isset($data['items']) ? $data['items']->icon : null }}" type="text" class="form-control" id="icon" placeholder='<i class="fas fa-utensils"></i>' name="icon">
                                        </div>
                                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                            <label>&nbsp;</label>
                                            <div class="form-group clearfix">
                                                <div class="icheck-success d-inline">
                                                    <input value="1" name="is_in_home" type="checkbox" {{ isset($data['items']) ? $data['items']['is_in_home'] ? 'checked' : '' : 'checked' }} id="is_in_home">
                                                    <label for="is_in_home">Is In Home?</label>
                                                </div>
                                                <div class="icheck-info d-inline ml-3">
                                                    <input value="1" name="status" type="checkbox" {{ isset($data['items']) ? $data['items']['status'] ? 'checked' : '' : 'checked' }} id="status">
                                                    <label for="status">Active?</label>
                                                </div>
                                            </div>
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