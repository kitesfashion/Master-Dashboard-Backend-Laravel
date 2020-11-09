@extends('admin.master')
@section('content')
<div class="page-content fade-in-up">
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">Add A Doctor</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form enctype="multipart/form-data" action="{{url('/doctors/store')}}" method="post">
  @csrf
    <div class="modal-body">
        <div class="row">
 
        <div class="col-sm-12 form-group">
            <label>Name</label>
            <input class="form-control"  required type="text"  name="name">
        </div> 
        <div class="col-sm-12 form-group">
            <label>Specialty</label>
            <input class="form-control"  required type="text"  name="specialty">
        </div>  
        <div class="col-sm-12 form-group">
            <label>Degree</label>
            <input class="form-control"  required type="text"  name="degree">
        </div>   
        <div class="col-sm-12 form-group">
            <label>Chamber</label>
            <input class="form-control"  required type="text"  name="chamber">
        </div>  
        <div class="col-sm-12 form-group">
            <label>Image</label>
            <input class="form-control" required  type="file"  name="image">
        </div> 
        </div>
       </div>
    <div class="modal-footer">
        <button type="reset" class="btn btn-primary" >Clear</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</form>
</div>
</div>
</div>

{{-- Edit slider Modal --}}

<div class="modal fade" id="exampleModalCenter_edit" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"> Update</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <form enctype="multipart/form-data" action="{{url('/doctors/update')}}" method="post" >
        @csrf
    <div class="modal-body">
        <div class="row">
        <div class="col-sm-12 form-group">
            <label>Name</label>
            <input class="form-control name"  required type="text"  name="name">
            <input class="cId" type="hidden" name="id" id="id">
        </div> 
        <div class="col-sm-12 form-group">
            <label>Specialty</label>
            <input class="form-control specialty"  required type="text"  name="specialty">
        </div>  
        <div class="col-sm-12 form-group">
            <label>Degree</label>
            <input class="form-control degree"  required type="text"  name="degree">
        </div>   
        <div class="col-sm-12 form-group">
            <label>Chamber</label>
            <input class="form-control chamber"  required type="text"  name="chamber">
        </div>  
        <div class="col-sm-12 form-group">
            <label>Image</label>
            <input class="form-control image" type="file"  name="image">
        </div> 
        </div>
       </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Update</button>
    </div>
</form>
</div>
</div>
</div>
</div>
<div class="card shadow">
    <div class="card-header ">
    <div class="row">
        <div class="col-md-6"><h5 class="m-0 font-weight-bold ">Doctors List</h5></div>   
        <div class="col-md-6">
                <button type="button" class="btn btn-success fa-pull-right" data-toggle="modal" data-target="#exampleModalCenter" >
                    Add New Doctor      
            </button>
        </div>
    </div> 
    </div> 
    <div class="card-body">
      <div class="table-responsive">
       <table id="example" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Name</th>
              <th>Specialty</th>
              <th>Degree</th>
              <th>Chamber</th>
              <th>Join Date</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach($doctor as $blog)
         <tr>
          <td>{{$blog->name}}</td>
          <td>{{$blog->specialty}}</td>
          <td>{{$blog->degree}}</td>
          <td>{{$blog->chamber}}</td>
          <td>{{ date('d-M-Y', strtotime($blog->created_at)) }}</td>
          <td><img src="{{asset($blog->image)}}" style="height:50px; width:80px;"></td>
          <td><a href="" onclick= 'edit({{$blog->id}});' data-toggle="modal" id="edit" 
            data-target="#exampleModalCenter_edit" class="btn btn-sm btn-info" > Edit</a>
            <a href="{{url('/doctors/delete/'.$blog->id)}}" class="btn btn-sm btn-danger" onclick='alert("Confirm Delete ??")' >Delete</a>
            
            </td>
           </tr>
         </tr>
         @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>  
<script>
  function edit(id) {
          var x =id;
          
          $.ajax({
              type:'GET',
              url:"{{url('/doctors/edit')}}/"+x,
              success:function(response){
                  console.log(response);
                  $('.name').val(response.name);
                  $('.specialty').val(response.specialty);
                  $('.degree').val(response.degree);
                  $('.chamber').val(response.chamber);
                  $('.cId').val(response.id);
           
              },
              error:function(xhr,status,error){
                  console.log(error);
                  
              }
  
          });
      }
  $(document).ready(function(){
  });   
          
  </script>

@endsection