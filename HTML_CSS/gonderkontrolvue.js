new Vue({
  el: '#controlform',
  data: {
    name: '',
    mail: '',
    gender: '',
    classes: [],
    school: '',
    explanation: '',
    shortContent: ''
  },
  methods: {
    checkForm() {
      if (!this.name || !this.mail || !this.gender || !this.shortContent || !this.explanation || !this.class || !this.school) {
        alert('Lütfen tüm alanları doldurun!');
        return;
      }

      console.log('Form gönderildi!');
    }
  }
});
