@extends('layouts.master')
@section('title', 'Create Lesson')

@section('content')
                <!-- CONTENT  -->
                
                <div class="mdk-drawer-layout__content page">
                    <div class="container-fluid page__heading-container">
                    <div class="page__heading d-flex align-items-center justify-content-between">
                        <h1 class="m-0">Create Lesson</h1>
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
                                />
                            </div>
                            <div class="form-group">
                                <label for="fname">Title</label>
                                <input
                                id="fname"
                                type="text"
                                class="form-control"
                                placeholder="Title Lesson"
                                />
                            </div>

                            <div class="form-group">
                                <label for="desc">Description</label>
                                <textarea
                                id="desc"
                                rows="4"
                                class="form-control"
                                placeholder="Please enter a description"
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
                            <a href="{{ url('course/edit') }}"><button type="submit" class="btn btn-success">Save</button></a>
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

 @stop
    