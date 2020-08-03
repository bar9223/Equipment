@extends('main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <br />
            <h3 aling="center">Add Test Data</h3>
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

            <form method="post" action="{{url('runes')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Enter Name" />
                </div>
                <div class="form-group">
                    <input type="file" name="picture" class="form-control" accept="image/png, image/jpeg" placeholder="Upload image">
                </div>
                <div class="form-group">
                    <input type="text" name="bonus" class="form-control" placeholder="Enter Bonus" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>
@endsection
