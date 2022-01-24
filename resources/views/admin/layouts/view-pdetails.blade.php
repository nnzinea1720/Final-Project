
@extends('admin.master')



@section('content')

    <div id="divToPrint">
        <br>
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
         <P> <img style="border-radius: 4px;" width="100px;" src=" {{url('/uploads/parcels/'.$parcel->image)}}" alt="image"></P>
         <P>date: {{$parcel->date}}</P>

     </div>
     <br>
        <input class="btn btn-danger" type="button" onClick="PrintDiv('divToPrint');" value="Print">



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

