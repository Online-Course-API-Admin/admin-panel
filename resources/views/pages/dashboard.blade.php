@extends('layouts.master')
@section('title', 'Dashboard')

@section('content')
                <!-- CONTENT  -->
                <div class="mdk-drawer-layout__content page">
                    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

                    <div class="container-fluid page__container">
                        <div class="card card-form">
                        <div class="row no-gutters">
                            <div class="col-lg-12 card-form__body">
                            <div class="search-form search-form--light m-3">
                                <input type="text" class="form-control search" placeholder="Search" />
                                <button class="btn" type="button" role="button"><i class="material-icons">search</i></button>
                            </div>
                            <div class="mx-3">
                                <div class="d-flex flex-row align-items-center">
                                <div class="form-inline">
                                    View
                                    <select class="custom-select ml-2">
                                    <option value="20" selected>20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    <option value="200">200</option>
                                    </select>
                                </div>
                                <div class="ml-auto">
                                    20 <span class="text-muted">of 100</span>
                                    <a href="#" class="icon-muted"><i class="material-icons float-right">arrow_forward</i></a>
                                </div>
                                </div>
                            </div>
                            <div
                                class="table-responsive border-bottom"
                                data-toggle="lists"
                                data-lists-values='["js-lists-values-employee-name"]'
                            >
                                <table class="table mb-0 thead-border-top-0">
                                <thead>
                                    <tr>
                                    <th style="width: 18px">
                                        <div class="custom-control custom-checkbox">
                                        <input
                                            type="checkbox"
                                            class="custom-control-input js-toggle-check-all"
                                            data-target="#staff"
                                            id="customCheckAll"
                                        />
                                        <label class="custom-control-label" for="customCheckAll"
                                            ><span class="text-hide">Toggle all</span></label
                                        >
                                        </div>
                                    </th>

                                    <th>Employee</th>

                                    <th style="width: 37px">Status</th>
                                    <th style="width: 120px">Class</th>
                                    <th style="width: 140px">Earnings</th>
                                    <th style="width: 24px"></th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="staff">
                                    <tr class="selected">
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                        <input
                                            type="checkbox"
                                            class="custom-control-input js-check-selected-row"
                                            checked=""
                                            id="customCheck1_1"
                                        />
                                        <label class="custom-control-label" for="customCheck1_1"
                                            ><span class="text-hide">Check</span></label
                                        >
                                        </div>
                                    </td>

                                    <td>
                                        <div class="media align-items-center">
                                        <div class="avatar avatar-xs mr-2">
                                            <img
                                            src="{{asset('assets')}}/images/256_luke-porter-261779-unsplash.jpg"
                                            alt="Avatar"
                                            class="avatar-img rounded-circle"
                                            />
                                        </div>
                                        <div class="media-body">
                                            <span class="js-lists-values-employee-name">Michael Smith</span>
                                        </div>
                                        </div>
                                    </td>

                                    <td><span class="badge badge-warning">WAITING</span></td>
                                    <td><small class="text-muted">Belajar OOP dengan Java</small></td>
                                    <td>Rp. 150,532</td>
                                    <td>
                                        <button
                                        type="button"
                                        class="btn btn-primary"
                                        data-toggle="modal"
                                        data-target="#modal-small"
                                        >
                                        Accept
                                        </button>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                        <input
                                            type="checkbox"
                                            class="custom-control-input js-check-selected-row"
                                            id="customCheck2_1"
                                        />
                                        <label class="custom-control-label" for="customCheck2_1"
                                            ><span class="text-hide">Check</span></label
                                        >
                                        </div>
                                    </td>

                                    <td>
                                        <div class="media align-items-center">
                                        <img src="{{asset('assets')}}/images/avatar/green.svg" class="mr-2" alt="avatar" />
                                        <div class="media-body">
                                            <span class="js-lists-values-employee-name">Connie Smith</span>
                                        </div>
                                        </div>
                                    </td>

                                    <td><span class="badge badge-success">PAID</span></td>
                                    <td><small class="text-muted">Ahli Backend dengan Laravel</small></td>
                                    <td>Rp. 99,820</td>
                                    <td>
                                        <button
                                        type="button"
                                        class="btn btn-primary"
                                        data-toggle="modal"
                                        data-target="#modal-small"
                                        >
                                        Accept
                                        </button>
                                    </td>
                                    </tr>

                                    <tr class="selected">
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                        <input
                                            type="checkbox"
                                            class="custom-control-input js-check-selected-row"
                                            checked=""
                                            id="customCheck1_2"
                                        />
                                        <label class="custom-control-label" for="customCheck1_2"
                                            ><span class="text-hide">Check</span></label
                                        >
                                        </div>
                                    </td>

                                    <td>
                                        <div class="media align-items-center">
                                        <div class="avatar avatar-xs mr-2">
                                            <img
                                            src="{{asset('assets')}}/images/256_luke-porter-261779-unsplash.jpg"
                                            alt="Avatar"
                                            class="avatar-img rounded-circle"
                                            />
                                        </div>
                                        <div class="media-body">
                                            <span class="js-lists-values-employee-name">Michael Smith</span>
                                        </div>
                                        </div>
                                    </td>

                                    <td><span class="badge badge-warning">WAITING</span></td>
                                    <td><small class="text-muted">PHP Dasar</small></td>
                                    <td>Rp. 80,346</td>
                                    <td>
                                        <button
                                        type="button"
                                        class="btn btn-primary"
                                        data-toggle="modal"
                                        data-target="#modal-small"
                                        >
                                        Accept
                                        </button>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                        <input
                                            type="checkbox"
                                            class="custom-control-input js-check-selected-row"
                                            id="customCheck2_2"
                                        />
                                        <label class="custom-control-label" for="customCheck2_2"
                                            ><span class="text-hide">Check</span></label
                                        >
                                        </div>
                                    </td>

                                    <td>
                                        <div class="media align-items-center">
                                        <img src="{{asset('assets')}}/images/avatar/green.svg" class="mr-2" alt="avatar" />
                                        <div class="media-body">
                                            <span class="js-lists-values-employee-name">Connie Smith</span>
                                        </div>
                                        </div>
                                    </td>

                                    <td><span class="badge badge-success">PAID</span></td>
                                    <td><small class="text-muted">Front-End Developer with Vue Js</small></td>
                                    <td>Rp. 200,053</td>
                                    <td>
                                        <button
                                        type="button"
                                        class="btn btn-primary"
                                        data-toggle="modal"
                                        data-target="#modal-small"
                                        >
                                        Accept
                                        </button>
                                    </td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                            <button
                                type="button"
                                class="btn btn-primary ml-3"
                                data-toggle="modal"
                                data-target="#modal-standard"
                            >
                                Accept All
                            </button>
                            <hr />
                            <div class="row justify-content-center">
                                <div>
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true" class="material-icons">first_page</span>
                                        <span class="sr-only">First</span>
                                    </a>
                                    </li>

                                    <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true" class="material-icons">chevron_left</span>
                                        <span class="sr-only">Prev</span>
                                    </a>
                                    </li>

                                    <li class="page-item active">
                                    <a class="page-link" href="#" aria-label="1">
                                        <span>1</span>
                                    </a>
                                    </li>

                                    <li class="page-item">
                                    <a class="page-link" href="#" aria-label="2">
                                        <span>2</span>
                                    </a>
                                    </li>

                                    <li class="page-item">
                                    <a class="page-link" href="#" aria-label="3">
                                        <span>3</span>
                                    </a>
                                    </li>

                                    <li class="page-item">
                                    <a class="page-link" href="#" aria-label="4">
                                        <span>4</span>
                                    </a>
                                    </li>

                                    <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span class="sr-only">Next</span>
                                        <span aria-hidden="true" class="material-icons">chevron_right</span>
                                    </a>
                                    </li>

                                    <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span class="sr-only">Last</span>
                                        <span aria-hidden="true" class="material-icons">last_page</span>
                                    </a>
                                    </li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

                    <script>
                        AOS.init();
                    </script>
                </div>
                <!-- // END CONTENT drawer-layout__content -->
                
            </div>
            <!-- // END drawer-layout -->
        </div>
        <!-- // END header-layout__content -->
    </div>
    
    <!-- Modal small  -->
    <div
    id="modal-small"
    class="modal fade"
    tabindex="-1"
    role="dialog"
    aria-labelledby="modal-small-title"
    aria-hidden="true"
    >
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-small-title">Are you sure?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- // END .modal-header -->
            <div class="modal-body">
                <p>Putting <strong>Michael Smith</strong> in his <i>Belajar OOP dengan Java</i> class</p>
            </div>
            <!-- // END .modal-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Accept to class</button>
            </div>
            <!-- // END .modal-footer -->
            </div>
            <!-- // END .modal-content -->
        </div>
        <!-- // END .modal-dialog -->
    </div>
    <!-- end modal small  -->

    <!-- standar modal  -->
    <div
    id="modal-standard"
    class="modal fade"
    tabindex="-1"
    role="dialog"
    aria-labelledby="modal-standard-title"
    aria-hidden="true"
    >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-standard-title">Are you sure?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- // END .modal-header -->
            <div class="modal-body">
                <p>Putting all selected member to their course requests.</p>
            </div>
            <!-- // END .modal-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Yes, accept all</button>
            </div>
            <!-- // END .modal-footer -->
            </div>
            <!-- // END .modal-content -->
        </div>
        <!-- // END .modal-dialog -->
    </div>
    <!-- end standar modal  -->
    <!-- // END header-layout -->
 

 @stop
    