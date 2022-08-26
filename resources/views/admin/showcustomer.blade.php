
<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- <base href="/public"> -->

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

            <div align="center" style=" padding: 100px;">

            <table >
                    <tr style="background-color:  black;">
                        <th style=" padding: 10px;">Date</th>
                        <th style=" padding: 10px;">Customer Name</th>
                        <th style=" padding: 10px;">Email</th>
                        <th style=" padding: 10px;">Car Number</th>
                        <th style=" padding: 10px;">Services</th>
                        <th style=" padding: 10px;">Duration</th>
                        <th style=" padding: 10px;">Delete</th>
                        
                        
                    </tr>

                    @foreach($data as $users)

                    <tr align="center" style="background-color: skyblue;">
                        <td>{{$users->date}}</td>
                        <td>{{$users->name}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->number}}</td>
                        <td>{{$users->services}}</td>
                        <td>{{$users->duration}}</td>
                        <td><a onclick="return comfirm('Are you sure to delete this')" class="btn btn-danger" href="{{url('deletecustomer', $bookings->id)}}">Delete</a></td>
                        </tr>
                        
                    

                    @endforeach

            </table>
            <a onclick="return" class="btn btn-white" href="{{url('update_customer', $bookings->id)}}">Add</a>

            </div>

        </div>
    <!-- container-scroller -->
      @include('admin.script')
</div>   
  </body>
</html>
