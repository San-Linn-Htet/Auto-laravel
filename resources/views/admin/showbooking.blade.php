
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

            <div align="center" style=" padding-top: 100px;">

                <table >
                    <tr style="background-color:  black;">
                      <th style=" padding: 10px;">Date</th>
                        <th style=" padding: 10px;">Customer Name</th>
                        <th style=" padding: 10px;">Email</th>
                        <th style=" padding: 10px;">Car Number</th>
                        <th style=" padding: 10px;">Additional Services</th>
                        <th style=" padding: 10px;">Duration</th>
                        <th style=" padding: 10px;">Notes</th>
                        <th style=" padding: 10px;">Status</th>
                        <th style=" padding: 10px;">Approved</th>
                        <th style=" padding: 10px;">Canceled</th>
                        <th style=" padding: 10px;">Send Mail</th>
                    </tr>

                    @foreach($data as $booking)

                    <tr align="center" style="background-color:skyblue;">
                      <td>{{$booking->date}}</td>
                        <td>{{$booking->name}}</td>
                        <td>{{$booking->email}}</td>
                        <td>{{$booking->number}}</td>
                        <td>{{$booking->services}}</td>
                        <td>{{$booking->duration}}</td>
                        <td>{{$booking->notes}}</td>
                        <td>{{$booking->status}}</td>
                        
                        <td>
                          <a href="{{url('approved',$appoint->id)}}" class="btn btn-success">Approved</a>
                        </td>

                        <td>
                          <a href="{{url('canceled',$appoint->id)}}" class="btn btn-danger">Canceled</a>
                        </td>

                        <td>
                          <a href="{{url('emailview',$appoint->id)}}" class="btn btn-primary">Send Mail</a>
                        </td>

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
