
@extends('admin.master')



@section('content')
{{-- <br>
<form class="print_order">
    <input class="btn btn-primary" type="button" onClick="PrintDiv();" value="Print">
</form>

<div id="divToPrint"> --}}

         <h1>Parcel Details </h1>


         <P>name: {{$parcel->name}}</P>
         <P>address: {{$parcel->address}}</P>
         <P>receiver: {{$parcel->receiver}}</P>
         <P>rec_add: {{$parcel->rec_add}}</P>
         <P>contact: {{$parcel->contact}}</P>
         <P>delivery_area: {{$parcel->delivery_area}}</P>
         <P>weight: {{$parcel->weight}}</P>
         <P>total_cost: {{$parcel->total_cost}}</P>
         <P>type: {{$parcel->type}}</P>
         <P>date: {{$parcel->date}}</P>


         <form class="print_order">
            <input class="btn btn-primary" type="button" onClick="PrintDiv();" value="Print">
        </form>

        <div id="divToPrint">



@endsection

<script language="javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=1100,height=700');
        popupWin.document.open();
        popupWin.document.write('<html><head><link href="http://127.0.0.1:8000/Backend/css/style.css" rel="stylesheet"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>

