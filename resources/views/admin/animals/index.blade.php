@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Animals for Adoption</div>

                <div class="card-body">
                    <p><a href="/admin/adoptions/create" class="btn btn-success">New</a></p>
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($adoptions as $adoption)
                            <tr>
                            <th scope="row">{{$adoption->id}}</th>
                                <td>{{$adoption->name}}</td>
                                <td>
                                <form action="/admin/adoptions/{{$adoption->id}}" method="post">
                                    {{ @csrf_field()}}
                                        <a href="/admin/adoptions/{{$adoption->id}}/edit" class="btn btn-info">Edit</a>
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                        {{ @method_field('delete')}}
                                    </form>
                                    
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
                <div class="buttom">{{$adoptions->links()}}</div>
            </div>
        </div>
    </div>
</div>
@endsection
