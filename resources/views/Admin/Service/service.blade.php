@extends('admin.master')
@section('content')
<div class="page-content fade-in-up">
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">Service</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form enctype="multipart/form-data" action="{{url('/service/store')}}" method="post">
  @csrf
    <div class="modal-body">
        <div class="row">
            <div class="col-sm-6 form-group">
                <label>Our Service</label>
                 <select  class="form-control" required name="service">
                     <option value="">Select Service</option>
                     <option value="1">Home Sample Collection</option>
                     <option value="2">Home Report Delivery</option>
                     <option value="3">Online Report</option>
                 </select>
            </div>   
        <div class="col-sm-3 form-group">
            <label>Banner Image</label>
            <input class="form-control" required  type="file"  name="bannerimage">
        </div> 
        <div class="col-sm-3 form-group">
            <label>Image</label>
            <input class="form-control"  required type="file"  name="image">
        </div>
        <div class="col-sm-6 form-group">
            <label>Header-1</label>
            <input class="form-control"  required type="text"  name="header1">
        </div>
        <div class="col-sm-6 form-group">
            <label>Details-1</label>
            <textarea type="text"  class="form-control" required name="details1"></textarea>
        </div>
        <div class="col-sm-6 form-group">
            <label>Header-2</label>
            <input class="form-control"  required type="text"  name="header2">
        </div>
        <div class="col-sm-6 form-group">
            <label>Details-2</label>
            <textarea type="text"  class="form-control" required name="details2"></textarea>
        </div>
        <div class="col-sm-6 form-group">
            <label>Header-3</label>
            <input class="form-control"  required type="text"  name="header3">
        </div>
         <div class="col-sm-6 form-group">
            <label>Details-3</label>
            <textarea type="text"  class="form-control" name="details3"></textarea>
        </div>
        <div class="col-sm-6 form-group">
            <label>Header-4</label>
            <input class="form-control"  required type="text"  name="header4">
        </div>
         <div class="col-sm-6 form-group">
            <label>Details-4</label>
            <textarea type="text"  class="form-control" name="details4"></textarea>
        </div>
        <div class="col-sm-6 form-group">
            <label>Header-5</label>
            <input class="form-control"  required type="text"  name="header5">
        </div>
         <div class="col-sm-6 form-group">
            <label>Details-5</label>
            <textarea type="text"  class="form-control" name="details5"></textarea>
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
    <form enctype="multipart/form-data" action="{{url('/service/update')}}" method="post" >
        @csrf
    <div class="modal-body">
        <div class="row"> 
        <div class="col-sm-6 form-group">
            <label>Our Service</label>
             <select  class="form-control service" required name="service">
                 <option value="">Select Service</option>
                 <option value="1">Home Sample Collection</option>
                 <option value="2">Home Report Delivery</option>
                 <option value="3">Online Report</option>
             </select>
            <input class="cId" type="hidden" name="id" id="id">

        </div>   
    <div class="col-sm-3 form-group">
        <label>Banner Image</label>
        <input class="form-control bannerimage"  type="file"  name="bannerimage">
    </div> 
    <div class="col-sm-3 form-group">
        <label>Image</label>
        <input class="form-control image"  type="file"  name="image">
    </div>
    <div class="col-sm-6 form-group">
        <label>Header-1</label>
        <input class="form-control header1"  required type="text"  name="header1">
    </div>
    <div class="col-sm-6 form-group">
        <label>Details-1</label>
        <textarea type="text"  class="form-control details1" required name="details1"></textarea>
    </div>
    <div class="col-sm-6 form-group">
        <label>Header-2</label>
        <input class="form-control header2"  required type="text"  name="header2">
    </div>
    <div class="col-sm-6 form-group">
        <label>Details-2</label>
        <textarea type="text"  class="form-control details2" required name="details2"></textarea>
    </div>
    <div class="col-sm-6 form-group">
        <label>Header-3</label>
        <input class="form-control header3"  required type="text"  name="header3">
    </div>
     <div class="col-sm-6 form-group">
        <label>Details-3</label>
        <textarea type="text"  class="form-control details3" name="details3"></textarea>
    </div>
    <div class="col-sm-6 form-group">
        <label>Header-4</label>
        <input class="form-control header4"  required type="text"  name="header4">
    </div>
     <div class="col-sm-6 form-group">
        <label>Details-4</label>
        <textarea type="text"  class="form-control details4" name="details4"></textarea>
    </div>
    <div class="col-sm-6 form-group">
        <label>Header-5</label>
        <input class="form-control header5"  required type="text"  name="header5">
    </div>
     <div class="col-sm-6 form-group">
        <label>Details-5</label>
        <textarea type="text"  class="form-control details5" name="details5"></textarea>
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
        <div class="col-md-6"><h5 class="m-0 font-weight-bold ">Service List</h5></div>   
        <div class="col-md-6">
                <button type="button" class="btn btn-success fa-pull-right" data-toggle="modal" data-target="#exampleModalCenter" >
                    Add Service     
            </button>
        </div>
    </div> 
    </div> 
    <div class="card-body">
      <div class="table-responsive">
       <table id="example" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Menu Name</th>
              <th>Banner</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach($service as $service)
         <tr>
          <td> @if($service->service==1)  
                Home Sample Collection
               @elseif($service->service==2)
               Home Report Delivery
               @else
               Online Report
               @endif
        
        </td>

          <td><img src="{{asset($service->bannerimage)}}" style="height:150px; width:280px;"></td>
          <td><img src="{{asset($service->image)}}" style="height:150px; width:180px;"></td>
          <td><a href="" onclick= 'edit({{$service->id}});' data-toggle="modal" id="edit" 
            data-target="#exampleModalCenter_edit" class="btn btn-sm btn-info" > Edit</a>
                      
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
              url:"{{url('/service/edit')}}/"+x,
              success:function(response){
                  console.log(response);
                  $('.service').val(response.service);
                  $('.header1').val(response.header1);
                  $('.header2').val(response.header2);
                  $('.header3').val(response.header3);
                  $('.header4').val(response.header4);
                  $('.header5').val(response.header5);
                  $('.details1').val(response.details1);
                  $('.details4').val(response.details4);
                  $('.details2').val(response.details2);
                  $('.details3').val(response.details3);
                  $('.details5').val(response.details5);
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