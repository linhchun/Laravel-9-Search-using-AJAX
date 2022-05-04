 @if(count($members) > 0)
        @foreach($members as $member)
            <li class="list-group-item"><a href="{{ url('member/'.$member->id) }}">{{ $member->firstname }} {{ $member->lastname }}</a></li>
        @endforeach
    @else
        <li class="list-group-item">No Results Found</li>
    @endif