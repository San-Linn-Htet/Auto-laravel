
<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Booking</h1>

      <form class="main-form" action="{{url('booking')}}" method="POST">

        @csrf

        <!-- @method('PUT') -->

        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Customer">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
           
            <input type="text" name="email"  class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="departement" class="custom-select">

              <option value="">---Additional Services---</option>

            @foreach($admin as $admins)


              <option value="{{$admins->name}}">{{$admins->services}}</option>

            @endforeach
              
            </select>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="number" name="day" class="form-control" max="30" min="1" placeholder="Day" default="">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="number" class="form-control" placeholder="Car Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="messsage" id="message" class="form-control" rows="6" placeholder="notes"></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
  </div> <!-- .page-section -->

