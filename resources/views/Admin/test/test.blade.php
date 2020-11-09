@extends('admin.master')
@section('content')
<div class="page-content fade-in-up">
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog  modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">Test</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form enctype="multipart/form-data" action="{{route('test_store')}}" method="post">
  @csrf
    <div class="modal-body">
        <div class="row">
 
        <div class="col-sm-12 form-group">
            <label>Select Category</label>
            <select class="form-control" required  name="category">
             <option value="">Select Category</option>
             @foreach($category as $cat)
            <option value="{{$cat->id}}">{{$cat->test_category}}</option>
             @endforeach
            </select>
        </div>  
        <div class="col-sm-12 form-group">
            <label>Test Name</label>
            <input class="form-control" required placeholder="Blood Test"  type="text"  name="name">
        </div>
        <div class="col-sm-6 form-group">
            <label>Price</label>
            <input class="form-control" required min="1" placeholder="2000"   type="number"  name="price">
        </div>
        <div class="col-sm-6 form-group">
            <label>Duration Day</label>
            <input class="form-control" required  min="1" placeholder="1"  type="number"  name="duration">
        </div>
        <div class="col-sm-6 form-group">
            <label>Report</label>
            <input class="form-control" required  type="text" placeholder="Home & Online"   name="report">
        </div>
        <div class="col-sm-6 form-group">
            <label>Appointment</label>
            <input class="form-control" required  type="text" placeholder="01318712782"   name="appointment">
        </div>
        <div class="col-sm-12 form-group">
            <label>Details</label>
            <textarea class="form-control" required  name="details"></textarea>
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
<div class="modal-dialog  modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"> Update</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <form enctype="multipart/form-data" action="{{route('test_update')}}" method="post" >
        @csrf
    <div class="modal-body">
        <div class="row">
            <div class="col-sm-12 form-group">
                <label>Select Category</label>
                <select class="form-control category" required  name="category">
                 <option value="">Select Category</option>
                 @foreach($categorys as $cats)
                <option value="{{$cats->id}}">{{$cats->test_category}}</option>
                 @endforeach
                </select>
            </div>  
            <div class="col-sm-12 form-group">
                <label>Test Name</label>
                <input class="form-control name" required placeholder="Blood Test"  type="text"  name="name">
                <input class="cId" type="hidden" name="id" id="id">
            </div>
            <div class="col-sm-6 form-group">
                <label>Price</label> 
                <input class="form-control price" required min="1" placeholder="2000"   type="number"  name="price">
            </div>
            <div class="col-sm-6 form-group">
                <label>Duration Day</label>
                <input class="form-control duration" required  min="1" placeholder="1"  type="number"  name="duration">
            </div>
            <div class="col-sm-6 form-group">
                <label>Report</label>
                <input class="form-control report" required  type="text" placeholder="Home & Online"   name="report">
            </div>
            <div class="col-sm-6 form-group">
                <label>Appointment</label>
                <input class="form-control appointment" required  type="text" placeholder="01318712782"   name="appointment">
            </div>
            <div class="col-sm-12 form-group">
                <label>Details</label>
                <textarea class="form-control details" required  name="details"></textarea>
            </div> 
            <div class="col-sm-12 form-group">
                <label>Image</label>
                <input class="form-control image"   type="file"  name="image">
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
        <div class="col-md-6"><h5 class="m-0 font-weight-bold ">Test Category</h5></div>   
        <div class="col-md-6">
                <button type="button" class="btn btn-success fa-pull-right" data-toggle="modal" data-target="#exampleModalCenter" >
                    Add Test    
            </button>
        </div>
    </div> 
    </div> 
    <div class="card-body">
      <div class="table-responsive">
       <table id="example" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>SL</th>
              <th>Category </th>
              <th>Name </th>
              <th>Price</th>
              <th>Duration</th>
              <th>Update Date</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              <?php $s=1; ?>
          @foreach($test as $test)
         <tr>
         <td>{{$s++}}</td>
         <?php $cate=DB::table('test_categories')->find($test->category) ?>
         <td>{{$cate->test_category}}</td>
          <td>{{$test->name}}</td>
          <td>{{$test->price}}</td>
          <td>{{$test->duration}} day</td>
          <td>{{ date('d-M-Y', strtotime($test->updated_at)) }}</td>
          <td><img src="{{asset($test->image)}}" style="height:50px; width:80px;"></td>
          <td><a href="" onclick= 'edit({{$test->id}});' data-toggle="modal" id="edit" 
            data-target="#exampleModalCenter_edit" class="btn btn-sm btn-info" > Edit</a>
            <a href="{{url('/test/delete/'.$test->id)}}" class="btn btn-sm btn-danger" onclick='alert("Confirm Delete This Test ??")' >Delete</a>
            
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
              url:"{{url('/test/edit/')}}/"+x,
              success:function(response){
                  console.log(response);
                  $('.category').val(response.category); 
                  $('.name').val(response.name);
                  $('.price').val(response.price);
                  $('.duration').val(response.duration);
                  $('.report').val(response.report);
                  $('.appointment').val(response.appointment);
                  $('.details').val(response.details);
                  $('.cId').val(response.id);
           
              },
              error:function(xhr,status,error){
                  console.log(error);
                  
              }
  
          });
      }  
          
  </script>

@endsection