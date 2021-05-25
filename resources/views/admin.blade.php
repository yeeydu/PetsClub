@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                <nav>
                    <ul class="sf-menu">
                      <li><a href="admin/adoptions">Adoption</a></li>                  
                      <li><a href="admin/news">News</a></li>
                      <li><a href="admin/contacts">Contacts </a></li>
                    </ul>
                  </nav>

            </div>
        </div>
    </div>
</div>
@endsection
