<div class="card-header p-0 d-flex justify-content-end">

  @if (!empty($items) && count($items))
    <!-- items per page -->
    <div class="mr-auto p-2 d-flex align-items-center">
        <span>Elementi per pagina&nbsp;</span>
        <form>
            <select id="itemperpage" class="form-control form-control-sm" >
                <option value="5" @if($ipp == 5) selected @endif >5</option>
                <option value="10" @if($ipp == 10) selected @endif >10</option>
                <option value="25" @if($ipp == 25) selected @endif >25</option>
                <option value="50" @if($ipp == 50) selected @endif >50</option>
            </select>
        </form>
        <script>
            document.getElementById('itemperpage').onchange = function() { 
                window.location = "{!! $items->url(1) !!}&ipp=" + this.value + "&search=" + document.getElementById('search').value; 
            };
        </script>                    
    </div>
    <!-- search bar -->
    <div class="mr-auto p-2 d-flex flex-fill align-items-center">
        <div class="input-group input-group-sm ">
            <input id="search" type="text" class="form-control" value="{{ $search }}" placeholder="cerca ..." >
            <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="gosearch"><i class="fa fa-search"></i></button>
            </div>
        </div>
        <script>
            document.getElementById('gosearch').onclick = function() { 
                window.location = "{!! $items->url(1) !!}&ipp=" + document.getElementById('itemperpage').value + "&search=" + document.getElementById('search').value; 
            };
        </script>                    
    </div>
  @endif
    
  <div class="p-2 d-flex">
    {!! $items->appends(\Request::except('page'))->render() !!}&nbsp;<a class="btn btn-sm btn-info" href="{{ $addroute }}"><i class="fas fa-plus"></i>&nbsp;{{ $addlabel }}</a>
  </div>
</div>