
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">

    <style type="text/css">
        label
        {
          display: inline-block;

          width: 200px;
        }
    </style>

    @include('admin.css')

  </head>
  <body>
 
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      
      @include('admin.navbar')
        <!-- partial -->
      <div class="container-fluid page-body-wrapper">

     

          <div class="container" align="center" style="padding-top: 100px;">

            @if(session()->has('message'))

              <div class="alert alert-success">

                <button type="button" class="close" width="300px" data-dismiss="alert">
                    x
                </button>

                {{session()->get('message')}}

              </div>

            @endif

              <form action="{{ url('sendemail',$data->id) }}" method="post" enctype="multipart/form-data">

                @csrf

                <div style="padding: 15px;">
                  <label for="">Greeting</label>
                  <input type="text" style="color:black" name="greeting"  required="">
                </div>

                <div style="padding: 15px;">
                  <label for="">Body</label>
                  <input type="text" style="color:black" name="body" required="">
                </div>

                

                <div style="padding: 15px;">

                  <label for="">Action Text</label>
                  <input type="text" style="color:black" name="actiontext" required="">

                </div>

                <div style="padding: 15px;">

                  <label for="">Action Url</label>
                  <input type="text" style="color:black" name="actionurl" required="">

                </div>       

                <div style="padding: 15px;">

                  <input type="submit" class="btn btn-success"  >

                </div>

              </form>

          </div>

      </div>
    <!-- container-scroller -->
      @include('admin.script')
  </body>
</html>
