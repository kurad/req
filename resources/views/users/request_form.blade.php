@extends('users.layout')

@section('content')
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Request Form </h1>
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
            <h3 class="tile-title">Requisition form</h3>
            <div class="tile-body">
              <form class="row" action="{{ route('save_request') }}" method="POST">
                  @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success')}}
                    </div>
                  @endif
                  @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail')}}
                    </div>
                  @endif
              {{ csrf_field() }}

              <div class="form-group col-md-4">
                  <label class="control-label">RequestNumber</label>
                  <input class="form-control" type="text" name="number" disabled value="{{ $re->id}}">
                </div>
                <div class="form-group col-md-4">
                  <label class="control-label">Department</label>
                  <input class="form-control" type="text" name="dept" disabled value="{{ $re->department }}">
                </div>
                <div class="form-group col-md-4">
                  <label class="control-label">Requested By</label>
                  <input class="form-control" type="text" name="by" disabled value="{{ Auth::user()->name}}">
                </div>

                <div class="form-group col-md-3">
                  <label class="control-label">Item Name</label>
                  <input class="form-control" type="text" name="itemname" placeholder="Enter Item name" value="{{ old('itemname')}}">
                  <span class="text-danger">@error('itemname'){{ $message }} @enderror</span>
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">Description</label>
                  <input class="form-control" type="text" placeholder="Enter your email">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label">Quantity</label>
                  <input class="form-control" name="quantity" type="number" placeholder="Quantity" value="{{ old('quantity') }}">
                  <span class="text-danger">@error('quantity'){{ $message }} @enderror</span>
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label">Unit Price</label>
                  <input class="form-control" name="unit_price" type="number" placeholder="Unit Price" value="{{ old('unit_price') }}">
                  <span class="text-danger">@error('unit_price'){{ $message }} @enderror</span>
                </div>
                <div class="form-group col-md-2 align-self-end">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-plus"></i>Add another</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
      <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Your requests</h3>
            <div class="tile-body">
                <table class="table" >
                    <tr>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>
                    
                </table>
            </div>
        </div>
</div>
</div>
    </main>
    @endsection