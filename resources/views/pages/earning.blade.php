@extends('layouts.master')
@section('title', 'Create Quiz')

@section('content')
                <!-- CONTENT  -->
                
                <div class="mdk-drawer-layout__content page">
                  <div class="container-fluid page__heading-container">
                    <div class="page__heading d-flex align-items-center justify-content-between">
                      <h1 class="m-0">Earnings</h1>
                    </div>
                  </div>

                  <div class="container-fluid page__container">
                  <div class="card">
                      <div class="card-header card-header-large bg-white">
                        <h4 class="card-header__title">Current Course</h4>
                      </div>
                      <div class="card-header">
                        <form class="form-inline">
                          <label class="mr-sm-2" for="inlineFormFilterBy">Filter by:</label>
                          <input
                            type="text"
                            class="form-control mb-2 mr-sm-2 mb-sm-0"
                            id="inlineFormFilterBy"
                            placeholder="Type a name"
                          />

                          <label class="sr-only" for="inlineFormRole">Course</label>
                          <select id="inlineFormRole" class="custom-select mb-2 mr-sm-2 mb-sm-0">
                            <option value="Courses">All Courses</option>
                            <option value="Courses">Belajar OOP dengan Java</option>
                            <option value="Courses">PHP Dasar</option>
                            <option value="Courses">Ahli Backend dengan Laravel</option>
                          </select>
                        </form>
                      </div>
                    </div>

                    <!-- Show earn by All course  -->
                    
                    <div class="row card-group-row">
                      <div class="col-lg-4 col-md-5 card-group-row__col">
                        <div class="card card-group-row__card">
                          <div class="card-header card-header-large bg-light d-flex align-items-center">
                            <div class="flex">
                              <h4 class="card-header__title">Total Balance</h4>
                              <div class="card-subtitle text-muted">This billing cycle</div>
                            </div>
                            <div class="dropdown ml-auto">
                              <a href="#" data-toggle="dropdown" data-caret="false" class="text-dark-gray"
                                ><i class="material-icons">more_horiz</i></a
                              >
                              <div class="dropdown-menu dropdown-menu-right">
                                <a href="javascript:void(0)" class="dropdown-item">Go to Report</a>
                                <a href="javascript:void(0)" class="dropdown-item">Next Cycle</a>
                              </div>
                            </div>
                          </div>
                          <div class="card-body d-flex align-items-center justify-content-center h-250">
                            <div class="chart z-0 dashboard-chart">
                              <div class="d-flex flex-column align-items-center justify-content-center">
                                <div class="text-amount mb-1">Rp. 3,937,290</div>
                                <div class="text-muted">All Course</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-7">
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
                                        <th>Class</th>
                                        <th>Earnings</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list" id="staff">
                                        <tr class="selected">
                                        <td>
                                            <div class="media align-items-center">
                                            <div class="avatar avatar-xs mr-2">
                                                <img
                                                src="{{asset('assets')}}/images/logos/javascript.svg"
                                                alt="Avatar"
                                                class="avatar-img rounded-circle"
                                                />
                                            </div>
                                            <div class="media-body">
                                                <span class="js-lists-values-employee-name">Belajar OOP dengan Java</span>
                                            </div>
                                            </div>
                                        </td>
                                        <td>Rp. 350,532</td>
                                        </tr>
                                        <tr>
                                        <td>
                                            <div class="media align-items-center">
                                            <img src="{{asset('assets')}}/images/logos/node.svg" class="mr-2" alt="avatar" />
                                            <div class="media-body">
                                                <span class="js-lists-values-employee-name">Ahli Backend dengan Laravel</span>
                                            </div>
                                            </div>
                                        </td>
                                        <td>Rp. 835,560</td>
                                        </tr>

                                        <tr class="selected">
                                        <td>
                                            <div class="media align-items-center">
                                            <div class="avatar avatar-xs mr-2">
                                                <img
                                                src="{{asset('assets')}}/images/logos/react.svg"
                                                alt="Avatar"
                                                class="avatar-img rounded-circle"
                                                />
                                            </div>
                                            <div class="media-body">
                                                <span class="js-lists-values-employee-name">PHP Dasar</span>
                                            </div>
                                            </div>
                                        </td>
                                        <td>Rp. 1,280,346</td>
                                        </tr>
                                        <tr>
                                        <td>
                                            <div class="media align-items-center">
                                            <img src="{{asset('assets')}}/images/logos/vuejs.svg" class="mr-2" alt="avatar" />
                                            <div class="media-body">
                                                <span class="js-lists-values-employee-name">Front-End Developer with Vue Js</span>
                                            </div>
                                            </div>
                                        </td>
                                        <td>Rp. 200,053</td>
                                        </tr>
                                    </tbody>
                                    </table>
                                </div>
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
                    </div>

                    <!-- Show earn by Filter course  -->

                    <div class="row card-group-row">
                      <div class="col-lg-4 col-md-5 card-group-row__col">
                        <div class="card card-group-row__card">
                          <div class="card-header card-header-large bg-light d-flex align-items-center">
                            <div class="flex">
                              <h4 class="card-header__title">Total Balance</h4>
                              <div class="card-subtitle text-muted">This billing cycle</div>
                            </div>
                            <div class="dropdown ml-auto">
                              <a href="#" data-toggle="dropdown" data-caret="false" class="text-dark-gray"
                                ><i class="material-icons">more_horiz</i></a
                              >
                              <div class="dropdown-menu dropdown-menu-right">
                                <a href="javascript:void(0)" class="dropdown-item">Go to Report</a>
                                <a href="javascript:void(0)" class="dropdown-item">Next Cycle</a>
                              </div>
                            </div>
                          </div>
                          <div class="card-body d-flex align-items-center justify-content-center h-250">
                            <div class="chart z-0 dashboard-chart">
                              <div class="d-flex flex-column align-items-center justify-content-center">
                                <div class="text-amount mb-1">Rp. 835,560</div>
                                <div class="text-muted">Ahli Backend dengan Laravel</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-7">
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
                                        <th>Student</th>
                                        <th>Status</th>
                                        <th >Class</th>
                                        <th >Earnings</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list" id="staff">
                                        <tr class="selected">
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

                                        <td><span class="badge badge-success">PAID</span></td>
                                        <td><small class="text-muted">Ahli Backend dengan Laravel</small></td>
                                        <td>Rp. 99,532</td>
                                        </tr>
                                        <tr>
                                        <td>
                                            <div class="media align-items-center">
                                            <img src="{{asset('assets')}}/images/avatar/green.svg" class="mr-2" alt="avatar" />
                                            <div class="media-body">
                                                <span class="js-lists-values-employee-name">Connie Smith Jordan Pasaribuan</span>
                                            </div>
                                            </div>
                                        </td>

                                        <td><span class="badge badge-success">PAID</span></td>
                                        <td><small class="text-muted">Ahli Backend dengan Laravel</small></td>
                                        <td>Rp. 49,820</td>
                                        </tr>

                                        <tr class="selected">
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

                                        <td><span class="badge badge-success">PAID</span></td>
                                        <td><small class="text-muted">Ahli Backend dengan Laravel</small></td>
                                        <td>Rp. 99,346</td>
                                        </tr>
                                        <tr>
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
                                        <td>Rp. 99,053</td>
                                        </tr>
                                    </tbody>
                                    </table>
                                </div>
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
    