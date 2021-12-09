@extends('base')

@section('content')
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><h2>&times;</h2></span>
        </button>
      </div>
      <div class="modal-body">
        <p>Confirm delete <span id="deleteSpan">XXX</span>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <form id="modalDeleteResourceForm" action="" method="post">
            @method('delete')
            @csrf
            <input type="submit" class="btn btn-primary" value="Delete Employee"/>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="container container2">
    <h1 class="text-primary  wow fadeInRight">Employees</h1>
      <div class="page-banner home-banner">
        <div class="row flex-wrap-reverse ">
          <div class="col-md-12 py-5 wow fadeInLeft" style="padding-left:55px">
            <div class="table-responsive">
            @if(Session::has('message'))
                <div class="alert alert-{{ session()->get('type') }}" role="alert">
                    {{ session()->get('message') }}
                </div>
            @endif
                          
              <table class="table table-rounded table-rounded2" style="border-spacing: 0px; border-collapse: separate;">
                <thead class="bg-primary">
                    <tr>
                        <th scope="col">#id</th>
                        <th scope="col">name</th>
                        <th scope="col">surname</th>
                        <th scope="col">email</th>
                        <th scope="col">phone</th>
                        <th scope="col">hiringDate</th>
                        <th scope="col">workstation</th>
                        <th scope="col">department</th>
                        <th class="plus" scope="col" colspan = 3><a href="{{ url('employee/create') }}">Add New<span class="mai-add-circle-outline"></span></a></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>
                                {{ $employee->id }}
                            </td>
                            <td>
                                {{ $employee->name }}
                            </td>
                            <td>
                                {{ $employee->surname }}
                            </td>
                            <td>
                                {{ $employee->email }}
                            </td>
                            <td>
                                {{ $employee->phone }}
                            </td>
                            <td>
                                {{ $employee->hiringDate }}
                            </td>
                            @if($employee->idworkstation)
                            <td>
                                {{ $employee->workstation->name }}
                            </td>
                            @else
                            <td class="bg-danger">
                                Unassigned
                            </td>
                            @endif
                            @if($employee->iddepartment)
                            <td>
                                {{ $employee->department->name }}
                            </td>
                            @else
                            <td class="bg-danger">
                                Unassigned
                            </td>
                            @endif
                            <td>
                                <a href="{{ url('employee/' . $employee->id) }}">Show</a>
                            </td>
                            <td>
                                <a href="{{ url('employee/' . $employee->id . '/edit') }}">Edit</a>
                            </td>
                        <td> 
                            <a href="javascript: void(0);" onclick="deletes('{{ $employee->name }}','{{ url('employee/' . $employee->id) }}')"  data-toggle="modal" data-target="#modalDelete">
                                Delete
                            </a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
              
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</header>


@endsection

@section('js')

@endsection

