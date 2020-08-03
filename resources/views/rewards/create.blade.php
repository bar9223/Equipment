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

            <form method="post" action="{{url('rewards')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Enter Name" />
                </div>
                <div class="form-group">
                    <input type="file" name="picture" class="form-control" accept="image/png, image/jpeg" placeholder="Upload image">
                </div>
                <div class="form-group">
                    <input type="text" name="code" class="form-control" placeholder="Enter Code" />
                </div>
                <div class="form-group">
                    <input type="number" name="price" class="form-control" min="0.00" max="10000.00" step="0.5" placeholder="Enter Price" />
                </div>
                <div class="form-group">
                    <select name="status" class="form-control">
                        <option value="0">Oczekujący</option>
                        <option value="1">Wysłany</option>
                        <option value="2">Odrzucony</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>
@endsection
