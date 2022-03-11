@extends('admin.layout')

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
            <h3 class="tile-title">Your requests</h3>
            <div class="tile-body">
                <table class="table" >
                    <tr>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach($requests as $request)
                    <tr>
                        <td>{{ $request->itemname }}</td>
                        <td>{{ $request->quantity }}</td>
                        <td>{{ $request->unit_price }}</td>
                        <td>{{ $request->unit_price  *  $request->quantity }}</td>
                        <td>
                            @if($request->status == 0)
                            <span class="label label-primary">Pending</span>
                            @elseif($request->status == 1)
                            <span class="label label-success">Approved</span>
                            @elseif($request->status == 2)
                            <span class="label label-danger">Rejected</span>
                            @endif
                        </td>
                        <td><a href="#" class="btn btn-primary">Approve</a>
                            <a href="#" class="btn btn-danger">Reject</a>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
</div>
</div>
    </main>
    @endsection