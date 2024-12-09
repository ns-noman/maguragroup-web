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
                            <form action="{{ isset($data['items']) ? route('companies.update',$data['items']->id) : route('companies.store'); }}" method="POST" enctype="multipart/form-data">
                                @csrf()
                                @if(isset($data['items']))
                                    @method('put')
                                @endif
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                            <label for="">Company Title *</label>
                                            <input value="{{ isset($data['items']) ? $data['items']->title : null }}" type="text" class="form-control" id="title" placeholder="Service Title" name="title" required>
                                        </div>
                                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                            <label for="site_link">Site Link</label>
                                            <input value="{{ isset($data['items']) ? $data['items']->site_link : null }}" type="text" class="form-control" id="site_link" placeholder="https://maguragroup.com.bd" name="site_link">
                                        </div>
                                        <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                            <label for="description">Description</label>
                                            <textarea cols="30" rows="5" class="form-control" id="description" placeholder="Description" name="description">{{ isset($data['items']) ? $data['items']->description : null }}</textarea>
                                        </div>
                                        <div class="form-group col-sm-3 col-md-3 col-lg-3">
                                            <label for="site_link">Logo {{ !isset($data['items']) ? '*' : null }} (100 X 100)</label>
                                            <input value="{{ isset($data['items']) ? $data['items']->logo : null }}" type="file" class="form-control" id="logo" name="logo" @required(!isset($data['items']))>
                                        </div>
                                        <div class="form-group col-sm-3 col-md-3 col-lg-3">
                                            <label for="">Alt (SEO)</label>
                                            <input value="{{ isset($data['items']) ? $data['items']->alt : null }}" type="text" class="form-control" id="alt" placeholder="Alt" name="alt"  >
                                        </div>
                                        <div class="form-group col-sm-3 col-md-3 col-lg-3">
                                            <label>Priority Number</label>
                                            <input value="{{ isset($data['items']) ? $data['items']->pn : null }}" type="number" class="form-control" name="pn" placeholder="0.00">
                                        </div>
                                        <div class="form-group col-sm-3 col-md-3 col-lg-3">
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
