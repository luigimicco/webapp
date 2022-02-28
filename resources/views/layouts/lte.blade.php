@extends('adminlte::page')

@section('about')
    <x-adminlte-modal id="modalCustom" title="Info su .." size="lg" theme="teal"
    icon="fas fa-info" v-centered static-backdrop scrollable>
    <div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>            
    </div>
    <x-slot name="footerSlot">
        <x-adminlte-button theme="success" label="Chiudi" data-dismiss="modal"/>
    </x-slot>
    </x-adminlte-modal>
@stop

@section('footer')
    <div class="d-flex justify-content-between">
        <div class="flex-grow-1">
            Copyright © 2022 <strong>@yield('copyright', config('adminlte.copyright', ''))</strong>. All rights reserved.
        </div>
        <div>
            <strong>Version&nbsp;</strong>@yield('version', config('adminlte.version', '0.0.0'))
        </div>
    </div>
@stop