{{-- alert popup message --}}
@if (session('alert-message'))
  <div id="popup_message" class="d-none" data-type="{{ session('alert-type') }}" data-message="{{ session('alert-message') }}"></div>
@endif