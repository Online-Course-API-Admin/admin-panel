@extends('layouts.master')
@section('title', 'Create Quiz')

@section('content')
                <!-- CONTENT  -->
                
                <div class="mdk-drawer-layout__content page">
            <div class="container-fluid page__heading-container">
              <div
                class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left"
              >
                <h1 class="m-lg-0">Basics of Angular JS :: Quiz</h1>
                <a href="{{ url('course/edit') }}" class="btn btn-outline-secondary ml-lg-3"
                  >Back to Course <i class="material-icons">arrow_forward</i></a
                >
              </div>
            </div>

            <div class="container-fluid page__container">
              <div class="card">
                <div class="card-body card-form__body">
                  <form action="#">
                    <div class="form-group mb-3">
                      <label class="control-label h6">New Question:</label>
                      <input type="text" name="question[title]" class="form-control" />
                    </div>
                    <button class="btn btn-primary"><i class="material-icons">add</i> Create Question</button>
                  </form>
                </div>
              </div>

              <div id="questions_wrapper">
                
                <a href="{{ url('course/edit') }}"><button type="submit" class="btn btn-light">Cancel</button></a>
                <a href="{{ url('course/edit') }}"><button type="submit" class="btn btn-success">Save</button></a>

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
                <h5 class="modal-title" id="modal-small-title">Adding new answer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- // END .modal-header -->
            <div class="modal-body">
                <div class="form-group">
                    <label for="fname">Answer</label>
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
    