

<!DOCTYPE html>
<html lang="en">
<h1>
    <meta charset="utf-8">


    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">








</h1>
<body>

    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
              <div class="col-md-6 offset-md-3">
                  <div class="card">
                      <div class="card-header">
                         Tracking No
                      </div>
                      <div class="card-body">
                        <form action="{{route('user.tracking.show')}}" method="get" >
                            @csrf

                            <div class="form-group">
                              <br><label for="exampleInputPassword1">Enter Tracking No</label><br>
                              <input type="number" class="form-control" id="fname" name="no"placeholder="Enter Tracking No ">
                            </div>
                             <br>
                            <button type="submit" class="btn btn-outline-primary">Track</button>
                            <a href="{{route('user')}}" class="btn btn-outline-danger solid blank">Back To Home</a>
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
