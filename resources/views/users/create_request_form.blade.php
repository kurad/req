@extends('users.layout')

@section('content')
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Form Samples</h1>
          <p>Sample forms</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item"><a href="#">Sample Forms</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Create Requisition</h3>
            <div class="tile-body">
              <form action="{{ route('createRequest') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <label class="control-label">Department</label>
                  <select name="dept" class="form-control col-md-4">
                    <option>-- Select Department --</option>
                    <option>Computer Science</option>
                    <option>Bio - Chemistry</option>
                    <option>Math - Physics</option>
                    <option>Social Science</option>
                    <option>Languages</option>
                    <option>Kitchen</option>
                    <option>Logistics</option>
                  </select>
                </div>
                <div class="tile-footer">
              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save & Continue</button>
            </div>
            </div>
            
            </form>
          </div>
        </div>
      </div>
      
    
@endsection