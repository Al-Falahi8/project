@extends('layouts.dashboard')
@section('title', 'Catagories Table')
@section('content')

    <section class="content">
        <div class="container">
            <h1 class="mb-3 text-dark">Catagories</h1>
            <p>
                <a href="{{ route('categories.create') }}" class="btn btn-dark">Add New Category</a>
            </p>
            <div class="table table-bordered table-striped">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Actions</th>
                    </thead>

                    <tbody>
                        <div class="row">
                            @foreach ($categories as $cat)
                                <tr>
                                    <td>{{ $cat->id }}</td>
                                    <td>{{ $cat->name }}</td>
                                    <td>
                                        {{-- <a href="{{ route('categories.edit', $cat->id) }}" class="btn btn-success float-left"><i class="fas fa-edit"></i></a> --}}
                                        
                                        <form method="post" action="{{ route('categories.destroy', $cat->id ) }}" class="float-left">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </div>
                    </tbody>
                </table>
                
            </div>
        </div>
    </section>

@endsection

