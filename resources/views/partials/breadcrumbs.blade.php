@if (!$breadcrumbs->isEmpty())

    <div class="d-flex justify-content-between small-box p-1 ">
      <h1>@yield('title')</h1>
      <ol class="breadcrumb d-none d-md-inline-flex small">
          @if (count($breadcrumbs) > 1)
            @foreach ($breadcrumbs as $breadcrumb)
                @if (!is_null($breadcrumb->url) && !$loop->last)
                    <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
                @else
                    <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
                @endif
            @endforeach
          @endif
      </ol>
    </div>
@else    
    @hasSection('title')
        <div class="d-flex justify-content-between small-box p-1 ">
            <h1>@yield('title')</h1>
        </div>

    @endif
@endif