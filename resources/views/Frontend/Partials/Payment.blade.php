

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

{{-- <h1 style="text-align:center;">{{auth()->User()->name}}</h1> --}}

        <table class="table">
            <thead>
            <tr>

                <th scope="col">Payment Amount</th>
                <th scope="col">Payment Method</th>
                <th scope="col">Transaction ID</th>
                <th scope="col">Payment Status</th>



            </tr>
            </thead>
            <tbody>
                    <tr>

                        <td>{{$paymentHistory->payment_amount}}</td>
                        <td>{{$paymentHistory->method}}</td>
                        <td>{{$paymentHistory->transaction}}</td>
                        <td>{{$paymentHistory->status}}</td>

                        <td>
                            {{-- <a class="btn btn-primary" href="{{route('backend.category.views',$category->id)}}">View</a> --}}
                            {{-- <a class="btn btn-primary" href="{{route('branch.update',$branch->id)}}">Update</a> --}}
                            <a href="{{route('user')}}" class="btn btn-outline-primary solid blank">Back To Home</a>

                        </td>
                    </tr>

            </tbody>
        </table>



    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
