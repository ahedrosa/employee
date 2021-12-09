@extends('base')

@section('newSection')
   <div class="row">
        <div class="col-lg-4 ">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="{{url ('assets/img/services/employee.svg')}}" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Departments</h5>
              <p>Knoledge about our working teams and the managers</p>
              <a href="{{ url ('department')}}" class="btn btn-primary">Manage It!</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="{{url ('assets/img/services/service-2.svg')}}" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Workstation</h5>
              <p>Know more about any workstation in the enterprise and its salary</p>
              <a href="{{ url ('workstation')}}" class="btn btn-primary">Manage It!</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="{{url ('assets/img/services/service-1.svg')}}" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Employees</h5>
              <p>All the personal info we got about all our emloyees</p>
              <a href="{{ url ('employee')}}" class="btn btn-primary">Manage It!</a>
            </div>
          </div>
        </div>
    </div>
    
@endsection