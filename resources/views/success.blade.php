@extends('layout.base')

@section('title')
Success
@endsection


@section('content')
<body>
<section>
<h2>Thanks for your contact</h2>

<p>Name: {{$name}} </p>
<p>email: {{$email}} </p>
<p>Telephone: {{$phone}} </p>
<p>Mensage: {{$message}} </p>
</section>
</body>
@endsection 