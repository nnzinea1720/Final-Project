

<link href="{{url('//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
<script src="{{url('//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js')}}"></script>
<script src="{{url('//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="{{url('https://use.fontawesome.com/releases/v5.5.0/css/all.css')}}">
<div class="container">
    <div class="card card-login mx-auto text-center bg-dark">
        <div class="card-header mx-auto bg-dark">

                        <span class="logo_title mt-5"> Courier Service Login Dashboard </span>
<!--            <h1>--><?php //echo $message?><!--</h1>-->
<style>
body {
            background:skyblue !important;
        }
        .card {
            border: 1px solid #0fe608;
        }
        .card-login {
            margin-top: 130px;
            padding: 18px;
            max-width: 30rem;
        }

        .card-header {
            color: #fff;
            /*background: #ff0000;*/
            font-family: sans-serif;
            font-size: 20px;
            font-weight: 600 !important;
            margin-top: 10px;
            border-bottom: 0;
        }

        .input-group-prepend span{
            width: 50px;
            background-color: #ff0000;
            color: #fff;
            border:0 !important;
        }

        input:focus{
            outline: 0 0 0 0  !important;
            box-shadow: 0 0 0 0 !important;
        }

        .login_btn{
            width: 130px;
        }

        .login_btn:hover{
            color: #fff;
            background-color: #ff0000;
        }

        .btn-outline-danger {
            color: #fff;
            font-size: 18px;
            background-color: #28a745;
            background-image: none;
            border-color: #28a745;
        }

        .form-control {
            display: block;
            width: 100%;
            height: calc(2.25rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 1.2rem;
            line-height: 1.6;
            color: #28a745;
            background-color: transparent;
            background-clip: padding-box;
            border: 1px solid #28a745;
            border-radius: 0;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .input-group-text {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding: 0.375rem 0.75rem;
            margin-bottom: 0;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1.6;
            color: #495057;
            text-align: center;
            white-space: nowrap;
            background-color: #dee4eb;
            border: 1px solid #d5dfe9;
            border-radius: 0;
        }
</style>

        </div>
        <div class="card-body">
            <form action="{{route('admin.do.login')}}" method="post">
                @csrf
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="email" class="form-control" placeholder="Username">
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <div class="form-group">
                           <button type="submit" class="btn btn-danger">Login</button>
                </div>

            </form>
        </div>
    </div>
</div>
