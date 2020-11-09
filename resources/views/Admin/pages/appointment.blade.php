@extends('admin.master')
@section('content')
<div class="card-body">
    <h2 class="text-center">Appoinment List</h2>
    <div class="table-responsive">
     <table id="example" class="table table-bordered table-hover">
        <thead>
          <tr class="bg-primary">
            <th>SL</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Test Category</th>
            <th>Sample</th>
            <th>Report</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @php $k=1; @endphp
        @foreach($appoinment as $appoinment)
        @php $cat=DB::table('test_categories')->find($appoinment->appointcat) @endphp
       <tr>
        <td>{{$k++}}</td>
        <td>{{$appoinment->name}}</td>
        <td>{{$appoinment->phone}}</td>
        <td>{{$appoinment->email}}</td>
        <td>{{@$cat->test_category}}</td>
        <td>{{$appoinment->sample}}</td>
        <td>{{$appoinment->report}}</td>
        <td>{{ date('d-M-Y', strtotime($appoinment->date)) }}</td>  
        <td> <a href="{{url('/apoinment_view/'.$appoinment->id)}}" class="btn btn-sm btn-info" >View</a></td>
       </tr>
       @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div> 
@endsection