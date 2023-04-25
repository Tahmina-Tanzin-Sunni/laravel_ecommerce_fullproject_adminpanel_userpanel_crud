<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  <style type="text/css">
   .division_center
   {
      text-align:center;
      padding-top:40px;
   }
   .headcategory
   {
    font-size:35px;
   }
   .table_design{
    margin:auto;
    text-align: center;
    color:white;
    background-color:#84590594;
    width:50%;
    padding:100px;
    border: 4px solid #f77777;
   }
   
  </style>
  </head>
  <body>
    <div class="container-scroller">
    @include('admin.sidebar')
      <!-- partial:partials/_sidebar.html -->
 
      <!-- partial -->
     @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          
        <div class="division_center">
        <h1 class="headcategory">Add Category</h1>

        <form action="{{url('/add_category')}}" method="POST">
            @csrf
     <input style="color:black ; padding: 15px;" type="text" name="category" placeholder="Please Enter Category Name">
     <input type="submit" class="btn btn-success" name="submit" value="Add category">


        </form>

        </div>
         <table class="table_design">

         <tr>
            <td>Category Name</td>
            <td>Action</td>
         </tr>
         @foreach($data as $data)
         <tr>
            <td>{{$data->category_name}}</td>
            <td>
                <a class="btn btn-danger"href="{{url('/delete_category',$data->id)}}">Delete</a>
            </td>
         </tr>
         @endforeach
         </table>
          </div>
          </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>