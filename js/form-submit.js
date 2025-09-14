const form = document.querySelector('form');

// form.addEventListener('submit', (e) => {
//   e.preventDefault();
// });
function validateContactForm() {
  $("#loader").removeClass("d-none");

  const capRes = grecaptcha.getResponse();

  if (!capRes.length > 0) {
    //throw new Error("Captha not completed")
    alert('Please complete captcha challange first!')
    $("#loader").addClass("d-none");
    return false;
  } else {
    if ($('form')[0].checkValidity()) {
      return true;
    } else {
      $("#loader").addClass("d-none");
      return false;
    }
  }

}


$(document).ready(function () {
  //email Address
  // $.validator.addMethod(
  //   "emailadd",
  //   function (value, element) {
  //     // return this.optional(element) || value == value.match(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/);
  //     return (
  //       this.optional(element) ||
  //       value == value.match(/^[a-zA-Z0-9._+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/)
  //     );
  //   },
  //   "Kindly provide a valid email"
  // );
  //email Address end

  $("#contactForm").validate({
    rules: {
      name: {
        required: true,
      },
      email: {
        required: true,
        emailadd: true,
        maxlength: 50,
      },
      mobile: {
        required: true,
        // mnumber: true,
        minlength: 10,
        maxlength: 10
      },
      message: {
        required: true,
        //mnumber: true,
        minlength: 40
      },

    },
    messages: {
      name: {
        required: "Name cannot be blank!!",
      },
      email: {
        required: "Email cannot be blank!!",
        maxlength: "Maximum character limit exceeded!!",
        emailadd: "Kindly provide a valid email!!",
      },
      mobile: {
        required: "Mobile cannot be blank!!",
        minlength: "Enter a valid mobile number!!",
      },
      message: {
        required: "Message cannot be blank!!",
        minlength: "Enter a valid message!!",
      },

    },

    highlight: function (element, errorClass, validClass) {
      $(element).addClass("is-invalid").removeClass("is-valid");
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).addClass("is-valid").removeClass("is-invalid");
    },
    submitHandler: function () {
      $("#exampleModalCenter").modal("show");
    },
  });
})
