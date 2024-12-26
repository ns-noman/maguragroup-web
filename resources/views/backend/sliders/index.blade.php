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
                                    <a href="{{ route('sliders.create') }}"class="btn btn-light shadow rounded m-0"><i
                                            class="fas fa-plus"></i>
                                        <span>Add New</span></i></a>
                                </h3>
                            </div>
                            <div class="card-body">
                                <table id="dataTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Order No</th>
                                            <th>Company Title</th>
                                            <th>Slider Title</th>
                                            <th>Description</th>
                                            <th>Image</th>
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
            options.url = '{{ route("sliders.sliders") }}';
            options.type = 'GET';
            options.columns = 
                    [
                        { data: null, orderable: false, searchable: false },
                        { 
                            data: null,
                            name: 'companies.title',
                            render: function(data, type, row, meta) {
                                return row.company_title ? row.company_title : 'Default Company';
                            }
                        },
                        { data: 'srln', name: 'sliders.srln'},
                        { data: 'title', name: 'sliders.title'},
                        { data: 'description', name: 'sliders.description'},
                        { 
                            data: null,
                            orderable: false, 
                            searchable: false, 
                            render: function(data, type, row, meta) {
                                src = `{{ asset("public/uploads/sliders/:image") }}`.replace(':image', row.image);
                                return `<img width="50px" height="50px" src="${src}">`;
                            }
                        },
                        { 
                            data: null,
                            orderable: false, 
                            searchable: false, 
                            render: function(data, type, row, meta) {
                                return `<span class="badge badge-${row.status == '1' ? 'success' : 'warning'}">${row.status == '1' ? 'Active' : 'Inactive'}</span>`;
                            }
                        },
                        { 
                            data: null,
                            orderable: false, 
                            searchable: false, 
                            render: function(data, type, row, meta) {
                                let edit = `{{ route('sliders.edit', ":id") }}`.replace(':id', row.id);
                                let destroy = `{{ route('sliders.destroy', ":id") }}`.replace(':id', row.id);
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