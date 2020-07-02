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
                            @foreach($categories as $key => $category)
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->type }}</td>
                                    <td>{{ $category->created_at }}</td>
                                    <td>
                                        <a class="btn btn-primary"
                                           href="{{ route('categories.edit',$category) }}">Edit</a>
                                        |

                                        <form action="{{ route('categories.destroy',$category) }}"
                                              method="post">
                                            <input class="btn btn-danger" type="submit" value="Delete"/>
                                            @method('delete')
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
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
