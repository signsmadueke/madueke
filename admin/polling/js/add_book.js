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
       document.getElementById("submit_btn").innerHTML = "<i class='icon-refresh'></i> Please Wait";
        document.getElementById("submit_btn").className = "btn btn-warning";
        let form_inputs = new FormData(e.currentTarget);

       fetch(`polling/php/add_book`, {
           method : "post",
           body : form_inputs
       }).then(r => r).then(r => r.text()).then(r => {
          if (r === "true") {
              toastr.success("New Book Added!","Book Added");
              document.getElementById("book_form").reset();
              document.getElementById("submit_btn").innerHTML = "<i class='icon-notebook'></i> Add Book";
              document.getElementById("submit_btn").className = "btn btn-success";
          } else {
              let errors = JSON.parse(r);
              toastr.error(errors,"Operation Failed");
              document.getElementById("submit_btn").innerHTML = "<i class='ft-alert-circle'></i> Try Again";
              document.getElementById("submit_btn").className = "btn btn-danger";
          }
       }).catch((e) => {
           toastr.error("Please Check your connection and try again!","Network Error");
           document.getElementById("submit_btn").innerHTML = "<i class='icon-notebook'></i> Add Book";
           document.getElementById("submit_btn").className = "btn btn-success";
       });
    });
})();