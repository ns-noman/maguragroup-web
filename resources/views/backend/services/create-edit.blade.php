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
                            <form action="{{ isset($data['items']) ? route('services.update',$data['items']->id) : route('services.store'); }}" method="POST" enctype="multipart/form-data">
                                @csrf()
                                @if(isset($data['items']))
                                    @method('put')
                                @endif
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-sm-4 col-md-4 col-lg-4">
                                            <label>Service Type *</label>
                                            <select class="form-control" name="service_type_id" required>
                                                <option value=''>Select Service Type</option>
                                                @foreach ($data['service_types'] as $service_type)
                                                    <option @selected(isset($data['items']) && $data['items']->service_type_id == $service_type->id) value="{{ $service_type->id }}">{{ $service_type->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-8 col-md-8 col-lg-8">
                                            <label for="">Service Title *</label>
                                            <input value="{{ isset($data['items']) ? $data['items']->title : null }}" type="text" class="form-control" id="title" placeholder="Service Title" name="title" required>
                                        </div>
                                        <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                            <label for="description">Description *</label>
                                            <textarea cols="30" rows="5" class="form-control" id="description" placeholder="Description" name="description" required>{{ isset($data['items']) ? $data['items']->description : null }}</textarea>
                                        </div>
                                        <div class="form-group col-sm-4 col-md-4 col-lg-4">
                                            <label for="image">Image (640X428)</label>
                                            <input value="{{ isset($data['items']) ? $data['items']->image : null }}" type="file" class="form-control" id="image" placeholder="image" name="image" @required(!isset($data['items']))>
                                        </div>
                                        <div class="form-group col-sm-3 col-md-3 col-lg-3">
                                            <label for="">Alt (SEO)</label>
                                            <input value="{{ isset($data['items']) ? $data['items']->alt : null }}" type="text" class="form-control" id="alt" placeholder="Alt" name="alt"  >
                                        </div>
                                        <div class="form-group col-sm-3 col-md-3 col-lg-3">
                                            <label>Priority Number</label>
                                            <input value="{{ isset($data['items']) ? $data['items']->pn : null }}" type="number" class="form-control" name="pn" placeholder="0.00">
                                        </div>
                                        <div class="form-group col-sm-2 col-md-2 col-lg-2">
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
@section('script')
<script>
    $('#description').summernote({
        placeholder: 'Description',
        tabsize: 2,
        height: 120
    });
</script>
@endsection