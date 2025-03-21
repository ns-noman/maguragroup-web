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
                                    <a href="{{ route('service-types.create') }}"class="btn btn-light shadow rounded m-0"><i
                                            class="fas fa-plus"></i>
                                        <span>Add New</span></i></a>
                                </h3>
                            </div>
                            <div class="card-body">
                                <table id="dataTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Icon</th>
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
            options.url = '{{ route("service-types.serviceTypes") }}';
            options.type = 'GET';
            options.columns = 
                    [
                        { data: null, orderable: false, searchable: false },
                        { data: 'title', name: 'service_types.title'},
                        { data: 'description', name: 'service_types.description'},
                        { 
                            data: null,
                            orderable: false, 
                            searchable: false,
                            render: function(data, type, row, meta){
                                return $('<div>').html(row.icon).text();
                            }
                        },
                        { 
                            data: null,
                            orderable: false, 
                            searchable: false,
                            render: function(data, type, row, meta) {
                                return `<span class="badge badge-${row.is_in_home ? 'success' : 'warning'}">${row.is_in_home ? 'Yes' : 'No'}</span>`;
                            }
                        },
                        { 
                            data: null,
                            orderable: false, 
                            searchable: false, 
                            render: function(data, type, row, meta) {
                                return `<span class="badge badge-${row.status ? 'success' : 'warning'}">${row.status ? 'Active' : 'Inactive'}</span>`;
                            }
                        },
                        { 
                            data: null,
                            orderable: false, 
                            searchable: false, 
                            render: function(data, type, row, meta) {
                                let edit = `{{ route('service-types.edit', ":id") }}`.replace(':id', row.id);
                                let destroy = `{{ route('service-types.destroy', ":id") }}`.replace(':id', row.id);
                                return (` <div class="d-flex justify-content-center">
                                                <a href="${edit}"
                                                    class="btn btn-info">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
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