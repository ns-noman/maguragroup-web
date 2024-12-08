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
                                    <a href="{{ route('companies.create') }}"class="btn btn-light shadow rounded m-0"><i
                                            class="fas fa-plus"></i>
                                        <span>Add New</span></i></a>
                                </h3>
                            </div>
                            <div class="card-body">
                                <table id="dataTable" class="table table-bordered table-striped">
                                    <thead>

                                        <tr>
                                            <th>SN</th>
                                            <th>PN</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Site Link</th>
                                            <th>Logo</th>
                                            <th>Is In Home</th>
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
            options.url = '{{ route("companies.companies") }}';
            options.type = 'GET';
            options.columns = 
                    [
                        { data: null, orderable: false, searchable: false },
                         { data: 'pn', name: 'companies.pn'},
                        { data: 'title', name: 'companies.title'},
                        { data: 'description', name: 'companies.description'},
                        { data: 'site_link', name: 'companies.site_link'},
                        { 
                            data: null,
                            orderable: false, 
                            searchable: false, 
                            render: function(data, type, row, meta) {
                                src = `{{ asset("public/uploads/companies/:logo") }}`.replace(':logo', row.logo);
                                return `<img width="50px" height="50px" src="${src}">`;
                            }
                        },
                        { 
                            data: null,
                            searchable: false,
                            name: 'companies.is_in_home',
                            render: function(data, type, row, meta) {
                                return `<span class="badge badge-${row.is_in_home == '1' ? 'success' : 'warning'}">${row.is_in_home == '1' ? 'Yes' : 'No'}</span>`;
                            }
                        },
                        { 
                            data: null,
                            searchable: false,
                            name: 'companies.status',
                            render: function(data, type, row, meta) {
                                return `<span class="badge badge-${row.status == '1' ? 'success' : 'warning'}">${row.status == '1' ? 'Active' : 'Inactive'}</span>`;
                            }
                        },
                        { 
                            data: null,
                            orderable: false, 
                            searchable: false, 
                            render: function(data, type, row, meta) {
                                let edit = `{{ route('companies.edit', ":id") }}`.replace(':id', row.id);
                                let destroy = `{{ route('companies.destroy', ":id") }}`.replace(':id', row.id);
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