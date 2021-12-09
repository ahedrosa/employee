@extends('base')

@section('content')




<div class="container">
  <h1 class="wow fadeInRight">Employee Edit</h1>
 <h2 class="text-primary wow fadeInRight">{{$employee->name}}</h2> <h2 class="wow fadeInRight back"style="float: right;margin-top: -45px;"><a href="{{ url()->previous() }}"><span id="ico" class="mai-arrow-back-circle-outline"></span>Back</a></h2>
   
  @if(Session::has('message'))
    <div class="alert alert-{{ session()->get('type') }}" role="alert">
        {{ session()->get('message') }}
    </div>
@endif
      <div class="page-banner home-banner h-50 mt-4">
        <div class="row flex-wrap-reverse">

          <form class="col-md-11 m-4 mt-5 mb-5 wow fadeInUp" action="{{ url('employee/'.$employee->id) }}" method="post">
              @csrf
              @method('put')
              <div class="form-row">
                  <div class="form-group col-md-4">
                      <label for="">Name</label>
                      <input class="form-control" value="{{ old('name', $employee-> name) }}" type="text" name="name" placeholder="Employee's name" minlength="1" maxlength="80" required />
                  </div>
                  <div class="form-group col-md-4">
                       <label for="">Surname</label>
                      <input class="form-control" value="{{ old('surname', $employee-> surname) }}" type="text" name="surname" placeholder="Employee's surname" minlength="1" maxlength="160" required />
                  </div>
                  <div class="form-group col-md-4">
                      <label for="">Email</label>
                      <input class="form-control" value="{{ old('email' , $employee->email) }}" type="text" name="email" placeholder="Employee's email" minlength="5" maxlength="100" required />
                  </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-4">
                      <label for="">Phone</label>
                      <input class="form-control" value="{{ old('phone', $employee->phone) }}" type="number" name="phone" placeholder="Employee's phone number" min="600000000" max="999999999" required />
                  </div>
                  <div class="form-group col-md-4">
                       <label for="">Hiring Date</label>
                      <input class="form-control" value="{{ old('hiringDate', $employee->hiringDate) }}" type="date" name="hiringDate" placeholder="Employee's hiring date"  required />
                  </div>
                  <div class="form-group col-md-4">
                  <label for="">Workstation</label>
                    <select class="form-control form-control-lg" name="idworkstation">
                        <option @if(old('idworkstation') == '')  selected @endif  value="">&nbsp;</option>
                        @foreach ($workstations as $workstation)
                            <option  @if($workstation->id == $employee->idworkstation) selected @endif value="{{ $workstation -> id }}" >{{$workstation -> name }}</option>
                        @endforeach
                    </select>
                  </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="">Department</label>
                    <select class="form-control form-control-lg" name="iddepartment">
                        <option @if(old('iddepartment') == '')  selected @endif  value="">&nbsp;</option>
                        @foreach ($departments as $department)
                            <option  @if($department->id == $employee->iddepartment) selected @endif value="{{ $department -> id }}" >{{$department -> name }}</option>
                        @endforeach
                    </select>
                </div>
              </div>    
                  
                    
              
                  
             
              <div class="form-row">
                <div class="col-md-4">
                  <input type="submit" name="btCreate"  type="submit" value="Edit" class="btn btn-primary">
                </div>
              </div>
            </div>
          </form>
      </div>
    </div>
</div>

@endsection