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

          <form class="col-md-11 m-4 mt-5 mb-5" action="{{ url('employee') }}" method="post">
              @csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                      <label for="">Name</label>
                      <input class="form-control" value="{{ old('name') }}" type="text" name="name" placeholder="Employee's name" minlength="1" maxlength="80" required />
                  </div>
                  <div class="form-group col-md-4">
                       <label for="">Surname</label>
                      <input class="form-control" value="{{ old('surname') }}" type="text" name="surname" placeholder="Employee's surname" minlength="1" maxlength="160" required />
                  </div>
                  <div class="form-group col-md-4">
                      <label for="">Email</label>
                      <input class="form-control" value="{{ old('email') }}" type="text" name="email" placeholder="Employee's email" minlength="5" maxlength="100" required />
                  </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-4">
                      <label for="">Phone</label>
                      <input class="form-control" value="{{ old('phone') }}" type="number" name="phone" placeholder="Employee's phone number" min="600000000" max="999999999" required />
                  </div>
                  <div class="form-group col-md-4">
                       <label for="">Hiring Date</label>
                      <input class="form-control" value="{{ old('hiringDate') }}" type="date" name="hiringDate" placeholder="Employee's hiring date"  required />
                  </div>
                  <div class="form-group col-md-4">
                      <label for="">Workstation ID</label>
                      <input class="form-control" value="{{ old('idworkstation') }}" type="number" name="idworkstation" placeholder="Employee's workstation id" min="0" max="9999999999" step="1" />
                  </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-4">
                      <label for="">Department ID</label>
                      <input class="form-control" value="{{ old('iddepartment') }}" type="number" name="iddepartment" placeholder="Employee's workstation id" min="0" max="9999999999" step="1" />
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