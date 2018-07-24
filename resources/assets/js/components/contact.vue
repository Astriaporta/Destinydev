<template lang="html">
  <section id="contact" class="d-flex justify-content-center">
    <div class="container py-5">
      <h2>Contact</h2>
      <div>
        <div class="input-group mt-4">
          <input type="email" name="email" class="form-input" placeholder="Adresse mail" v-model.trim="contact.email" required>
        </div>
        <div class="input-group mt-4">
          <input type="text" name="subject" class="form-input" placeholder="Sujet" v-model.trim="contact.subject" required>
        </div>
        <div class="input-group mt-4">
          <textarea name="contenue" class="form-input" rows="4" maxlength="1000" placeholder="Contenu" v-model.trim="contact.content"></textarea>
        </div>
        <my-captcha v-on:me-contacter="send" v-if=""></my-captcha>

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
  data() {
    return {
      btnSendDis: true,
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
  computed: {
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
        console.log(typeof message);
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
      this.initMessage();

      this.axios.post('/contact', this.contact).then(response => {
        this.setMessage('Réussi !', 'success', 'Message envoyé');
        this.initContact();
      }).catch(error => {
        this.setMessage('Erreur !', 'error', error.response.data.errors);
        if(error.code == 422){
            console.log(error.data);
        }
      });
    }
  },
  components: {
    'my-captcha': Captcha,
    'messages-box': Messages
  }
}
</script>
