@extends('layouts.master')

@section('title')
<title>Waste Blade</title>
@endsection
<!--sidebar-->
@include('superadmin.sidebar')
<!--sidebar-->
@section('content')
<!--start content-->
<main class="page-content">


    <div>
    <div style="text-align:center;"><h3 style="color:green; font-weight:bold; border-radius: 50px;">View All Waste List</h3></div>
        <hr>
    </div>
    <div class="d-flex">
        <div class="card bwaste shadow-none w-100">
            <div class="card-body">
                <div class="responsive-table">
                    <table id="" class="table table-striped table-bwasteed " style="width: 100%;table-layout:fixed;">
                        <thead>
                            <tr>
                                <th>Waste ID</th>
                                <th>Ingredient Name</th>
                                <th>Amount (g)</th>
                                <th>Cost</th>
                                <th>Expired Date</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $wastes = \App\Waste::orderBy('id','desc')->get();
                             
                                $total_waste=0;
                            @endphp
                            @foreach ($wastes as $waste)
                            <tr class="col-12">


                                <td> {{ $waste->id }} </td>
                                @php 
                                $ingredient = \App\Ingredient::where('id',$waste->ingredient_id)->first();
                                @endphp
                                <td> {{ $ingredient->name }} </td>
                                <td> {{ $waste->amount }} </td>
                                <td> {{ $waste->cost }} </td>
                                
                                <td>{{$waste->expire_date}}</td>
                                @php 
                                $total_waste=$total_waste + $waste->cost;
                                @endphp
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                    <br><br>
                    <div style="text-align:center;"><h2 class="btn btn-success">Monthly Waste= {{$total_waste}} TK</h2></div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--end page main-->
<script>
    const hide = () => {

        let card_body = document.querySelector('.card-body');

        if (card_body.style.display == 'none') {
            card_body.style.display = '';
        } else {
            card_body.style.display = 'none';
        }
    }
</script>
@endsection