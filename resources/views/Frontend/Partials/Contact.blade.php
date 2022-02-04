

<!DOCTYPE html>
<html lang="en">
<h1>
    <meta charset="utf-8">


    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title> Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">





  <div id="banner-area" class="banner-area" style="background-image:url(/frontend/images/banner/banner1.jpg)">
    <div class="banner-text">
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <div class="banner-heading">
                  <h1 class="banner-title">Contact</h1>
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Company</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                      </ol>
                  </nav>
                </div>
            </div><!-- Col end -->
          </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Banner text end -->
  </div><!-- Banner area end -->


</h1>
<body>
    <section style="padding-top:60px;">
        <a style="margin-left:20px;" href="{{route('user')}}" class="btn btn-outline-primary solid blank" type="back">Back To Home</a>

        <div class="container">
            <div class="row">
              <div class="col-md-6 offset-md-3">
                  <div class="card">
                      <div class="card-header">
                          Contact
                      </div>
                      <div class="card-body">
                          <form action="{{route('contact.create.store')}}" method="post">
                            @csrf
                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Name</label>
                                    <input type="text" class="form-control" id="fname" name="name" placeholder="Enter your name">
                                  </div>
                                <div class="form-group">
                                  <label for="exampleFormControlInput1">Email address</label>
                                  <input type="email" class="form-control" id="fname" name="email" placeholder="name@example.com">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Phone</label>
                                    <input type="phone" class="form-control" id="fname" name="phone" placeholder="Enter Your Name">
                                  </div>

                                <div class="form-group">
                                  <label for="exampleFormControlTextarea1">Message</label>
                                  <textarea type="text" class="form-control" id="text" name="message" rows="10"></textarea>
                                </div>


                          <div class="text-right"><br>
                            <button class="btn btn-outline-success solid blank" type="submit">Send Message</button>
                          </div>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>



    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
