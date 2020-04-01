// WORLD BRAIN TECHNOLOGY
//
// This program was directly written by WORLD BRAIN TECHNOLOGY
// CEO - Godson Pius
// Program Director - Godson Pius
// Department - PHP Department
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

(function () {
    document.getElementById("edit_book").addEventListener("submit", function (e) {
        e.preventDefault();
        document.getElementById("submit_btn").innerHTML = "<i class='icon-refresh'></i> Please Wait";
        document.getElementById("submit_btn").className = "btn btn-warning";
        let book_id = document.getElementById("bookId").dataset.id;
        let form_inputs = new FormData(e.currentTarget);

        fetch(`polling/php/edit_book?book_id=${book_id}`, {
            method : "post",
            body : form_inputs
        }).then(r => r).then(r => r.text()).then(r => {
            if (r === "true") {
                toastr.success("Book edited successfully!","Book Edited");
                document.getElementById("submit_btn").innerHTML = "<i class='icon-note'></i> Edit Book";
                document.getElementById("submit_btn").className = "btn btn-success";
            } else {
                let errors = JSON.parse(r);
                toastr.error(errors,"Operation Failed");
                document.getElementById("submit_btn").innerHTML = "<i class='ft-alert-circle'></i> Try Again";
                document.getElementById("submit_btn").className = "btn btn-danger";
            }
        }).catch((e) => {
            toastr.error("Please Check your connection and try again!","Network Error");
            document.getElementById("submit_btn").innerHTML = "<i class='icon-note'></i> Edit Book";
            document.getElementById("submit_btn").className = "btn btn-success";
        });
    });
})();