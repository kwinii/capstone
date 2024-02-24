@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Products and Services')

@section('content')
<h4>Products Available</h4>
<div class="table-responsive">
  <table class="table table-lighht">
    <thead>
      <tr>
        <th>Products</th>
        <th>Price</th>
        <th>Stocks</th>
      </tr>
    </thead>
    <tbody class="table-border-bottom-0">
      <tr>
      <td><i class="ti ti-brand-vue ti-device-desktop"></i> <span class="fw-medium">Computer</span></td>
        <td>21,000</td>
        </tr>
        <tr>
        <td><i class="ti ti-brand-vue ti-device-laptop"></i> <span class="fw-medium">Laptop</span></td>
        <td>500</td>
        </tr>

    </tbody>
  </table>
</div>
@endsection
