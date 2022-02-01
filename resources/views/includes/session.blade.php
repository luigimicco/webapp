@if(session('alert'))
<div class="alert alert-{{session('alert')}}">
  <strong>{{session('alert-message')}}</strong>
</div>
@endif