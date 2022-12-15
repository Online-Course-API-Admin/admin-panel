@extends('layouts.master')
@section('title', 'Courses')

@section('content')
                <!-- CONTENT  -->
                
                <div class="mdk-drawer-layout__content page">
                    <div class="container-fluid page__heading-container">
                    <div
                        class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left"
                    >
                        <h1 class="m-lg-0">Courses</h1>
                        <a href="{{ url('course/create') }}" class="btn btn-success ml-lg-3"
                        >New Course <i class="material-icons">add</i></a
                        >
                    </div>
                    </div>

                    <div class="container-fluid page__container">
                    <form action="#" class="mb-2">
                        <div class="d-flex">
                        <div class="search-form mr-3 search-form--light">
                            <input type="text" class="form-control" placeholder="Filter by name" id="searchSample02" />
                            <button class="btn" type="button"><i class="material-icons">search</i></button>
                        </div>

                        <div class="form-inline ml-auto">
                            <div class="form-group mr-3">
                            <label for="custom-select" class="form-label mr-1">Sort</label>
                            <select id="custom-select" class="form-control custom-select" style="width: 200px">
                                <option selected>Name</option>
                                <option value="2">Created Date</option>
                                <option value="1">Earnings</option>
                            </select>
                            </div>
                            <div class="form-group">
                            <label for="published01" class="form-label mr-1">Status</label>
                            <select id="published01" class="form-control custom-select" style="width: 200px">
                                <option selected>Published</option>
                                <option value="1">Draft</option>
                                <option value="3">All</option>
                            </select>
                            </div>
                        </div>
                        </div>
                    </form>

                    <div class="row">
                        <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                            <div class="d-flex flex-column flex-sm-row">
                                <a href="#" class="avatar mb-3 w-xs-plus-down-100 mr-sm-3">
                                <img src="assets/images/logos/vuejs.svg" alt="Card image cap" class="avatar-course-img" />
                                </a>
                                <div class="flex" style="min-width: 200px">
                                <div class="d-flex">
                                    <div>
                                    <h4 class="card-title mb-1">Learn Vue.js</h4>
                                    <p class="text-muted">Let’s start with a quick tour of Vue’s data binding features.</p>
                                    </div>
                                    <div class="dropdown ml-auto">
                                    <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ url('course/edit') }}">Edit Course</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#">Archive</a>
                                    </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end">
                                    <div class="d-flex flex flex-column mr-3">
                                    <div class="d-flex align-items-center py-2 border-bottom">
                                        <span class="mr-2">Rp. 150,000</span>
                                        <small class="text-muted ml-auto">34 STUDENT</small>
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                        <span class="badge badge-primary mr-2">BEGINNER</span>
                                        <span class="badge badge-soft-secondary">FRAMEWORK</span>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                            <div class="d-flex flex-column flex-sm-row">
                                <a href="#" class="avatar mb-3 w-xs-plus-down-100 mr-sm-3">
                                <img src="assets/images/logos/node.svg" alt="Card image cap" class="avatar-course-img" />
                                </a>
                                <div class="flex" style="min-width: 200px">
                                <div class="d-flex">
                                    <div>
                                    <h4 class="card-title mb-1">
                                    Npm &amp; Gulp Advanced Workflow
                                    </h4>
                                    <p class="text-muted">Learn the basics of Github and become a power Github developer.</p>
                                    </div>
                                    <div class="dropdown ml-auto">
                                    <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ url('course/edit') }}">Edit Course</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#">Archive</a>
                                    </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end">
                                    <div class="d-flex flex flex-column mr-3">
                                    <div class="d-flex align-items-center py-2 border-bottom">
                                        <span class="mr-2">Rp. 99,000</span>
                                        <small class="text-muted ml-auto">12 STUDENT</small>
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                        <span class="badge badge-success mr-2">INTERMEDIATE</span>
                                        <span class="badge badge-soft-secondary">OOP</span>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                            <div class="d-flex flex-column flex-sm-row">
                                <a href="#" class="avatar mb-3 w-xs-plus-down-100 mr-sm-3">
                                <img src="assets/images/logos/gitlab.png" alt="Card image cap" class="avatar-course-img" />
                                </a>
                                <div class="flex" style="min-width: 200px">
                                <div class="d-flex">
                                    <div>
                                    <h4 class="card-title mb-1">
                                    Gitlab for Beginners
                                    </h4>
                                    <p class="text-muted">Developing static website with fast and advanced gulp setup.</p>
                                    </div>
                                    <div class="dropdown ml-auto">
                                    <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ url('course/edit') }}">Edit Course</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#">Archive</a>
                                    </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end">
                                    <div class="d-flex flex flex-column mr-3">
                                    <div class="d-flex align-items-center py-2 border-bottom">
                                        <span class="mr-2">Rp. 120,000</span>
                                        <small class="text-muted ml-auto">50 STUDENT</small>
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                        <span class="badge badge-danger mr-2">EXPERT</span>
                                        <span class="badge badge-soft-secondary">TOOLS</span>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                            <div class="d-flex flex-column flex-sm-row">
                                <a href="#" class="avatar mb-3 w-xs-plus-down-100 mr-sm-3">
                                <img src="assets/images/logos/rails.svg" alt="Card image cap" class="avatar-course-img" />
                                </a>
                                <div class="flex" style="min-width: 200px">
                                <div class="d-flex">
                                    <div>
                                    <h4 class="card-title mb-1">
                                    Ruby on Rails Workflows
                                    </h4>
                                    <p class="text-muted">Let’s start with a quick tour of Vue’s data binding features.</p>
                                    </div>
                                    <div class="dropdown ml-auto">
                                    <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ url('course/edit') }}">Edit Course</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#">Archive</a>
                                    </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end">
                                    <div class="d-flex flex flex-column mr-3">
                                    <div class="d-flex align-items-center py-2 border-bottom">
                                        <span class="mr-2">Rp. 160,000</span>
                                        <small class="text-muted ml-auto">5 STUDENT</small>
                                    </div>
                                    <div class="d-flex align-items-center py-2">
                                        <span class="badge badge-primary mr-2">BEGINNER</span>
                                        <span class="badge badge-soft-secondary">DESIGN</span>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <!-- // END CONTENT drawer-layout__content -->
                
            </div>
        <!-- // END drawer-layout -->
        </div>
        <!-- // END header-layout__content -->
    </div>
    <!-- // END header-layout -->
 

 @stop
    