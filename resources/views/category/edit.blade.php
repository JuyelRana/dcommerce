@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Category
                    </div>
                    <div class="card-body">

                        {!! Form::model($category, ['method'=>'PUT','route' => ['categories.update', $category]]) !!}

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

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {!! Form::submit('Update',['class'=>'btn btn-primary mr-2']) !!}
                                    <a class="btn btn-danger" href="{{ route('categories.index') }}">Cancel</a>
                                </div>
                            </div>
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
