$(function(){
  $.validator.setDefaults({
      errorClass: 'help-block',
      highlight: function(element){
        $(element).closest('.form-group').addClass('has-error');
      },
      unhighlight: function(element){
        $(element).closest('.form-group').removeClass('has-error');
      }
  });


  $("#form_val").validate({
    rules:{
      firstname:{
        required: true

      },

      lastname:{
        required: true
      },

      fathername:{
        required: true
      },

      child_lastname:{
        required: true
      },

      child_firstname:{
        required: true
      },

      afm_e:{
        required:true,
        digits:true,
        minlength:9,
        maxlength:9
      },

      afm:{
        required:true,
        digits:true,
        minlength:9,
        maxlength:9
      },

      amka:{
        required:true,
        digits:true,
        minlength:11,
        maxlength:11
      },
        username: {
          required: true
        },

        email: {
          required: true,
          email: true
        },

        password: {
          minlength: 5,
          required: true
        },

        password2: {
          required: true,
          equalTo: "#pass1"
        },

        total_earnings: {
          required:true,
          digits:true
        },

        years_of_work: {
          required:true,
          digits:true
        },

    },

    messages: {
      email: {
        required: 'Το πεδίο email είναι απαραίτητο',
        email: 'Πρακαλώ εισάγετε έγκυρη ηλεκτρονική διεύθυνση'
      },

      firstname:{
        required: 'Το πεδίο Όνομα είναι απαραίτητο'

      },

      lastname:{
        required: 'Το πεδίο Επίθετο είναι απαραίτητο'
      },

      child_firstname:{
        required: 'Το πεδίο Όνομα είναι απαραίτητο'

      },

      child_lastname:{
        required: 'Το πεδίο Επίθετο είναι απαραίτητο'
      },

      fathername:{
        required: 'Το πεδίο Πατρώνυμο είναι απαραίτητο'
      },

      afm:{
        required:'Το πεδίο Α.Φ.Μ είναι απαραίτητο',
        digits:'Το Α.Φ.Μ αποτελείται μόνο από αριθμούς',
        minlength:'Το Α.Φ.Μ έχει ακριβώς 9 ψηφία',
        maxlength:'Το Α.Φ.Μ έχει ακριβώς 9 ψηφία'
      },

      amka:{
        required:'Το πεδίο Α.Μ.Κ.Α είναι απαραίτητο',
        digits:'Το Α.Μ.Κ.Α αποτελείται μόνο από αριθμούς',
        minlength:'Το Α.Μ.Κ.Α έχει ακριβώς 11 ψηφία',
        maxlength:'Το Α.Μ.Κ.Α έχει ακριβώς 11 ψηφία'
      },

        username: {
          required:'Το πεδίο Username είναι απαραίτητο'
        },

        password: {
          minlength:'Χρησιμοποιήστε τουλάχιτον 5 χαρακτήρες',
          required:'Το πεδίο Κωδικός είναι απαραίτητο'
        },

        password2: {
          required:'Το πεδίο Επιβεβαίωση Κωδικού είναι απαραίτητο',
          equalTo: 'Οι κωδικοί δεν ταιριάζουν'
        }

        pwd: {
          minlength:'Χρησιμοποιήστε τουλάχιτον 5 χαρακτήρες',
        },

        pwd2: {
          equalTo: 'Οι κωδικοί δεν ταιριάζουν'

        }
    }

  });
});
