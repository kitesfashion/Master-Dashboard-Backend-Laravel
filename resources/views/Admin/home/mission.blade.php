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
    <form enctype="multipart/form-data" action="{{route('mission.update')}}" method="post" >
        @csrf
    <div class="modal-body">
        <div class="row">
         <div class="col-sm-12 form-group">
            <label>About Us</label>
            <textarea class="form-control about"  required   name="about"></textarea>
            <input class="cId" type="hidden" name="id" id="id">
        </div>   
        <div class="col-sm-12 form-group">
            <label>Mission & Vision</label>
            <textarea class="form-control mission"  required   name="mission"></textarea>
        </div> 
        <div class="col-sm-12 form-group">
            <label>Unique</label>
            <textarea class="form-control uniquenes"  required   name="uniquenes"></textarea>
        </div>  
        <div class="col-sm-12 form-group">
            <label>Quota</label>
            <textarea class="form-control quoto"  required   name="quoto"></textarea>
        </div> 
        <div class="col-sm-12 form-group">
            <label>Quota Name</label>
            <input class="form-control quotoname"  required   name="quotoname">
        </div> 
        <div class="col-sm-6 form-group">
            <label>Quota Image</label>
            <input class="form-control"     type="file"  name="image">
        </div> 
        <div class="col-sm-6 form-group">
            <label>About Banner</label>
            <input class="form-control"     type="file"  name="banner">
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
        <div class="col-md-6"><h5 class="m-0 font-weight-bold ">Mission And Quota</h5></div>   
        <div class="col-md-6">
                <button type="button" onclick= 'edit(id=1);' id="edit"  class="btn btn-success fa-pull-right" data-toggle="modal" data-target="#exampleModalCenter_edit" >
                   Edit Mission And Quota  
            </button>
        </div>
    </div> 
    </div> 
    <div class="card-body">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <table class="table table-hover">         
                    <tbody>
                      <tr>
                        <th>About</th>
                      <td>{{$result->about}}</td>       
                      </tr>
                      <tr>
                        <th>Mission & Vision</th>
                      <td>{{$result->mission}}</td>      
                      </tr>  
                      <tr>
                        <th>Unique</th>
                      <td>{{$result->uniquenes}}</td>      
                      </tr>
                      <tr>
                        <th>Quota Person </th>
                      <td>{{$result->quotoname}}</td>      
                      </tr>
                      <tr>
                        <th>Quota</th>
                      <td>{{$result->quoto}}</td>      
                      </tr>                    
                      <tr>
                        <th>Logo</th>
                      <td> @if($result->image=='0')
                        <img src="{{asset('/img/photo.png')}}" style="height:150px;width:120px;">
                        @else
                        <img src="{{asset($result->image)}}" style="height:120px;width:120px;">
                        @endif</td>      
                      </tr>  
                      <tr>
                        <th>Banner</th>
                      <td> @if($result->image=='0')
                        <img src="{{asset('/img/photo.png')}}" style="height:150px;width:120px;">
                        @else
                        <img src="{{asset($result->banner)}}" style="height:320px;width:420px;">
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
            <div class="col-md-1"></div>
        </div>
    </div>
  </div>  
<script>
  function edit(id) {
          var x =id;
          
          $.ajax({
              type:'GET',
              url:"{{url('/mission-edit')}}/"+x,
              success:function(response){
                  console.log(response);
                  $('.about').val(response.about);
                  $('.mission').val(response.mission);
                  $('.uniquenes').val(response.uniquenes);
                  $('.quoto').val(response.quoto);
                  $('.quotoname').val(response.quotoname);
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