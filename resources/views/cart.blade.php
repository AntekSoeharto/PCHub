@extends('layouts.main')
@section('container')
<div class="container-md mt-3">
    <div class="table-responsive">
        <table class="table table-dark table-striped">
            <thead>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Actiion</th>
            </thead>
            @foreach ($orders as $order)
                @foreach ($order->DetailOrder as $detail_order)
                    <tbody>
                        <th schope="row">{{ $loop->iteration }}</th>
                        <th>{{ $detail_order->Product->name }}</th>
                        <th>{{ $detail_order->quantity }}</th>
                        <th>{{ $detail_order->price }}</th>
                    </tbody>
                @endforeach
            @endforeach
        </table>
        <form action="/gotopayment" method="post">
            <div class="konten-beli">
                <button type="button" class="btn btn-primary">Bayar</button>
            </div>
        </form>
    </div>
</div>
@endsection