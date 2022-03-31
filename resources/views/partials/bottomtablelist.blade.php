@if (!empty($items) && count($items))
  <div class="card-footer text-right p-2">
      {{$items->count()}} elementi di {{ $items->total() }}
  </div>  
@endif 