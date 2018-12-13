@extends('layouts.layout')

@section('content')

  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>Update Werehouse</strong>
        </div>
        <div class="panel-body">
          <form method="post" action="{{route('updatewerehouse', $werehouse->werehouse_id)}}">
              {{csrf_field()}}
              <div class="form-group">
                <label for="text">Werehouse Name</label>
                <input type="text" id="werehouse_name" name="werehouse_name" value="{{$werehouse->werehouse_name}}" class="form-control" placeholder="Werehouse Name">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>

  </div>

@endsection
