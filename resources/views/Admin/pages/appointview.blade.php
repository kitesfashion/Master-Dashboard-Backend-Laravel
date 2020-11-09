@extends('admin.master')
@section('content')
<div class="card-body">
    <h2 class="text-center">Appoinment Details</h2>
    <div class="table-responsive">
    <a href="{{url('/appointlist')}}"><button class="btn btn-danger btn-sm">Back Appoinment List</button></a><hr>
     <table  class="table table-bordered table-hover">
    
        <tbody class="bg-info">
           <tr>
            <td>Name</td>
           <td>{{$appoinmentview->name}}</td>
           </tr>
           <tr>
            <td>Phone</td>
           <td>{{$appoinmentview->phone}}</td>
           </tr>
           <tr>
            <td>Email</td>
           <td>{{$appoinmentview->email}}</td>
           </tr>
           <tr>
            <td>Address</td>
           <td>{{$appoinmentview->address}}</td>
           </tr>
           <tr>
            <td>Date</td>
           <td>{{ date('d-M-Y', strtotime($appoinmentview->date)) }}</td>
           </tr>
           <tr>
            <td>Time</td>
           <td> {{ date('h:i a', strtotime($appoinmentview->time)) }}</td>
           </tr>
           <tr>
               @php $cat=DB::table('test_categories')->find($appoinmentview->appointcat) @endphp
            <td>Test Category</td>
           <td>{{@$cat->test_category}}</td>
           </tr>
           <tr>
            <td>Sample</td>
           <td>{{$appoinmentview->sample}}</td>
           </tr>
           <tr>
            <td>Report</td>
           <td>{{$appoinmentview->report}}</td>
           </tr>

        </tbody>
      </table>
    </div>
  </div>
</div> 
@endsection