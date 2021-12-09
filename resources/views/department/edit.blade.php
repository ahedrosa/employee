@extends('base')

@section('content')



<div class="container">
  <h1 class="wow fadeInRight">Department Edit</h1>
 <h2 class="text-primary wow fadeInRight">{{$department->name}}</h2> <h2 class="wow fadeInRight back"style="float: right;margin-top: -45px;"><a href="{{ url()->previous() }}"><span id="ico" class="mai-arrow-back-circle-outline"></span>Back</a></h2>
   
@if(Session::has('message'))
    <div class="alert alert-{{ session()->get('type') }}" role="alert">
        {{ session()->get('message') }}
    </div>
@endif
      <div class="page-banner home-banner h-50 mt-4 wow fadeInUp">
        <div class="row flex-wrap-reverse">

          <form class="lg-12 m-4 mt-5 mb-5" action="{{ url('department/'. $department->id )}}" method="post">
              @csrf
              @method('put')
              <div class="form-row">
                  <div class="form-group col-md-4">
                      <label for="">Department</label>
                      <input class="form-control" value="{{ old('name', $department->name) }}" type="text" name="name" placeholder="Department's name" minlength="2" maxlength="80" required />
                  </div>
                  <div class="form-group col-md-4">
                       <label for="">Location</label>
                      <input class="form-control" value="{{ old('location', $department->location) }}" type="text" name="location" placeholder="Location's name" minlength="2" maxlength="80" required />
                  </div>
                  <div class="form-group col-md-4">
                      <label for="">Idemployeemanager</label>
                      <input class="form-control" value="{{ old('idemployeemanager', $department->idemployeemanager) }}" type="number" name="idemployeemanager" placeholder="Department's Manager id" minlength="0" maxlength="9999999" />
                  </div>
              </div>
                  
             
              <div class="form-row">
                <div class="col-md-4">
                  <input type="submit" name="btCreate"  type="submit" value="Edit" class="btn btn-primary">
                </div>
              </div>
          </form>
      </div>
    </div>
</div>

@endsection