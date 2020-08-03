@extends('main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <br />
            <h3 aling="center">Buy Equipment</h3>
            <br />
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div>
            @endif
            <form method="post" action="{{url('buy')}}">
            {{csrf_field()}}
            @foreach($equipment as $key => $itemType)
                @if($key === 'boxes')
                    <h4>Select Box</h4>
                    <div class="form-group">
                        <select name="box" class="form-control">
                            <option value="" selected="selected">Select box</option>
                            @foreach($itemType as $box)
                                <option value="{{$box['id']}}">{{$box['name']}} - {{$box['price']}} zł</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" />
                    </div>
                @elseif($key === 'runes')
                    <h4>Select Rune</h4>
                    <div class="form-group">
                        <select name="rune" class="form-control">
                                <option value="" selected="selected">Select rune</option>
                            @foreach($itemType as $rune)
                                <option value="{{$rune['id']}}">{{$rune['name']}} - {{$rune['bonus']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" />
                    </div>
                @else
                    <h4>Select Reward</h4>
                    <div class="form-group">
                        <select name="reward" class="form-control">
                            <option value="" selected="selected">Select reward</option>
                            @foreach($itemType as $reward)
                                <option value="{{$reward['id']}}">{{$reward['name']}} - {{$reward['price']}} zł</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" />
                    </div>
                @endif
            @endforeach
            </form>
        </div>
    </div>
@endsection
