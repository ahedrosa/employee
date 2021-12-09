@extends('base')

@section('content')


<div class="container">
@if(Session::has('message'))
    <div class="alert alert-{{ session()->get('type') }}" role="alert">
        {{ session()->get('message') }}
    </div>
@endif

      <div class="page-banner home-banner h-50 mt-4">
        <div class="row flex-wrap-reverse ">

          <form class="col-md-11 m-3 mt-5 mb-5" action="{{ url('workstation') }}" method="post">
              @csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                      <label for="">Workstation</label>
                      <input class="form-control" value="{{ old('name') }}" type="text" name="name" placeholder="Workstation's name" minlength="1" maxlength="80" required />
                  </div>
                  <div class="form-group col-md-4">
                       <label for="">Lowest Salary</label>
                      <input class="form-control" value="{{ old('lowestsalary') }}" type="number" name="lowestsalary" placeholder="Workstation's minimun salary" min="0.01" max="999999.99" step="0.01" required />
                  </div>
                  <div class="form-group col-md-4">
                      <label for="">Highest Salary</label>
                      <input class="form-control" value="{{ old('highestsalary') }}" type="number" name="highestsalary" placeholder="Workstation's maximum salary" min="0.01" max="999999.99" step="0.01" required />
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