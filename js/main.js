















  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })


// const nav = document.getElementById("nav");
// const nava = document.querySelectorAll("nav a");

// function navbarScroll() {
//     var scroll_pos = 0;
//     window.scroll(function () {
//       scroll_pos = this.scrollTop();
//       console.log(scrollTop());
//       if (scroll_pos > 100) {
//         nav.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
//         nava.style.color = 'white';
//       } else {
//         nav.style.backgroundColor = 'transparent';
//         nava.style.color = 'black';
//       }
//     });
//   };

//   navbarScroll()

// console.log('test')







