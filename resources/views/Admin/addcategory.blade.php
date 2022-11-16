@extends('components.admin-layout')

@section('content')
    <div class="page-wrapper">
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title"><strong>MERILYN RESTAURANT</strong></h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <div class="d-md-flex">
                        <ol class="breadcrumb ms-auto">
                            <li><a href="{{ '/' }}" class="fw-normal"> <strong>HOME</strong> </a></li>
                        </ol>
                        <ol class="breadcrumb ms-auto">
                            <li><a href="#" class="fw-normal"> <strong>ADMIN</strong></a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info bg-success">
                        <h3 class="box-title">USERS</h3>
                        <ul class="list-inline two-part d-flex align-items-center mb-0">
                            <li>
                                <div>
                                    <i class="far fa-address-book   " aria-hidden="true"> ALL USERS</i>
                                </div>
                            </li>
                            <li class="ms-auto">
                                <span class="counter text-dark">659</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info bg-primary">
                        <h3 class="box-title">MENUS</h3>
                        <ul class="list-inline two-part d-flex align-items-center mb-0">
                            <li>
                                <div>
                                    <i class="fas fa-list-ul  " aria-hidden="true"> MENU ITEMS</i>
                                </div>
                            </li>
                            <li class="ms-auto">
                                <span class="counter text-dark">869</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info bg-warning">
                        <h3 class="box-title">DRINKS</h3>
                        <ul class="list-inline two-part d-flex align-items-center mb-0">
                            <li>
                            <li>
                                <div>
                                    <i class="fas fa-coffee " aria-hidden="true"> COCKTAILS $ WINES</i>
                                </div>
                            </li>
                            </li>
                            <li class="ms-auto">
                                <span class="counter text-dark">911</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-lg-10 col-xlg-9 col-md-12 mx-auto">
                <div class="card ">
                    <div class="card-body ">
                        <h3 class="box-title text-center"><strong>ADD CATEGORY</strong> </h3>
                        <form action="{{ '/addcategory' }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"><strong>CATEGORY-NAME</strong></label>
                                <div class="col-sm-10">
                                    <input type="text" name="category_name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary ">Add Category</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer text-center">2021 © JonLee Admin</footer>
    </div>
@endsection