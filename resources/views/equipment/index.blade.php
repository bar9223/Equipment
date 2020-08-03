@extends('main')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <br />
            <h3 align="center">Equipment</h3>
            <br />
            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
            @endif
            @foreach($equipment as $key => $element)
                @if($key === 'boxes')
                    <h2>Boxes</h2>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Name</th>
                            <th>Picture</th>
                            <th>Price</th>
                        </tr>
                        @foreach($element as $item)
                            <tr>
                                <td>{{$item->box_name}}</td>
                                <td>{{$item->box_picture}}</td>
                                <td>{{$item->box_price}}</td>
                            </tr>
                        @endforeach
                    </table>
                @elseif ($key === 'runes')
                    <h2>Runes</h2>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Name</th>
                            <th>Picture</th>
                            <th>Bonus</th>
                        </tr>
                        @foreach($element as $item)
                            <tr>
                                <td>{{$item->rune_name}}</td>
                                <td>{{$item->rune_picture}}</td>
                                <td>{{$item->rune_bonus}}</td>
                            </tr>
                        @endforeach
                    </table>
                @else
                    <h2>Rewards</h2>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Name</th>
                            <th>Picture</th>
                            <th>Code</th>
                            <th>Price</th>
                            <th>Status</th>
                        </tr>
                        @foreach($element as $item)
                            <tr>
                                <td>{{$item->reward_name}}</td>
                                <td>{{$item->reward_picture}}</td>
                                <td>{{$item->reward_code}}</td>
                                <td>{{$item->reward_price}}</td>
                                <td>{{$item->reward_status}}</td>
                            </tr>
                        @endforeach
                    </table>
                @endif
            @endforeach
        </div>
    </div>

@endsection
