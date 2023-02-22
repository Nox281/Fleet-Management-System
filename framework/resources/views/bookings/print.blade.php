<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ayoubgr::get('app_name')}}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
 <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/cdn/bootstrap.min.css')}}" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/css/cdn/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link href="{{ asset('assets/css/cdn/ionicons.min.css')}}" rel="stylesheet">
  <!-- Theme style -->
   <link href="{{ asset('assets/css/AdminLTE.min.css') }}" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="{{ asset('assets/css/cdn/fonts.css')}}">
  <style type="text/css">
    body {
      height: auto;
    }
    @media print{@page {size: landscape}}
  </style>
</head>
<body onload="window.print();">
@php($date_format_setting=(ayoubgr::get('date_format'))?ayoubgr::get('date_format'):'d-m-Y')

  <div class="wrapper">
    <section class="invoice">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <span class="logo-lg">
              <img src="{{ asset('assets/images/'. ayoubgr::get('icon_img') ) }}" class="navbar-brand" style="margin-top: -15px">
              {{  ayoubgr::get('app_name')  }}
            </span>
              <small class="pull-right"> <b>@lang('fleet.date') : </b>{{ date($date_format_setting,strtotime($i->booking_income->date)) }}</small>
          </h2>
        </div>
      </div>
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          <b>From</b>
          <address>
           {{ayoubgr::get('badd1')}}
           <br>
           {{ayoubgr::get('badd2')}}
           <br>
           {{ayoubgr::get('city')}},

           {{ayoubgr::get('state')}}
           <br>
           {{ayoubgr::get('country')}}
          </address>
        </div>
        <div class="col-sm-4 invoice-col">
         <b> To</b>
          <address>
            {!! nl2br(e($booking->customer->getMeta('address'))) !!}
          </address>
        </div>

        <div class="col-sm-4 invoice-col">
          <b>Invoice#</b>
               {{ $i['income_id'] }}
          <br>
          <b>{{ $booking->customer->name }}</b>
        </div>

      </div>

      <div class="row">
        <div class="col-sm-6 invoice-col">
         <strong> @lang('fleet.pickup_addr'):</strong>
          <address>
           {{$booking->pickup_addr}}
           <br>
           @lang('fleet.pickup'):
          <b> {{date($date_format_setting.' g:i A',strtotime($booking->pickup))}}</b>
          </address>
        </div>

        <div class="col-sm-6 invoice-col">
          <strong>@lang('fleet.dropoff_addr'):</strong>
          <address>
            {{$booking->dest_addr}}
            <br>
            @lang('fleet.dropoff'):
            <b>{{date($date_format_setting.' g:i A',strtotime($booking->dropoff))}}</b>
          </address>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6">
          @if(ayoubgr::get('invoice_text') != null)
          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
           {{ayoubgr::get('invoice_text')}}
          </p>
          @endif
        </div>
        <div class="col-xs-6 pull-right">
          <p class="lead"></p>
          <div class="table-responsive">
            <table class="table">
               @if($booking->vehicle_id != null)
              <tr>
                <th style="width:50%">@lang('fleet.vehicle'):</th>
                <td> {{$booking->vehicle->maker['make']}} - {{$booking->vehicle->vehiclemodel['model']}} - {{$booking->vehicle['license_plate']}}</td>
              </tr>
              @endif
              @if($booking->driver_id != null)
              <tr>
                <th>@lang('fleet.driver'):</th>
                <td>{{ $booking->driver->name }}</td>
              </tr>
              @endif
              <tr>
                <th>@lang('fleet.mileage'):</th>
                <td>{{ $i->booking_income->mileage }} {{ ayoubgr::get('dis_format') }}</td>
              </tr>
              <tr>
                <th>@lang('fleet.waitingtime'):</th>
                <td>
                {{ $booking->getMeta('waiting_time') }}
                </td>
              </tr>
              <tr>
                <th>@lang('fleet.amount'):</th>
                <td>{{ ayoubgr::get('currency') }} {{ $booking->total }} </td>
              </tr>
              <tr>
                <th>@lang('fleet.total_tax') (%) :</th>
                <td>{{ ($booking->total_tax_percent) ? $booking->total_tax_percent : 0 }} %</td>
              </tr>
              <tr>
                <th>@lang('fleet.total') @lang('fleet.tax_charge') :</th>
                <td>{{ ayoubgr::get('currency') }} {{ ($booking->total_tax_charge_rs) ? $booking->total_tax_charge_rs : 0 }} </td>
              </tr>
              <tr>
                <th>@lang('fleet.total'):</th>
                <td>{{ ayoubgr::get('currency') }} {{ $i->booking_income->amount }}</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
</html>