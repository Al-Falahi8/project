@extends('layouts.dashboard')
@section('title', 'Create Products')
@section('content')

    <div class="container pt-5 mt-2">
        <h1 class="mb-3 text-dark">Assets</h1>
        @if( session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

            {!! Form::open(['route' => 'product.store', 'method' => 'post', 'files' => true]) !!}
            @csrf
                <div class="jumbotron">
                    <h2 class="text-center text-dark md-5 my-3 py-3"> Add New Assets </h2>
                        <div class="form-row">

                        <div class="form-group col-lg-12">
                            {{ Form::label('name', 'Asset Name') }}
                            {{ Form::text('name', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group col-md-4">
                            {{ Form::label('price', 'Price') }}
                            {{ Form::text('price', null, array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group col-md-4">
                            {{ Form::label('category_id', 'Categories') }}
                            {{ Form::select('category_id',
                                [
                                'Choose a category',
                                '1' => 'Character',
                                '2' => '2D Game Assets',
                                '3' => '3D Game Assets',
                                '4' => 'GUI Game Assets'
                                ],
                                null,['class' => 'form-control']) }}
                        </div>

                        <div class="form-group col-md-4">
                            {{ Form::label('image', 'Upload Image') }}
                            {{ Form::file('image', array('class' => 'form-control')) }}
                        </div>

                        <div class="form-group col-lg-12">
                            {{ Form::label('description', 'Description') }}
                            {{ Form::text('description', null, array('class' => 'form-control')) }}
                        </div>

                        
                        {{ Form::submit('Add Asset', array('class' => 'btn btn-dark btn-block')) }}
                    </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
