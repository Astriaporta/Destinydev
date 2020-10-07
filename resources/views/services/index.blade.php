<section class="services d-flex justify-content-center bg-ice c-charcoal">
  <a name="services"></a>
  <div class="container py-5">
    <h2>{{ __('title.services')}}</h2>
    <div class="d-flex justify-content-around">
      @foreach ($services as $service)
        <div class="px-2 service">
          <div class="title {{$service->background}}"><i class="fas {{$service->icon}}"></i></div>
          <p class="service-content">{{ $service->text }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>
