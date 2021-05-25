@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">News</div>
                <div class="card-body">
                    @if ($errors->any())																	
                        @foreach ($errors->all() as $error)
                            <p>{{$error}}</p>
                         @endforeach
                    @endif
                    <form action="/admin/news" method="post">
                        {{ @csrf_field() }}
                        <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" name="title" class="form-control" id="title" value="{{ old ('title') }}">
                        </div>

                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" name="date" class="form-control" id="date" value="{{ old ('date') }}">
                        </div>

                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" name="image" class="form-control" id="photo" value="{{ old ('image') }}">
                        </div>

                        <div class="form-group">
                            <label for="summary">Exert</label>
                            <textarea class="form-control" name="exert" id="summary" rows="3" value="{{ old ('exert') }}">{{ old ('exert') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea class="form-control" name="content" id="body" rows="3" value="{{ old ('content') }}">{{ old ('content') }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
