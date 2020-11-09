@extends('admin.master')
@section('content')
<div class="page-content fade-in-up">
<div class="modal fade" id="exampleModalCenter_edit" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog  modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"> Update</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <form enctype="multipart/form-data" action="{{url('/banner/update')}}" method="post" >
        @csrf
    <div class="modal-body">
        <div class="row"> 
        <div class="col-sm-12 form-group">
            <label>Test Menu Banner </label>
            <input class="form-control"   type="file"  name="image1">
            <input class="cId" type="hidden" name="id" id="id">
        </div> 
        <div class="col-sm-12 form-group">
            <label>Doctor Banner </label>
            <input class="form-control"   type="file"  name="image2">
        </div>                   
        <div class="col-sm-12 form-group">
            <label> Contact Banner </label>
            <input class="form-control"   type="file"  name="image3">
        </div>
        <div class="col-sm-12 form-group">
            <label>Demo Banner </label>
            <input class="form-control"   type="file"  name="image4">
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
    <div class="card-body">
      <div class="table-responsive">
       <table id="example" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Test Menu</th>
              <th>Doctor</th>
              <th>Contact</th>
              <th>Demo</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          
         <tr>
          <td><img src="{{asset($blog->image1)}}" style="height:150px; width:180px;"></td>
          <td><img src="{{asset($blog->image2)}}" style="height:150px; width:180px;"></td>
          <td><img src="{{asset($blog->image3)}}" style="height:150px; width:180px;"></td>
          <td><img src="{{asset($blog->image4)}}" style="height:150px; width:180px;"></td>
          <td><a href="" onclick= 'edit({{$blog->id}});' data-toggle="modal" id="edit" 
            data-target="#exampleModalCenter_edit" class="btn btn-sm btn-info" > Edit</a>
           
            
            </td>
           </tr>
         </tr>
      
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
              url:"{{url('/banner/edit')}}/"+x,
              success:function(response){
                  console.log(response);
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