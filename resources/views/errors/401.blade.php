@extends('errors::illustrated-layout')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('No tienes permisos para acceder a esta página'))
