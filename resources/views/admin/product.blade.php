<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  <style type="text/css">
   .division_center
   {
      text-align:center;
      padding-top:40px;
      background-color:ass;
   }
   .headproduct
   {
    font-size:35px;
   }
   label{
    color:red;
    font-size:20px;
   }
   .division{
    margin: 15px;
   }
   
   </style>
  </head>
  <body>
    <div class="container-scroller">
    @include('admin.sidebar')
      <!-- partial:partials/_sidebar.html -->
 
      <!-- partial -->
     @include('admin.header')
  
              <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <h1 class="headproduct">Add Product</h1>
               <div class="division"> 
                <label>Product Title</label>
                <input style="color:black ; padding: 15px;" type="text" name="title" placeholder="Write a title of product"required>
               </div>
               <div class="division"> 
                <label>Product Description</label>
                <input style="color:black ; padding: 15px;" type="text" name="description"  placeholder="Write a title of product"required>
               </div>
               <div class="division"> 
                <label>Product Price</label>
                <input style="color:black ; padding: 15px;" type="number" name="price"  placeholder="Write a title of product" required>
               </div>
               <div class="division"> 
                <label>Product Discout Price</label>
                <input style="color:black ; padding: 15px;" type="number" name="discount_price"  placeholder="Write a title of product" required>
               </div>
              
               <div class="division"> 
                <label>Product Quantity</label>
                <input style="color:black;padding: 15px;" type="number" name="quantity"  placeholder="Write a title of product" required>
               </div>
               <div class="division"> 
                <label>Product Category</label>
                <select name="category" required>
                 
                  @foreach($catgory as $category)
                  <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                  endforeach
                </select>
               </div>
               <div class="division">
               <label>Product Image</label>
                <input style="padding: 15px;" type="file" name="image" required>
              
               </div>
               <div class="division">
             
                <input class="btn  btn-danger" type="submit" value="Add Product"name="submit" required>
              
               </div>

              
  </form>
  
  </div>
        </div>
        </div>
        </div>
            
        <!-- partial -->
       
        
    @include('admin.script')
  
  </body>
</html>