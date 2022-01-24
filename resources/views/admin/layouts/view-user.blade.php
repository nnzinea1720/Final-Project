
@extends('admin.master')



@section('content')
<div id="divToPrint">
         <br>
         <h1>User List</h1>


         <P>name: {{$users-> name}}</P>
         <P>email: {{$users-> email}}</P>
         <P>password: {{$users-> password}}</P>
         <P>mobile: {{$users-> mobile}}</P>

        </div>
        <br>
        <input class="btn btn-success" type="button" onClick="PrintDiv('divToPrint');" value="Print">

@endsection

<script language="javascript">
    function PrintDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

