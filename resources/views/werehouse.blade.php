@extends('layouts.layout')

@section('content')

  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>Add New Werehouse</strong>
        </div>
        <div class="panel-body">
          <form method="post" action="{{ route('werehouse') }}">
              {{csrf_field()}}
              <div class="form-group">
                <label for="text">Werehouse Name</label>
                <input type="text" id="werehouse_name" name="werehouse_name" class="form-control" placeholder="Werehouse Name">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>Werehouse Table</strong>
        </div>
        <div class="panel-body">
            <table class="table">
              <tr>
                <td>No</td>
                <td>Werehouse Name</td>
                <td>Action</td>
              </tr>
              <?php $no = 0;?>
              @foreach($werehouse as $werehouse)
              <?php $no++ ;?>
                <tr>
                  <td>{{$no}}</td>
                  <td>{{$werehouse->werehouse_name}}</td>
                  <td>

                    <form action="{{$werehouse->werehouse_id}}" method="post">
                      <a class="btn btn-primary btn-sm" href="werehouse_update/{{$werehouse->werehouse_id}}">Edit</a>
                      {{csrf_field()}}
                      <input class="btn btn-danger btn-sm" type="submit" name="submit" value="Delete">
                      <input type="hidden" name="_method" value="delete">
                    </form>
                  </td>
                </tr>
            	@endforeach
            </table>
        </div>
      </div>
    </div>
  </div>

@endsection
