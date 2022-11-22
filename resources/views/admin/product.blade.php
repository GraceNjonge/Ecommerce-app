<x-app-layout>
    
 </x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
<style  type="text/css">
    .title
    {
        color: white;
        padding-top: 25px; font-size: 25px;
        
    }
    label{
    display: inline-block;
        width: 200px;
    }
    .form{

    }
    </style>
  </head>
  <body>
          <!-- partial -->

  @include('admin.sidebar')

      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
            <h1 class="title">Add Product</h1>
 <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">
 @csrf 
 <div  style="padding:15px;">
    <label>Product  Title</label>
    <input style="color:black;" type="text" name="title" placeholder="Give Product Title" required=""/>
    </div>

    <div  style="padding:15px;">
    <label>Price</label>
    <input style="color:black;" type="number" name="Price" placeholder=" price" required=""/>
    </div>

    <div  style="padding:15px;">
    <label>Description</label>
    <input style="color:black;" type="text" name="Description" placeholder="Description" required=""/>
    </div>
    <div  style="padding:15px;">
    <label>Quantity</label>
    <input style="color:black;" type="text" name="Quantity" placeholder="Quantity" required=""/>
    </div>
    <div  style="padding:15px;">
    <input  type="file"  name="file"/>
    </div>

    <div  style="padding:15px;">
 <input class="btn  btn-success" type="submit">
    </div>


</form>
</div>
</div>

          <!-- partial -->
          @include('admin.script')

  </body>
</html>