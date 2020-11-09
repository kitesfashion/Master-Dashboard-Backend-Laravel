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
    <form enctype="multipart/form-data" action="{{route('company.update')}}" method="post" >
        @csrf
    <div class="modal-body">
        <div class="row">
         <div class="col-sm-12 form-group">
            <label>Name</label>
            <input class="form-control name"  required type="text"  name="name">
            <input class="cId" type="hidden" name="id" id="id">
        </div>   
        <div class="col-sm-12 form-group">
            <label>Address</label>
            <input class="form-control address"  required type="text"  name="address">
        </div>
        <div class="col-sm-12 form-group">
          <label>Schedule</label>
          <input type="text"  class="form-control time" required name="time"></input>
      </div>
            <div class="col-sm-6 form-group">
            <label>Phone-1</label>
            <input type="text"  class="form-control mobile1" required name="mobile1"></input>
        </div>
        <div class="col-sm-6 form-group">
            <label>Phone-2</label>
            <input type="text"  class="form-control mobile2"  name="mobile2"></input>
        </div>
         <div class="col-sm-6 form-group">
            <label>Email</label>
            <input type="text"  class="form-control email" required name="email"></input>
        </div>
      
        <div class="col-sm-6 form-group">
            <label>Logo</label>
            <input class="form-control"     type="file"  name="image">
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
        <div class="col-md-6"><h5 class="m-0 font-weight-bold ">My Company</h5></div>   
        <div class="col-md-6">
                <button type="button" onclick= 'edit(id=1);' id="edit"  class="btn btn-success fa-pull-right" data-toggle="modal" data-target="#exampleModalCenter_edit" >
                   Edit Company  
            </button>
        </div>
    </div> 
    </div> 
    <div class="card-body">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <table class="table table-hover">         
                    <tbody>
                      <tr>
                        <th>Company Name</th>
                      <td>{{$result->name}}</td>       
                      </tr>
                      <tr>
                        <th>Email</th>
                      <td>{{$result->email}}</td>      
                      </tr>  
                      <tr>
                        <th>Phone-1</th>
                      <td>{{$result->mobile1}}</td>      
                      </tr>
                      <tr>
                        <th>Phone-2</th>
                      <td>{{$result->mobile2}}</td>      
                      </tr>
                      <tr>
                        <th>Address</th>
                      <td>{{$result->address}}</td>      
                      </tr>
                      <tr>
                        <th>Schedule</th>
                      <td>{{$result->free}}</td>      
                      </tr>
                      <tr>
                        <th>Logo</th>
                      <td> @if($result->image=='0')
                        <img src="{{asset('/img/photo.png')}}" style="height:150px;width:120px;">
                        @else
                        <img src="{{asset($result->image)}}" style="height:120px;width:120px;">
                        @endif</td>      
                      </tr>    
                    </tbody>
                  </table>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
  </div>  
<script>
  function edit(id) {
          var x =id;
          
          $.ajax({
              type:'GET',
              url:"{{url('/company-edit')}}/"+x,
              success:function(response){
                  console.log(response);
                  $('.name').val(response.name);
                  $('.address').val(response.address);
                  $('.mobile1').val(response.mobile1);
                  $('.mobile2').val(response.mobile2);
                  $('.email').val(response.email);
                  $('.time').val(response.free);
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