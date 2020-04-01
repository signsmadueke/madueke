                                        // WORLD BRAIN TECHNOLOGY
//
// This program was directly written by WORLD BRAIN TECHNOLOGY
// CEO - Godson Pius
// Program Director - Godson Pius
// Department - PHP Department
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

(function () {
    document.getElementById("book_form").addEventListener("submit", function (e) {
       e.preventDefault();
       let form_inputs = new FormData(e.currentTarget);

       fetch(`polling/php/add_book`, {
           method : "post",
           body : form_inputs
       }).then(r => r).then(r => r.text()).then(r => {
          if (r === "true") {
              toastr.success("New Book Added!","Operation Successful");
              document.getElementById("book_form").reset;
          } else {
              let errors = JSON.parse(r);
              toastr.error(errors,"Operation Failed");
          }
       });
    });
})();