@extends('admin.master')



@section('content')
 <div id="divToPrint">
        <br>
         <h1>Booking Parcel </h1>


         <P>name: {{$list->name}}</P>
         <P>address: {{$list->address}}</P>
         <P>phone: {{$list->phone}}</P>
         <P>weight: {{$list->weight}}</P>
         <P>type: {{$list->type}}</P>
         <P>track_number: {{$list->track_number}}</P>
         <P> <img style="border-radius: 4px;" width="100px;" src=" {{url('/uploads/bookings/'.$list->image)}}" alt="image"></P>
         <P>receiver: {{$list->receiver}}</P>
         <P>rec_add: {{$list->rec_address}}</P>
         <P>contact: {{$list->contact}}</P>
         <P>delivery_area: {{$list->delivery_area}}</P>
         <P>total_cost: {{$list->total_cost}}</P>
         <P>date: {{$list->date}}</P>

    </div>
        <br>
           <input class="btn btn-warning" type="button" onClick="PrintDiv('divToPrint');" value="Print">




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
