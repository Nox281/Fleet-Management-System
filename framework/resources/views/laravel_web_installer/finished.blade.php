@extends('layouts.master')

@section('title', trans('installer_messages.final.title'))
@section('container')
    <p class="paragraph" style="text-align: center;">
    THANK YOU | <a style="color:red;" href="https://cutt.ly/PLFZenO" target="_blank">NULLED Web Community</a>
	</p>
    <div class="buttons">
        <a href="{{ url('admin/') }}" class="button">{{ trans('installer_messages.final.exit') }}</a>
    </div>
@stop
