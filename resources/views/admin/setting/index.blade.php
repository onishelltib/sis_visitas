@extends('admin.layouts.master')

@section('main-content')

    <section class="section">
        <div class="section-header">
            <h1>{{ __('Opciones') }}</h1>

            @yield('admin.setting.breadcrumbs')
        </div>
    </section>

    <div class="row">
        <div class="col-md-3">
            <div class="bg-light card">
                <div class="list-group list-group-flush">
                    <a href="{{ route('admin.setting.index') }}" class="list-group-item list-group-item-action {{ (request()->is('admin/setting')) ? 'active' : '' }} ">{{ __('Opciones del Sitio') }}</a>
                    <a href="{{ route('admin.setting.sms') }}" class="list-group-item list-group-item-action {{ (request()->is('admin/setting/sms')) ? 'active' : '' }}">{{ __('Opciones SMS') }}</a>
                    <a href="{{ route('admin.setting.email') }}" class="list-group-item list-group-item-action {{ (request()->is('admin/setting/email')) ? 'active' : '' }}">{{ __('Opciones de Email') }}</a>
                    <a href="{{ route('admin.setting.notification') }}" class="list-group-item list-group-item-action {{ (request()->is('admin/setting/notification')) ? 'active' : '' }}">{{ __('Opciones de Notificaciones') }}</a>
                    <a href="{{ route('admin.setting.email-template') }}" class="list-group-item list-group-item-action {{ (request()->is('admin/setting/emailtemplate')) ? 'active' : '' }}">{{ __('Opciones de Email y SMS') }}</a>
                    <a href="{{ route('admin.setting.homepage') }}" class="list-group-item list-group-item-action {{ (request()->is('admin/setting/homepage')) ? 'active' : '' }}">{{ __('Opciones de pantalla de Inicio') }}</a>
                </div>
            </div>
        </div>

        @yield('admin.setting.layout')
    </div>

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('js/setting/create.js') }}"></script>
@endsection
