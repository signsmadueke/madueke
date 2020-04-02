// WORLD BRAIN TECHNOLOGY
//
// This program was directly written by WORLD BRAIN TECHNOLOGY
// CEO - Godson Pius
// Program Director - Godson Pius
// Department - PHP Department
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

(function () {
    document.getElementById("admin_form").addEventListener("submit", function (e) {
        e.preventDefault();
        document.getElementById("submit_btn").innerHTML = "<i class='icon-refresh'></i> Please Wait";
        document.getElementById("submit_btn").className = "btn btn-info";
        let form_inputs = new FormData(e.currentTarget);

        fetch(`polling/php/add_admin`, {
            method : "post",
            body : form_inputs
        }).then(a => a).then(a => a.text()).then(a => {
            if (a === "true") {
                toastr.success("New Admin Added!","Admin Added");
                document.getElementById("admin_form").reset();
                document.getElementById("submit_btn").innerHTML = "Add Admin";
                document.getElementById("submit_btn").className = "btn btn-danger text-bold-600 px-4 py-2 text-uppercase white font-small-4 box-shadow-2 border-0";
            } else {
                let errors = JSON.parse(a);
                toastr.error(errors,"Operation Failed");
                document.getElementById("submit_btn").innerHTML = "<i class='ft-alert-circle'></i> Try Again";
                document.getElementById("submit_btn").className = "btn btn-danger";
            }
        }).catch((e) => {
            toastr.error("Please Check your connection and try again!","Network Error");
            document.getElementById("submit_btn").innerHTML = "Add Admin";
            document.getElementById("submit_btn").className = "btn btn-danger text-bold-600 px-4 py-2 text-uppercase white font-small-4 box-shadow-2 border-0";
        });
    });
})();