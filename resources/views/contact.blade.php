<x-home-master>
  @section('content')

<style>
  input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing:border-box;

    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }

  input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }

  .center {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .container {
    margin: auto;
    border-radius: 5px;
    padding: 20px;
  }

  .bg-blue{
    background-color: #4e73df;
    background-image: linear-gradient(#4e73df, #224abe);
  }
</style>

<div class="row mt-5">
  <div class="row" style="color:white;">
    <div class="container text-center bg-blue">
      <div style="font-size:20px;">
          <h1 class="display-4">Contact Us</h1>
          <p>Contact us with any enquiries or questions or call +90(392) 2236464.</p>
          <p>We would happy to answer your call and our great team will be available 24/7.</p>
      </div>
    </div>
  </div>
</div>

<div class="container center" style="font-size:20px;">
  <form action="mailto:cyprusevoting@gmail.com?subject=Contact"
    target="_blank"
    method="post"
    name="Emailform">

    <div>
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name..." required>
    </div>

    <div>
      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name..." required>
    </div>

    <div>
      <label for="city">City</label>
        <select id="city" name="city">
          <option value="lefkosa">Lefkosa</option>
          <option value="girne">Girne</option>
          <option value="magusa">Magusa</option>
          <option value="lefke">Lefke</option>
          <option value="dikmen">Dikmen</option>
          <option value="lapta">Lapta</option>
          <option value="iskele">Iskele</option>
          <option value="esentepe">Esentepe</option>
    </div>

    <div>
      <textarea id="subject" name="subject" placeholder="Write your message here." style="height:200px"></textarea>
    </div>

    <div class="center">
      <input class="bg-primary" type="submit" value="Submit">
    </div>

  </form>
</div>

  @endsection
</x-home-master>