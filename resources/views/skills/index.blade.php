<section class="skills d-flex justify-content-center bg-ice c-charcoal">
  <a name="skills"></a>
  <div class="container py-5">
    <h2>{{ __('title.skills')}}</h2>
    @foreach ($skills as $skill)
      <div>
        <p>{{ $skill->name}}</p>
        <div class="skills-bar">
          <div class="skill {{ $skill->color }}" style="width: {{$skill->lvl . '%'}}">{{ $skill->lvl}}%</div>
        </div>
      </div>
    @endforeach
  </div>
</section>
