@extends('base')

@section('content')


<div class="modal fade" id="deleteLearnerModal" tabindex="-1" aria-labelledby="deleteLearnerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="deleteLearnerModalLabel">Delete Learner</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        {!! Form::open(['url'=>'/learners', 'method'=>'delete'])  !!}
        <div class="modal-body">
            Are you sure you want to delete this learner?
            {{Form::hidden('learner_id', $learner->id)}}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Delete</button>
        </div>
        </div>
        {!! Form::close() !!}
    </div>
    </div>

<h1>Edit Learner</h1>

<div class="row">
    <div class="col-md-6">
        {!! Form::model($learner, ['url'=>"/learners/$learner->id", 'method'=>'patch'])  !!}

            @include('learners._form')
            <div class="form-group">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteLearnerModal">
                        Delete User
                    </button>
                    <button class="btn btn-primary float-right">
                        Update User
                    </button>
                </div>

        {!! Form::close() !!}
        <div class="col-md-7">
                @include('errors')
        </div>
    
    </div>

@endsection   