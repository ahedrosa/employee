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
            <input type="submit" class="btn btn-primary" value="Delete Department"/>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="container">
    <h1 class="text-primary wow fadeInRight">Departments</h1>
      <div class="page-banner home-banner">
        <div class="row flex-wrap-reverse h-100">
          <div class="col-md-11 py-5 wow fadeInLeft">

            @if(Session::has('message'))
                <div class="alert alert-{{ session()->get('type') }}" role="alert">
                    {{ session()->get('message') }}
                </div>
            @endif
                          
              <table class="table table-rounded" style="border-spacing: 0px; border-collapse: separate;">
                <thead class="bg-primary">
                    <tr>
                        <th scope="col"># id</th>
                        <th scope="col">name</th>
                        <th scope="col">location</th>
                        <th scope="col">idemployeemanager</th>
                        <th scope="col" class="plus"colspan = 3><a href="{{ url('department/create') }}">Add New<span class="mai-add-circle-outline"></span></a></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($departments as $department)
                        <tr>
                            <td>
                                {{ $department->id }}
                            </td>
                            <td>
                                {{ $department->name }}
                            </td>
                            <td>
                                {{ $department->location }}
                            </td>
                            <td>
                                {{ $department->idemployeemanager }}
                            </td>
                            <td>
                                <a href="{{ url('department/' . $department->id) }}">Show</a>
                            </td>
                            <td>
                                <a href="{{ url('department/' . $department->id . '/edit') }}">Edit</a>
                            </td>
                        <td> 
                            <a href="javascript: void(0);" onclick="deletes('{{ $department->name }}','{{ url('department/' . $department->id) }}')" data-name="{{ $department->name }}" data-url="{{ url('department/' . $department->id) }}" data-toggle="modal" data-target="#modalDelete">
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
</header>


@endsection

@section('js')

@endsection

