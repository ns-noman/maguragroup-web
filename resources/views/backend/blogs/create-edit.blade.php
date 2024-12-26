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
                            <form action="{{ isset($data['items']) ? route('blogs.update',$data['items']->id) : route('blogs.store'); }}" method="POST" enctype="multipart/form-data">
                                @csrf()
                                @if(isset($data['items']))
                                    @method('put')
                                @endif
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-sm-4 col-md-4 col-lg-4">
                                            <label>Blog Category *</label>
                                            <select class="form-control" name="cat_id" required>
                                                <option value=''>Select Blog Category</option>
                                                @foreach ($data['blog_categories'] as $blog_category)
                                                    <option @selected(isset($data['items']) && $data['items']->cat_id == $blog_category->id) value="{{ $blog_category->id }}">{{ $blog_category->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-8 col-md-8 col-lg-8">
                                            <label for="">Blot Title  (max: 50 charcters)*</label>
                                            <input value="{{ isset($data['items']) ? $data['items']->title : null }}" type="text" class="form-control" id="title" placeholder="Blot Title" name="title" required>
                                        </div>
                                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                            <label for="short_description">Short Description (max: 120 charcters)*</label>
                                            <textarea cols="30" rows="5" class="form-control" id="short_description" placeholder="Short Description" name="short_description" required>{{ isset($data['items']) ? $data['items']->short_description : null }}</textarea>
                                        </div>
                                        <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                            <label for="description">Description *</label>
                                            <textarea cols="30" rows="5" class="form-control" id="description" placeholder="Description" name="description" required>{{ isset($data['items']) ? $data['items']->description : null }}</textarea>
                                        </div>
                                        <div class="form-group col-sm-4 col-md-4 col-lg-4">
                                            <label for="image">Image {{ !isset($data['items']) ? '*' : null }} (640 X 428)</label>
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
                                                <div class="icheck-success d-inline">
                                                    <input value="1" name="is_in_home" type="checkbox" {{ isset($data['items']) ? $data['items']->is_in_home ? 'checked' : '' : 'checked' }} id="is_in_home">
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
@section('script')
<script>
    $('#short_description').summernote({
        placeholder: 'Short Description',
        tabsize: 2,
        height: 120
    });
    $('#description').summernote({
        placeholder: 'Description',
        tabsize: 2,
        height: 120
    });
</script>
@endsection
