@component('mail::message')
# Renew Vehicle Licence

Dear {{$user}},

	@php   ($to = \Carbon\Carbon::now())
    @php ($from = \Carbon\Carbon::createFromFormat('Y-m-d', $lic_date))
    @php ($diff_in_days = $to->diffInDays($from))


{!! ayoubgr::email_msg('vehicle_licence') !!}
@php($date_format_setting=(ayoubgr::get('date_format'))?ayoubgr::get('date_format'):'d-m-Y')

 	Vehicle: {{$vehicle}}
	Vehicle Expiry date: {{date($date_format_setting,strtotime($lic_date))}}
    Remaining days: {{$diff_in_days}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
