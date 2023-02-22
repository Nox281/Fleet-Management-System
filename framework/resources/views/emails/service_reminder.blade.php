@component('mail::message')
# Service Reminder

Dear {{$user}},

{!! ayoubgr::email_msg('service_reminder') !!}
@php($date_format_setting=(ayoubgr::get('date_format'))?ayoubgr::get('date_format'):'d-m-Y')

	Vehicle: {{$vehicle}}
	Service Item: {{$detail}}
	Next due date: {{date($date_format_setting,strtotime($date))}}
	Remaining days: {{$diff_in_days}}



Thanks,<br>
{{ config('app.name') }}
@endcomponent
