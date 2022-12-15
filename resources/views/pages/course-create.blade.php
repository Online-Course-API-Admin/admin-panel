@extends('layouts.master')
@section('title', 'Create course')

@section('content')
                <!-- CONTENT  -->
                
                <div class="mdk-drawer-layout__content page">
                    <div class="container-fluid page__heading-container">
                    <div class="page__heading d-flex align-items-center justify-content-between">
                        <h1 class="m-0">Create Course</h1>
                    </div>
                    </div>

                    <div class="container-fluid page__container">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="card">
                            <div class="card-form__body card-body">
                            <div class="form-group">
                                <label for="fname">Slug (URL)</label>
                                <div class="help-block my-1 p-1 text-muted bg-light border rounded">
                                /course-title-is-editable-here
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="fname">Title</label>
                                <input
                                id="fname"
                                type="text"
                                class="form-control"
                                placeholder="Title goes here"
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
                            <div class="row ml-1 align-items-center">
                                <div class="form-group">
                                    <label for="category">Level</label><br />
                                    <select id="category" class="custom-select w-auto">
                                    <option value="usa">Beginner</option>
                                    <option value="usa">Intermediate</option>
                                    <option value="usa">Expert</option>
                                    </select>
                                </div>
                                <div class="form-group ml-3">
                                    <label for="category">Category</label><br />
                                    <select id="category" class="custom-select w-auto">
                                    <option value="usa">Design</option>
                                    <option value="usa">Web Development</option>
                                    <option value="usa">OOP</option>
                                    <option value="usa">Tools</option>
                                    </select>
                                </div>
                                <div class="form-group ml-3 mt-4">
                                    <button type="submit" class="btn btn-sm btn-info btn-rounded " data-toggle="modal" data-target="#modal-small">New category</button>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <label for="subscribe">Promo</label><br />
                                <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                                <input checked="" type="checkbox" id="subscribe" class="custom-control-input" />
                                <label class="custom-control-label" for="subscribe">Yes</label>
                                </div>
                                <label for="subscribe" class="mb-0">Yes</label>
                            </div>
                            <div class="form-group">
                                <label for="fpricecoret">Harga Coret</label>
                                <input
                                id="fpricecoret"
                                type="number"
                                class="form-control"
                                placeholder="Rp. 200,000"
                                />
                            </div>
                            <div class="form-group">
                                <label for="fprice">Harga Promo</label>
                                <input
                                id="fprice"
                                type="number"
                                class="form-control"
                                placeholder="Rp. 100,000"
                                />
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
                            <div class="form-group">
                                <label for="subscribe2">Published</label><br />
                                <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                                <input checked="" type="checkbox" id="subscribe2" class="custom-control-input" />
                                <label class="custom-control-label" for="subscribe2">Yes</label>
                                </div>
                                <label for="subscribe2" class="mb-0">Yes</label>
                            </div>
                            <a href="{{ url('courses') }}"><button type="submit" class="btn btn-success">Save Changes</button></a>

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
                <h5 class="modal-title" id="modal-small-title">Adding new category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- // END .modal-header -->
            <div class="modal-body">
                <div class="form-group">
                    <label for="fname">Category</label>
                    <input
                    id="fname"
                    type="text"
                    class="form-control"
                    placeholder="input here.."
                    />
                </div>
            </div>
            <!-- // END .modal-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success">Save</button>
            </div>
            <!-- // END .modal-footer -->
            </div>
            <!-- // END .modal-content -->
        </div>
        <!-- // END .modal-dialog -->
    </div>
    <!-- end modal small  -->
 

 @stop
    