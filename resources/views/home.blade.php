@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">Categories</div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                        data-target="#exampleModal">
                                    Add Category
                                </button>
                            </div>
                        </div>
                    </div>
                    <p class="text-success"> {{ Session::get('message') }}</p>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Type</th>
                                <th scope="col">Create At</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Standard</td>
                                <td>Combo</td>
                                <td>tm</td>
                                <td>
                                    <button type="button" class="btn btn-primary">Edit</button>
                                    |
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {!! Form::open(['url' => route('categories.store')]) !!}
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">

                                {!! Form::label('name','Category Name') !!}
                                {!!  Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Category Name','required']) !!}

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">

                                {!! Form::label('type','Category Type') !!}
                                {!!  Form::text('type',old('name'),['class'=>'form-control','placeholder'=>'Category Type','required']) !!}

                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::submit('Save',['class'=>'btn btn-primary mr-2']) !!}
                                <a class="btn btn-danger" href="{{ route('categories.index') }}">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
