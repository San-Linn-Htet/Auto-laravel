
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

            <div align="center" style=" padding: 100px;">

            <table >
                    <tr style="background-color:  black;">
                        <th style=" padding: 10px;">User Name</th>
                        <th style=" padding: 10px;">Email</th>
                        <th style=" padding: 10px;">Phone</th>
                        <th style=" padding: 10px;">Image</th>
                        <th style=" padding: 10px;">Delete</th>
                        <th style=" padding: 10px;">Update</th>
                        
                    </tr>

                    @foreach($data as $users)

                    <tr align="center" style="background-color: skyblue;">
                        <td>{{$users->name}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->phone}}</td>
                        <!-- <td>{{$users->services}}</td> -->
                        <!-- <td>{{$users->room}}</td> -->
                        <td><img src="doctorimage/{{$doctors->image}}" alt="" height="100" width="100"></td>
                        <td><a onclick="return comfirm('Are you sure to delete this')" class="btn btn-danger" href="{{url('deleteuser', $users->id)}}">Delete</a></td>
                        </tr>
                        <td><a class="btn btn-success"  href="{{url('update_user', $users->id)}}">Update</a></td>
                        </tr>
                    

                    @endforeach

            </table>

            </div>

        </div>
    <!-- container-scroller -->
      @include('admin.script')
  </div>
  </body>
</html>
