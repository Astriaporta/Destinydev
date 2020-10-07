<section class="d-flex justify-content-center">
    <div class="container py-5">
      <h2><a name="contact">Contact</a></h2>
      <div>
        <form action="/contact" method="post" id="contact_form">
          @csrf
          <div class="input-group mt-4">
            <input type="email" name="email"
             aria-label="Adresse mail"
             value="{{old('email')}}" 
             class="form-input" placeholder="Adresse mail">
          </div>
          <div class="input-group mt-4">
            <input type="text" name="subject"
             aria-label="Sujet"
             value="{{old('subject')}}" 
             class="form-input" placeholder="Sujet">
          </div>
          <div class="input-group mt-4">
            <textarea name="content"
            aria-label="Contenu"
             value="{{old('content')}}" 
            class="form-input" rows="4" maxlength="1000" placeholder="Contenu"></textarea>
          </div>
          {!! NoCaptcha::display() !!}
          <button class="btn">send</button>
        </form>
      </div>
    </div>
  </section>
