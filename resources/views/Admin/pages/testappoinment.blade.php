@extends('admin.master')
@section('content')
<div class="card-body">
    <h2 class="text-center">Test Appoinment List</h2>
    <div class="table-responsive">
     <table id="example" class="table table-bordered table-hover">
        <thead>
          <tr class="bg-primary">
            <th>SL</th>
            <th>Book.ID</th>
            <th>Test Name</th>
            <th>Patient Name</th>
            <th>Phone</th>
            <th>Sample</th>
            <th>Report</th>
            <th>Date</th>
            <th>Time</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @php $k=1; @endphp
        @foreach($testppoinment as $appoinment)
        @php $cat=DB::table('test_categories')->find($appoinment->appointcat) @endphp
       <tr>
        <td>{{$k++}}</td>
        <td>{{$appoinment->bookingid}}</td>
        <td>{{$appoinment->testid}}</td>
        <td>{{$appoinment->patient}}</td>
        <td>{{$appoinment->phone}}</td>
        <td>{{$appoinment->sample}}</td>
        <td>{{$appoinment->report}}</td>
        <td>{{ date('l d-M-Y', strtotime($appoinment->date)) }}</td>  
        <td>{{ date(' h:i a', strtotime($appoinment->time)) }}</td>  
        <td> <a href="{{url('/testppointlist_view/'.$appoinment->id)}}" class="btn btn-sm btn-info" >View</a></td>
       </tr>
       @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div> 
@endsection