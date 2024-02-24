@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Contracts')

@section('content')
<h4>(TERMS AND CONDITION)</h4>
<h4>This Vendor Agreement is entered into on February 17, 2024 between John Doe, located at Caloocan City, Bbox Express, and Jillian Castelltort, located at Tondo, Metro Manila.</h4>
<div class="table-responsive">
  <table class="table table-lighht">
    <p>1. Services</p>
    <p>Vendor agrees to provide the following products to Company:</p>
    <thead>
      <tr>
        <th>Products</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody class="table-border-bottom-0">
      <tr>
      <td><i class="ti ti-brand-vue ti-computer-desktop"></i> <span class="fw-medium">Computer</span></td>
        <td>21,000</td>
        </tr>
        <tr>
        <td><i class="ti ti-brand-vue ti-battery-charging-2"></i> <span class="fw-medium">Charger</span></td>
        <td>500</td>
        </tr>
    </tbody>
  </table>
</div>

<h6>2. Payment </h6>
<p>In consideration for the services provided, Company agrees to pay Vendor the agreed-upon amount as outlined in Exhibit A attached hereto and incorporated herein by reference.</p>


<h6>3. Term and Termination</h6>
  <p>This Agreement shall commence on February 17, 2024 and shall continue until February 17, 2026, unless terminated earlier as provided herein. Either party may terminate this Agreement upon [Notice Period] days' written notice to the other party for any reason.</p>


<h6>4. Confidentiality</h6>
  <p>Vendor agrees to keep confidential all proprietary information provided by Company and not to disclose such information to any third party without the prior written consent of Company.</p>


<h6>5. Ownership of Work Product</h6>
<p>Any work product created by Vendor in connection with the services provided under this Agreement shall be owned exclusively by Company.</p>


<h6>6. Indemnification</h6>
  <p>Vendor agrees to indemnify and hold harmless Company from any and all claims, damages, losses, liabilities, and expenses arising out of or in connection with Vendor's performance under this Agreement.</p>

<h6>7. Governing Law</h6>
  <p>This Agreement shall be governed by and construed in accordance with the laws of Bbox Express.</p>

<h6>8. Entire Agreement</h6>
  <p>This Agreement constitutes the entire understanding and agreement between the parties with respect to the subject matter hereof and supersedes all prior agreements, whether written or oral, relating to such subject matter.</p>

<h6><p>IN WITNESS WHEREOF, the parties hereto have executed this Agreement as of the date first above written.</p>
</h6>

<H6>BBOX REXPRESS</H6>
<p>John Doe, CEO</p>

<h6>ABC VENDOR CO.</h6>
<p>Jillian Castelltort, Managing Director</p>

@endsection
