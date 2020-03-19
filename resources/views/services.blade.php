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