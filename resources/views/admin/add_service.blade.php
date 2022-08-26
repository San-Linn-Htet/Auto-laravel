
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

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
  <div class="container-scroller">
   
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

              <form action="{{ url('upload_admin') }}" method="post" >

                @csrf

                @foreach

                <div style="padding: 15px;">

                  <label for="">Additional Service</label>

                  <select name="speciality" id="" style="color:black; width: 238px;" required="">

                    <option value="">---Service---</option>
                    <option value="car wash">Car Wash</option>
                    <option value="polishing">Premium Polishing</option>
                    <option value="repair">Car Repair</option>
                    <option value="assessment">Assessment</option>

                  </select>

                </div>

               

                <div style="padding: 15px;">

                  <input type="submit" class="btn btn-success"  >

                </div>

              </form>

          </div>

      </div>
    <!-- container-scroller -->
      @include('admin.script')
      </div>   
  </body>
</html>
