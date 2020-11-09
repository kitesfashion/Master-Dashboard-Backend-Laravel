@extends('admin.master')
@section('content')
<div class="card-body">
    <h2 class="text-center">{{$testppoinment_view->patient}} Test Appoinment Details</h2>
    <div class="table-responsive">
    <a href="{{url('/testppointlist')}}"><button class="btn btn-danger btn-sm">Back Appoinment List</button></a><hr>
     <table  class="table table-bordered table-hover">
    
        <tbody class="bg-info">
            <tr>
            <td>Booking ID</td>
            <td>{{$testppoinment_view->bookingid}}</td>
           </tr>
           <tr>
            <td>Test Name</td>
           <td>{{$testppoinment_view->testid}}</td>
           </tr>
           <tr>
            <td>Patient Name</td>
           <td>{{$testppoinment_view->patient}}</td>
           </tr>
           <tr>
            <td>Phone</td>
           <td>{{$testppoinment_view->phone}}</td>
           </tr>
           <tr>
            <td>Age</td>
           <td>{{$testppoinment_view->age}}</td>
           </tr>
           <tr>
            <td>Address</td>
           <td>{{$testppoinment_view->address}}</td>
           </tr>
           <tr>
            <td>Date</td>
           <td>{{ date('d-M-Y', strtotime($testppoinment_view->date)) }}</td>
           </tr>
           <tr>
            <td>Day</td>
           <td>{{ date('l', strtotime($testppoinment_view->date)) }}</td>
           </tr>
           <tr>
            <td>Time</td>
           <td> {{ date('h:i a', strtotime($testppoinment_view->time)) }}</td>
           </tr>
           <tr>
            <td>Sample</td>
           <td>{{$testppoinment_view->sample}}</td>
           </tr>
           <tr>
            <td>Report</td>
           <td>{{$testppoinment_view->report}}</td>
           </tr>

        </tbody>
      </table>
    </div>
  </div>
</div> 
@endsection