@extends('admin.master')

@section('content')
<div class="page-content fade-in-up">
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">Blogs</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form enctype="multipart/form-data" action="" method="post">
  @csrf
    <div class="modal-body">
        <div class="row">
 
        <div class="col-sm-6 form-group">
            <label>Name</label>
            <input class="form-control"  required type="text"  name="name">
        </div>  
        <div class="col-sm-3 form-group">
            <label>Image</label>
            <input class="form-control" required  type="file"  name="image">
        </div> 
        <div class="col-sm-3 form-group">
            <label>Author</label>
            <input class="form-control"  required type="text"  name="author">
        </div>
            <div class="col-sm-6 form-group">
            <label>Details</label>
            <textarea type="text"  class="form-control" required name="details"></textarea>
        </div>
        <div class="col-sm-6 form-group">
            <label>Details-1</label>
            <textarea type="text"  class="form-control" required name="details1"></textarea>
        </div>
         <div class="col-sm-6 form-group">
            <label>Details-2</label>
            <textarea type="text"  class="form-control" name="details2"></textarea>
        </div>
         <div class="col-sm-6 form-group">
            <label>Details-3</label>
            <textarea type="text"  class="form-control" name="details3"></textarea>
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
<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"> Update</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
      <form enctype="multipart/form-data" action="" method="post" >
        @csrf
    <div class="modal-body">
        <div class="row">

         <div class="col-sm-6 form-group">
            <label>Name</label>
            <input class="form-control name"  required type="text"  name="name">
            <input class="cId" type="hidden" name="id" id="id">

        </div>  
        <div class="col-sm-3 form-group">
            <label>Image</label>
            <input class="form-control"   type="file"  name="image">
        </div> 
        <div class="col-sm-3 form-group">
            <label>Author</label>
            <input class="form-control author"  required type="text"  name="author">
        </div>
            <div class="col-sm-6 form-group">
            <label>Details</label>
            <textarea type="text"  class="form-control details" required name="details"></textarea>
        </div>
        <div class="col-sm-6 form-group">
            <label>Details-1</label>
            <textarea type="text"  class="form-control details1" required name="details1"></textarea>
        </div>
         <div class="col-sm-6 form-group">
            <label>Details-2</label>
            <textarea type="text"  class="form-control details2" name="details2"></textarea>
        </div>
         <div class="col-sm-6 form-group">
            <label>Details-3</label>
            <textarea type="text"  class="form-control details3" name="details3"></textarea>
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
    <br>
    <div class="row">
        <div class="col-md-6"><h5 class="m-0 font-weight-bold ">Blogs</h5></div>   
        <div class="col-md-6">
                <button type="button" class="btn btn-success fa-pull-right" data-toggle="modal" data-target="#exampleModalCenter" >
                    Add Blog       
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
              <th>Author</th>
              <th>Date</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          {{-- @foreach($blog as $blog)
         <tr>
          <td>{{$blog->name}}</td>
          <td>{{$blog->author}}</td>
          <td>{{ date('d-M-Y', strtotime($blog->created_at)) }}</td>
          <td><img src="{{asset($blog->image)}}" style="height:50px; width:80px;"></td>
          <td><a href="" onclick= 'edit({{$blog->id}});' data-toggle="modal" id="edit" 
            data-target="#exampleModalCenter_edit" class="btn btn-sm btn-info" > Edit</a>
            <a href="{{url('/blog_delete/'.$blog->id)}}" class="btn btn-sm btn-danger" onclick='alert("Confirm Delete ??")' >Delete</a>
            
            </td>
           </tr>
         </tr>
         @endforeach --}}
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
              url:"{{url('/blog_edit')}}/"+x,
              success:function(response){
                  console.log(response);
                  $('.name').val(response.name);
                  $('.author').val(response.author);
                  $('.details').val(response.details);
                  $('.details1').val(response.details);
                  $('.details2').val(response.details2);
                  $('.details3').val(response.details3);
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