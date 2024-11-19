@inject('authorization', 'App\Services\AuthorizationService')
@extends('layouts.admin.master')
@section('content')
    <div class="content-wrapper">
        @include('layouts.admin.content-header')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $data['totalUsers'] }}</h3>
                                <p>Total Users</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $data['totalBlog'] }}</h3>
                                <p>Total Blogs</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $data['totalProduct'] }}</h3>
                                <p>Total Products</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $data['totalCompany'] }}</h3>
                                <p>Total Companies</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-industry"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection