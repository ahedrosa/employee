@extends('base')

@section('content')


<div class="container">

@if(Session::has('message'))
    <div class="alert alert-{{ session()->get('type') }}" role="alert">
        {{ session()->get('message') }}
    </div>
@endif
      <div class="page-banner home-banner h-50 mt-4">
        <div class="row flex-wrap-reverse">

          <form class="col-md-11 m-4 mt-5 mb-5" action="{{ url('department') }}" method="post">
              @csrf
              <div class="form-row">
                  <div class="form-group col-md-3">
                      <label for="">Department</label>
                      <input class="form-control" value="{{ old('name') }}" type="text" name="name" placeholder="Department's name" minlength="1" maxlength="80" required />
                  </div>
                  <div class="form-group col-md-4">
                       <label for="">Location</label>
                      <input class="form-control" value="{{ old('location') }}" type="text" name="location" placeholder="Location's name" minlength="1" maxlength="80" required />
                  </div>
                  <div class="form-group col-md-4">
                      <label for="">Idemployeemanager</label>
                      <input class="form-control" value="{{ old('idemployeemanager') }}" type="number" name="idemployeemanager" placeholder="Department's Manager id" min="0" max="9999999999" step="1" />
                  </div>
              </div>
                  
             
              <div class="form-row">
                <div class="col-md-4">
                  <input type="submit" name="btCreate"  type="submit" value="Create" class="btn btn-primary">
                </div>
              </div>
          </form>
      </div>
    </div>
</div>

@endsection