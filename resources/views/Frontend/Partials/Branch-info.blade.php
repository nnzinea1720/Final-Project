

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

<div class="container">

    <div style="padding: 25px;">

        <h1></h1>

             <a href="{{route('user')}}" class="btn btn-outline-primary solid blank">Back To Home</a>


    <h3 style="text-align: center; font-weight: bold; margin-bottom: 20px;">Branch Information</h3>

<table class="table">
    <thead>
    <tr>
        <th scope="col" style="font-size: 20px;">#</th>
        <th scope="col" style="font-size: 20px;">Division</th>
        <th scope="col"style="font-size: 20px;" >District</th>
        <th scope="col"style="font-size: 20px;" >Branch Name</th>
        <th scope="col"style="font-size: 20px;" >Branch Id</th>
        <th scope="col"style="font-size: 20px;" >Address</th>
        <th scope="col"style="font-size: 20px;" >Contact</th>


    </tr>
    </thead>
    <tbody>
        @foreach ($branchs as $key=>$branch)
            <tr>
                <td style="font-size: 20px;">{{$key}}</td>
                <td style="font-size: 20px;">{{$branch->division}}</td>
                <td style="font-size: 20px;">{{$branch->district}}</td>
                <td style="font-size: 20px;">{{$branch->office}}</td>
                <td style="font-size: 20px;">{{$branch->number}}</td>
                <td style="font-size: 20px;">{{$branch->address}}</td>
                <td style="font-size: 20px;">{{$branch->contact}}</td>

            </tr>
        @endforeach

    </tbody>
</table>
</div>

</div>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>


