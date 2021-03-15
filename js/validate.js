
  
      // Form validation code will come here.
      function validate() {
      
         if( document.contactForm.fname.value == "" ) {
            alert( "Please provide your first name!" );
            document.contactForm.fname.focus() ;
            return false;
         }
          if( document.contactForm.lname.value == "" ) {
            alert( "Please provide your last name!" );
            document.contactForm.lname.focus() ;
            return false;
         }
         if( document.contactForm.EMail.value == "" ) {
            alert( "Please provide your Email!" );
            document.contactForm.EMail.focus() ;
            return false;
         }
         if( document.contactForm.Phone.value == "" || isNaN( document.contactForm.Phone.value ) ||
            document.contactForm.Phone.value.length != 12 ) {
            
            alert( "Please provide your 11 digit Phone number in the format ###########." );
            document.contactForm.Phone.focus() ;
            return false;
         }
         if( document.contactForm.Country.value == "-1" ) {
            alert( "Please provide your country!" );
            return false;
         }
          if( document.contactForm.Subject.value == "" ) {
            alert( "Please write your information in the text box!" );
            document.contactForm.Subject.focus() ;
            return false;
         }
         return( true );
      }

      function validateEmail() {
         var emailID = document.contactForm.EMail.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID")
            document.contactForm.EMail.focus() ;
            return false;
         }
         return( true );
      }
   