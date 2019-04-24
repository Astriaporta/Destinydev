<template lang="html">
  <section class="d-flex justify-content-center">
    <div class="container py-5">
      <h2><a name="contact">Contact</a></h2>
      <div>
        <div class="input-group mt-4">
          <input type="email" name="email"
           v-validate="'required|email'" data-vv-validate-on="change|blur" :data-vv-as="'Adresse mail'"
           aria-label="Adresse mail"
           class="form-input" placeholder="Adresse mail" v-model.trim="contact.email">
           <span v-if="errors.first('email')" class="single-error">{{ errors.first('email') }}</span>
        </div>
        <div class="input-group mt-4">
          <input type="text" name="subject"
           v-validate="'required|min:4'" data-vv-validate-on="change|blur" :data-vv-as="'Sujet'"
           aria-label="Sujet"
           class="form-input" placeholder="Sujet" v-model.trim="contact.subject">
           <span v-if="errors.first('subject')" class="single-error">{{ errors.first('subject') }}</span>
        </div>
        <div class="input-group mt-4">
          <textarea name="content"
          v-validate="'required|min:4'" data-vv-validate-on="change|blur" :data-vv-as="'Contenu'"
          aria-label="Contenu"
          class="form-input" rows="4" maxlength="1000" placeholder="Contenu" v-model.trim="contact.content"></textarea>
          <span v-if="errors.first('content')" class="single-error">{{ errors.first('content') }}</span>
        </div>
        <my-captcha @me-contacter="send" :loading="loading"></my-captcha>

        <messages-box :class="[message.class]" v-if="message.isEnaled">
          <strong>{{message.type}}</strong>
          <ul>
            <li v-for="mess in message.content">{{ mess }}</li>
          </ul>
        </messages-box>
      </div>
    </div>
  </section>
</template>

<script>
import Captcha from './captcha'
import Messages from './messages'

export default {
  name: 'Contact',
  components: {
    'my-captcha': Captcha,
    'messages-box': Messages
  },
  data() {
    return {
      btnSendDis: true,
      loading: false,
      contact: {
        email: '',
        subject: '',
        content: ''
      },
      message: {
        isEnaled: false,
        class: '',
        type: '',
        content: []
      }
    };
  },
  methods: {
    isObject(obj) {
      return obj !== null && typeof obj === 'object';
    },
    isString(vrb) {
      return typeof vrb === 'string';
    },
    initContact() {
      this.contact.email = '';
      this.contact.subject = '';
      this.contact.content = '';
    },
    initMessage() {
      this.message.isEnaled = false;
      this.message.class = '';
      this.message.type = '';
      this.message.content = [];
    },
    setMessage(type, classType, message) {
      this.message.isEnaled = true;
      this.message.class = classType;
      this.message.type = type;

      if ( this.isString(message) ) {
        this.message.content.push(message);
      }

      if ( this.isObject(message) ) {
        for (let prop in message) {
          if (Array.isArray(message[prop])) {
            let i = 0,
            lenArr = message[prop].length;
            for (;i < lenArr; i++) {
              this.message.content.push(message[prop][i]);
            }
          }
          if (this.isString(message[prop])) {
            this.message.content.push(message[prop]);
          }
        }
      }
    },
    send() {
      this.$validator.validate().then(result => {
        this.initMessage();
        if (result) {
          this.loading = true;
          axios.post('/contact', this.contact).then(response => {
            this.setMessage('Réussi !', 'success', 'Message envoyé');
            this.initContact();
            this.loading = false;
          }).catch(error => {
            this.loading = false;
            if (error.response.data.errors) {
              this.setMessage('Erreur !', 'error', error.response.data.errors);
              console.error(error.data.errors);
            } else if (error.response.data.message) {
              this.setMessage('Erreur !', 'error', error.response.data.message);
              console.error(error.data.message);
            }
          });
        } else {
          this.setMessage('Erreur !', 'error', 'Certains champs sont incorect');
        }
      });
    }
  },
}
</script>
