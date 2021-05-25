@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">New Animals for Adoption</div>
                <div class="card-body">
                    @if ($errors->any())																	
                        @foreach ($errors->all() as $error)
                            <p>{{$error}}</p>
                      @endforeach
                      @endif
                    <!--<form action="/admin/adoptions" method="post" enctype="multipart/form-data">--->
                    <form action="/admin/adoptions" method="post">
                        {{ @csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{ old ('name') }}">
                        </div>

                        <div class="form-group">
                            <label for="photo">Image</label>
                            <input type="file" name="image" class="form-control" id="image" value="{{ old ('image') }}">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3" value="{{ old ('description') }}">{{ old ('description') }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
