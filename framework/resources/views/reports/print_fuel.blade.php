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
  <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
          <span class="logo-lg">
          <img src="{{ asset('assets/images/'. ayoubgr::get('icon_img') ) }}" class="navbar-brand" style="margin-top: -15px">
          {{  ayoubgr::get('app_name')  }}
          </span>

            <small class="pull-right"> <b>@lang('fleet.date') : </b> {{date($date_format_setting)}}</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <h3>@lang('fleet.fuelReport')&nbsp;<small>@if($month_select != 0){{date('F', mktime(0, 0, 0, $month_select, 10))}}-@endif{{$year_select}}</small></h3>
          <h4>{{$vehicle->maker['make']}}-{{$vehicle->vehiclemodel['model']}}-{{$vehicle['license_plate']}}</h4>

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table table-bordered table-striped table-hover">
            <thead>
              <th>@lang('fleet.date')</th>
              <th>@lang('fleet.vehicle')</th>
              <th>@lang('fleet.meter')</th>
              <th>@lang('fleet.qty')</th>
              <th>@lang('fleet.consumption')</th>
              <th>@lang('fleet.cost')</th>
            </thead>

            <tbody>
            @foreach($fuel as $f)
            <tr>
              <td>{{date($date_format_setting,strtotime($f->date))}}</td>
              <td>{{$f->vehicle_data->maker->make}}-{{$f->vehicle_data->vehiclemodel->model}}-{{$f->vehicle_data->license_plate}}</td>
              <td>
                <b> @lang('fleet.start'): </b>{{$f->start_meter}} {{ayoubgr::get('dis_format')}}
                <br>
                <b> @lang('fleet.end'):</b>{{$f->end_meter}} {{ayoubgr::get('dis_format')}}
              </td>
              <td>
								{{ $f->qty }}
							</td>
              <td>{{$f->consumption}}
                @if(ayoubgr::get('dis_format') == "km")
                 @if(ayoubgr::get('fuel_unit') == "gallon")KMPG @else KMPL @endif
                @else
                 @if(ayoubgr::get('fuel_unit') == "gallon")MPG @else MPL @endif
                @endif
              </td>
              <td>{{ayoubgr::get('currency')}} {{$f->qty * $f->cost_per_unit}}</td>
            </tr>
            @endforeach

            </tbody>

          </table>
        </div>
      </div>
    </section>
  </div>
<!-- ./wrapper -->
</body>
</html>