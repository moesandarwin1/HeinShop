@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
    <div class="my-5">
        <h1 class="mt-4 d-inline">Payments</h1>
        <a href="{{route('backend.payments.create')}}" class="btn btn-primary float-end">Create Payments</a>
    </div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Payments</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Posts Lists
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Logo</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Logo</th>
                        <th>#</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach($payments as $payment)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$payment->name}}</td>
                            <td><img src="{{$payment->logo}}" width="50" height="50" alt=""></td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning">Edit</a>
                                <a href="" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection