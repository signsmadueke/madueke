// WORLD BRAIN TECHNOLOGY
//
// This program was directly written by WORLD BRAIN TECHNOLOGY
// CEO - Godson Pius
// Program Director - Godson Pius
// Department - PHP Department
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

(function () {
    document.getElementById("devotion_form").addEventListener("submit", function (e) {
        e.preventDefault();
        document.getElementById("submit_btn").innerHTML = "<i class='icon-refresh'></i> Please Wait";
        document.getElementById("submit_btn").className = "btn btn-warning";

        let form_inputs = new FormData(e.currentTarget);

        fetch(`polling/php/add_devotion`, {
            method : "post",
            body : form_inputs
        }).then(d => d).then(d => d.text()).then(d => {
            if (d === "true") {
                toastr.success("New Devotion Added!","Devotion Added");
                document.getElementById("devotion_form").reset();
                document.getElementById("submit_btn").innerHTML = "<i class='icon-notebook'></i> Add Book";
                document.getElementById("submit_btn").className = "btn btn-success";
            } else {
                let errors = JSON.parse(d);
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