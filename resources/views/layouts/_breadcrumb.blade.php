
@if(!empty('breadcrumbs'))
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      @foreach ( $breadcrumbs['links'] as $link)
        @if($link['active'])
          <li class="breadcrumb-item active">{{ $link['text'] }}</li>
        @else
          <li class="breadcrumb-item" ><a href="{{ $link['href'] }}">{{ $link['text'] }}</a></li>
        @endif
      @endforeach
    </ol>
  </nav>
  @endif