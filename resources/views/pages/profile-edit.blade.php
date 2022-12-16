@extends('layouts.master')
@section('title', 'Edit Profile')

@section('content')
                <!-- CONTENT  -->
                
                <div class="mdk-drawer-layout__content page">
                    <div class="container-fluid page__heading-container">
                    <div class="page__heading d-flex align-items-center justify-content-between">
                        <h1 class="m-0">Edit Account</h1>
                    </div>
                    </div>

                    <div class="container-fluid page__container">
                    <div class="card card-form">
                        <div class="row no-gutters">
                        <div class="col-lg-4 card-body">
                            <p><strong class="headings-color">Basic Information</strong></p>
                            <p class="text-muted mb-0">Edit your account details and settings.</p>
                        </div>
                        <div class="col-lg-8 card-form__body card-body">
                            <div class="row">
                            <div class="col">
                                <div class="form-group">
                                <label for="fname">First name</label>
                                <input id="fname" type="text" class="form-control" placeholder="First name" value="Ryan" />
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                <label for="lname">Last name</label>
                                <input id="lname" type="text" class="form-control" placeholder="Last name"  />
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="card card-form">
                        <div class="row no-gutters">
                        <div class="col-lg-4 card-body">
                            <p><strong class="headings-color">Update Your Password</strong></p>
                            <p class="text-muted mb-0">Change your password.</p>
                        </div>
                        <div class="col-lg-8 card-form__body card-body">
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="opass">Old Password</label>
                                <input
                                    id="opass"
                                    type="password"
                                    class="form-control"
                                    placeholder="Old password"
                                    value="****"
                                />
                                </div>
                                <div class="form-group">
                                <label for="npass">New Password</label>
                                <input id="npass" type="password" class="form-control is-invalid" />
                                <small class="invalid-feedback">The new password must not be empty.</small>
                                </div>
                                <div class="form-group">
                                <label for="cpass">Confirm Password</label>
                                <input id="cpass" type="password" class="form-control" placeholder="Confirm password" />
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="card card-form">
                        <div class="row no-gutters">
                        <div class="col-lg-4 card-body">
                            <p><strong class="headings-color">Profile Settings</strong></p>
                            <p class="text-muted mb-0">Update your public profile with relevant and meaningful information.</p>
                        </div>
                        <div class="col-lg-8 card-form__body card-body">
                            <div class="form-group">
                            <label>Avatar</label>
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
                                    src="{{asset('assets')}}//images/account-add-photo.svg"
                                    class="avatar-img rounded"
                                    alt="..."
                                    data-dz-thumbnail
                                    />
                                </div>
                                </div>
                                <div class="media-body">
                                <button class="btn btn-sm btn-primary dz-clickable">Choose photo</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class=" mb-5">
                        <a href="{{ url('') }}" class="btn btn-light">Cancel</a>
                        <a href="{{ url('') }}" class="btn btn-success">Save Changes</a>
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
    