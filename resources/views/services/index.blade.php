<section class="services d-flex justify-content-center bg-ice c-charcoal">
  <a name="services"></a>
  <div class="container py-5">
    <h2>Services</h2>
    <div class="d-flex justify-content-around">
      @foreach ($services as $service)
        <div class="px-2 service">
          <h3 class="text-center"><p class="title {{$service['background']}}"><i class="fas {{$service['icon']}}"></i></p></h3>
          <p>{{ $service['text'] }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>
