<section class="h-100">
  <a name="top"></a>
  <div class="h-100 d-flex flex-column justify-content-between">
    <div class="h-100  d-flex flex-column justify-content-center text-center">
      <h1 class="main-title">{{ config('app.name', 'Destinydev') }}</h1>
      <div class="second-title">{{ __('title.main.sub')}}</div>
      <div class="mb-1 mt-2 mr-3">
        <ul class="d-flex justify-content-center mt-4 social">
          @foreach ($links as $link)
            @if ($link->displayed)
              <li class="">
                <a href="{{ $link->url }}" title="{{ $link->name }}" rel="noopener" target="_blank">
                  <i class="fab {{ $link->icon }} fa-lg"></i>
                </a>
              </li>
            @endif
          @endforeach
        </ul>
      </div>
    </div>
    <div class="text-center">
      En savoir plus
      <div class="my-4">
        <a href="#services" class="see-more" aria-label="En savoir plus">
          <i class="fa fa-angle-down"></i>
        </a>
      </div>
    </div>
  </div>
</section>
