@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Contacts</div>

                <div class="card-body">
                    <p><a href="/admin/contacts/create" class="btn btn-success">New</a></p>
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>                           
                            <th scope="col">Message</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                            <tr>
                            <th scope="row">{{ $contact->id }}</th>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->message }}</td>
                                <td>
                                    <form action="/admin/contacts/{{ $contact->id }}" method="post">
                                        {{ @csrf_field()}}
                                        <a href="/admin/contacts/{{ $contact->id }}/edit" class="btn btn-info">Edit</a>
                                        <input type="submit" class="btn btn-danger" value="Delete">                            
                                        {{ @method_field('delete')}}
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        
                      </table>
                      <div class="buttom">{{$contacts->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
