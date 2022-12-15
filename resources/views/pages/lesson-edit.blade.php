@extends('layouts.master')
@section('title', 'Edit Lesson')

@section('content')
                <!-- CONTENT  -->
                
                <div class="mdk-drawer-layout__content page">
                    <div class="container-fluid page__heading-container">
                    <div class="page__heading d-flex align-items-center justify-content-between">
                        <h1 class="m-0">Edit Lesson</h1>
                    </div>
                    </div>

                    <div class="container-fluid page__container">
                    <div class="row">
                        <div class="col-md-8">
                        <div class="card">
                            <div class="card-form__body card-body">
                            <div class="embed-responsive embed-responsive-16by9 mb-3">
                                <iframe
                                class="embed-responsive-item"
                                src="https://player.vimeo.com/video/97243285?title=0&amp;byline=0&amp;portrait=0"
                                allowfullscreen=""
                                ></iframe>
                            </div>
                            <div class="form-group">
                                <label for="furl">Url Video</label>
                                <input
                                id="furl"
                                type="text"
                                class="form-control"
                                placeholder="Url Video"
                                value="https://www.youtube.com/watch?v=rg68LenxHdk&t=825s"
                                />
                            </div>
                            <div class="form-group">
                                <label for="fname">Title</label>
                                <input
                                id="fname"
                                type="text"
                                class="form-control"
                                placeholder="Title Lesson"
                                value="Perkenalan kelas"
                                />
                            </div>

                            <div class="form-group">
                                <label for="desc">Description</label>
                                <textarea
                                id="desc"
                                rows="4"
                                class="form-control"
                                placeholder="Please enter a description"
                                value="Deskripsi Lesson"
                                ></textarea>
                            </div>
                            <div class="form-group">
                                <label>Course Preview</label>
                                <div
                                class="dz-clickable media align-items-center"
                                data-toggle="dropzone"
                                data-dropzone-url="http://"
                                data-dropzone-clickable=".dz-clickable"
                                data-dropzone-files='["assets/images/account-add-photo.svg"]'
                                >
                                <div class="dz-preview dz-file-preview dz-clickable mr-3">
                                    <div class="avatar avatar-lg">
                                    <img
                                        src="{{asset('assets')}}/images/account-add-photo.svg"
                                        class="avatar-img rounded"
                                        alt="..."
                                        data-dz-thumbnail
                                    />
                                    </div>
                                </div>
                                <div class="media-body">
                                    <button class="btn btn-sm btn-light dz-clickable">Choose photo</button>
                                </div>
                                </div>
                            </div>

                            <button class="btn btn-danger" data-toggle="modal" data-target="#modal-standard">Delete Lesson</button>
                            <a href="{{ url('course/edit') }}"><button type="submit" class="btn btn-success">Save Changes</button></a>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="card">
                            <!-- Lessons -->
                            <div class="card-header card-header-large bg-light d-flex align-items-center">
                            <h4 class="card-header__title">Lesson File</h4>
                            </div>

                            <div class="card-body">
                            
                            <!-- Lessons -->
                            <div class="form-group mb-3">
                                <div
                                class="dz-clickable media align-items-center"
                                data-toggle="dropzone"
                                data-dropzone-url="http://"
                                data-dropzone-clickable=".dz-clickable"
                                data-dropzone-files='["assets/images/account-add-photo.svg"]'
                                >
                                <div class="dz-preview dz-file-preview dz-clickable mr-3">
                                    <div class="avatar avatar-lg">
                                    <img
                                        src="{{asset('assets')}}/images/account-add-photo.svg"
                                        class="avatar-img rounded"
                                        alt="..."
                                        data-dz-thumbnail
                                    />
                                    </div>
                                </div>
                                <div class="media-body">
                                    <button class="btn btn-sm btn-light dz-clickable">Choose file</button>
                                </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block">Upload File</button>
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
                <p>Delete this Lesson.</p>
            </div>
            <!-- // END .modal-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                <a href="{{ url('course/edit') }}"><button type="button" class="btn btn-danger">Delete</button></a>
            </div>
            <!-- // END .modal-footer -->
            </div>
            <!-- // END .modal-content -->
        </div>
        <!-- // END .modal-dialog -->
    </div>
    <!-- end standar modal  -->
 

 @stop
    