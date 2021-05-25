@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Contacts</div>
                <div class="card-body">
                   
                    <form action="/admin/contacts/{{ $contacts->id }}" method="post">
                        {{ @csrf_field() }}
                      
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{ $contacts->name }}" placeholder="Name" value="{{ old ('name') }}">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" value="{{ $contacts->email }}" placeholder="Email" value="{{ old ('email') }}">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control" id="phone" value="{{ $contacts->phone }}" placeholder="Phone" value="{{ old ('phone') }}">
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                        <textarea class="form-control" name="message" id="message" rows="3" value="{{ $contacts->message }}" placeholder="Message" value="{{ old ('message') }}">{{$contacts->message}}</textarea>
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
