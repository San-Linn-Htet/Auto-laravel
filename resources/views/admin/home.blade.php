
<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- <base href="/public"> -->

<!-- <style>

    label
    {
      display: inline-block;

      width: 200px;

    }

</style> -->
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
      @include('admin.body')
    <!-- container-scroller -->
      @include('admin.script')
</div>
  </body>
</html>
