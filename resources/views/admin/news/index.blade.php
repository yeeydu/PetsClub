@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">News</div>

                <div class="card-body">
                    <p><a href="/admin/news/create" class="btn btn-success">New</a></p>
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Date</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $new)                                    
                            <tr>
                            <th scope="row">{{$new->id}}</th>
	                    <td>{{$new->title}}</td>
	                    <td>{{$new->date}}</td>
	                    <td>
                            <form action="/admin/news/{{$new->id}}" method="post">
                                {{ @csrf_field()}}
                            <a href="/admin/news/{{$new->id}}/edit" class="btn btn-info">Edit</a>
                                <input type="submit" class="btn btn-danger" value="Delete">
                                {{ @method_field('delete')}}
	                        </form>
	                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                     
                     <div class="buttom">{{$news->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
