
    @extends('app')
      
    @section('content')
        <div class="col-md-8">
            <h4>Members Table</h4>
            <table class="table table-bordered table-striped">
                <thead>
                    <th>Firstname</th>
                    <th>Lastname</th>
                </thead>
                <tbody>
                    @foreach($members as $member)
                        <tr>
                            <td>{{$member->firstname}}</td>
                            <td>{{$member->lastname}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection