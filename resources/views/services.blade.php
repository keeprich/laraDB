@extends('includes.navBar')

@section('title', 'Services')

@section('header')
    @parent
    <!-- Additional contects will go here -->
@endsection

@section('content')
    <p>This is my body content.</p>

    <h1>My Database Output</h1>

<ul>
@forelse($services as $service)

<li>
{{$service -> first_name}}
{{$service -> last_name}}

</li>

@empty
<li>No service availabel</li>

@endforelse
</ul>
@endsection


@section('footer')
    @parent

    <p>This is appended to footer.</p>
@endsection
