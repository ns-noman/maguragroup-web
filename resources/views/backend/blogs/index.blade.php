@extends('layouts.admin.master')
@section('content')
    <div class="content-wrapper">
        @include('layouts.admin.content-header')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <section class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-primary p-1">
                                <h3 class="card-title">
                                    <a href="{{ route('blogs.create') }}"class="btn btn-light shadow rounded m-0"><i
                                            class="fas fa-plus"></i>
                                        <span>Add New</span></i></a>
                                </h3>
                            </div>
                            <div class="card-body">
                                <table id="dataTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Blog Type</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Is In Home?</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            const options = {};
            options.url = '{{ route("blogs.blogs") }}';
            options.type = 'GET';
            options.columns = 
                    [
                        { data: null, orderable: false, searchable: false },
                        { data: 'blog_category_title', name: 'blog_categories.title'},
                        { data: 'title', name: 'blogs.title'},
                        { 
                            data: null,
                            orderable: false, 
                            searchable: false, 
                            render: function(data, type, row, meta) {
                                src = `{{ asset("public/uploads/blogs/:image") }}`.replace(':image', row.image);
                                return `<img width="50px" height="50px" src="${src}">`;
                            }
                        },
                        { 
                            data: null,
                            name: 'blogs.is_in_home',
                            render: function(data, type, row, meta) {
                                console.log(row);
                                return `<span class="badge badge-${row.is_in_home == '1' ? 'success' : 'warning'}">${row.is_in_home == '1' ? 'Yes' : 'No'}</span>`;
                            }
                        },
                        { 
                            data: null,
                            name: 'blogs.status',
                            render: function(data, type, row, meta) {
                                return `<span class="badge badge-${row.status == '1' ? 'success' : 'warning'}">${row.status == '1' ? 'Active' : 'Inactive'}</span>`;
                            }
                        },
                        { 
                            data: null,
                            orderable: false, 
                            searchable: false, 
                            render: function(data, type, row, meta) {
                                let edit = `{{ route('blogs.edit', ":id") }}`.replace(':id', row.id);
                                let destroy = `{{ route('blogs.destroy', ":id") }}`.replace(':id', row.id);
                                return (` <div class="d-flex justify-content-center">
                                                <a href="${edit}"
                                                    class="btn btn-info">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <form class="delete" action="${destroy}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        `);
                            }
                        }
                    ];
            options.processing = false;
            dataTable(options);
        });
    </script>
@endsection