@extends("layout")

@section("title", "index computers")

@section("content")
<div class="content">
    <div>
        <br><br>
        @if (count($computers) > 0)
        <ul>
            @foreach ($computers as $computer)
            <a href="#"> <li>{{ $computer['name'] }}</li> </a>
            @endforeach
        </ul> 
        @else
        <strong>No computers to show :(</strong>
        @endif
    </div>
</div>
@endsection