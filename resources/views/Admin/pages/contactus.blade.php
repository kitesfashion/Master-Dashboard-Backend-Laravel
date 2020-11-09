@extends('admin.master')
@section('content')
<div class="card-body">
    <div class="table-responsive">
     <table id="example" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
        @foreach($contact as $contact)
       <tr>
        <td>{{$contact->name}}</td>
        <td>{{$contact->phone}}</td>
        <td>{{$contact->email}}</td>
        <td>{{$contact->subject}}</td>
        <?php  $str =$contact->message ?>
        <td> <?php  echo substr($str, 0, 80) ?></td>
        <td>{{ date('d-M-Y', strtotime($contact->created_at)) }}</td>
      
       </tr>
       @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div> 
@endsection