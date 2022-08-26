
<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">

    <style>

        label
        {
          display: inline-block;

          width: 200px;

        }

    </style>

    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>

  <div class="container-scroller">
    
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            
            <div class="container" align="center" style="padding: 100px;">

            @if(session()->has('message'))

              <div class="alert alert-success">

                <button type="button" class="close" width="300px" data-dismiss="alert">
                  x
                </button>

                {{session()->get('message')}}

              </div>

            @endif

              <form action="{{url('edituser', $data->id)}}" method="POST" enctype="multipart/form-data">

              @csrf

                <div style="padding: 15px;">
                  <label for="">User Name</label>
                  <input type="text" style="color: black;" name="name" value="{{$data->name}}">
                </div>
                <div style="padding: 15px;">
                  <label for=""> Phone</label>
                  <input type="text" style="color: black;" name="phone" value="{{$data->phone}}">
                </div>
                <div style="padding: 15px;">
                  <label for="">Old Image</label>
                  <img src="updateimage/{{$data->image}}" height="100" width="100" alt="">
                </div>
                <div style="padding: 15px;">
                  <label for="">Change Image</label>
                  <input type="file" name="file">
                </div>
                <div style="padding: 15px;">
                  
                  <input type="submit" class="btn btn-primary">
                </div>
              </form>

            </div>
            

        </div>
    <!-- container-scroller -->
      @include('admin.script')
      </div> 
  </body>
</html>
