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
                            <form action="{{ isset($data['items']) ? route('sliders.update',$data['items']->id) : route('sliders.store'); }}" method="POST" enctype="multipart/form-data">
                                @csrf()
                                @if(isset($data['items']))
                                    @method('put')
                                @endif
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                            <label>Company *</label>
                                            <select class="form-control" name="company_id" required>
                                                <option value="0">Defaut Company</option>
                                                @foreach ($data['companies'] as $company)
                                                    <option @selected(isset($data['items']) && $data['items']->company_id == $company->id) value="{{ $company->id }}">{{ $company->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                            <label for="">Title</label>
                                            <input value="{{ isset($data['items']) ? $data['items']->title : null }}" type="text" class="form-control" id="title" placeholder="Title" name="title">
                                        </div>
                                        <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                            <label for="description">Description</label>
                                            <textarea cols="30" rows="3" class="form-control" id="description" placeholder="Description" name="description">{{ isset($data['items']) ? $data['items']->description : null }}</textarea>
                                        </div>
                                        <div class="form-group col-sm-3 col-md-3 col-lg-3">
                                            <label for="image">Image {{ !isset($data['items']) ? '*' : null }} (1920 X 768)</label>
                                            <input value="{{ isset($data['items']) ? $data['items']->image : null }}" type="file" class="form-control" id="image" placeholder="image" name="image" @required(!isset($data['items']))>
                                        </div>
                                        <div class="form-group col-sm-3 col-md-3 col-lg-3">
                                            <label for="">Alt (SEO)</label>
                                            <input value="{{ isset($data['items']) ? $data['items']->alt : null }}" type="text" class="form-control" id="alt" placeholder="Alt" name="alt"  >
                                        </div>
                                        <div class="form-group col-sm-3 col-md-3 col-lg-3">
                                            <label>Serial No. *</label>
                                            <input value="{{ isset($data['items']) ? $data['items']->srln : null }}" type="number" class="form-control" name="srln" placeholder="0.00" required>
                                        </div>
                                        <div class="form-group col-sm-3 col-md-3 col-lg-3">
                                            <label>&nbsp;</label>
                                            <div class="form-group clearfix">
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