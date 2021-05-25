@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Animals information</div>
                <div class="card-body">
                <form action="/admin/adoptions/{{ $adoptions->id }}" method="post">
                    {{ @csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{ $adoptions->name }}" placeholder="Name" value="{{ old ('name') }}">
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control" id="image" value="{{ $adoptions->image }}" placeholder="Image" value="{{ old ('image') }}">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3" value="{{ $adoptions->description }}" placeholder="Description" value="{{ old ('description') }}">{{ $adoptions->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        {{ @method_field('put') }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
