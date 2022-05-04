 @extends('app')
      
    @section('content')
        @if(count($members) > 0)
            <h2>Search Results</h2>
            <ul class="list-group">
                @foreach($members as $member)
                    <li class="list-group-item"><a href="{{ url('member/'.$member->id) }}">{{ $member->firstname }} {{ $member->lastname }}</a></li>
                @endforeach
            </ul>
        @else
            <h2>No Results Found</h2>
        @endif
    @endsection