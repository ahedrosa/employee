@extends('base')

@section('content')


<div class="container">
<h1 class="wow fadeInRight">Department Create</h1>
 <h2 class="wow fadeInRight back"style="float: right;margin-top: -45px;"><a href="{{ url()->previous() }}"><span id="ico" class="mai-arrow-back-circle-outline"></span>Back</a></h2>
   
@if(Session::has('message'))
    <div class="alert alert-{{ session()->get('type') }}" role="alert">
        {{ session()->get('message') }}
    </div>
@endif
      <div class="page-banner home-banner h-50 mt-4 wow fadeInUp">
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
                  <label for="">Manager</label>
                    <select class="form-control form-control-lg" name="idemployeemanager">
                        <option @if(old('idemployeemanager') == '')  selected @endif  value="">&nbsp;</option>
                        @foreach ($employees as $employee)
                            <option  @if($employee->id == $department->idemployeemanager) selected @endif value="{{ $employee -> id }}" >{{$employee -> name }}</option>
                        @endforeach
                    </select>
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