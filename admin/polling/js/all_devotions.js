// WORLD BRAIN TECHNOLOGY
//
// This program was directly written by WORLD BRAIN TECHNOLOGY
// CEO - Godson Pius
// Program Director - Godson Pius
// Department - PHP Department
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

let devotions = {};
(function () {
    devotions.devotionsAvailable = "";

    devotions.getAllDevotions = function () {
        fetch(`polling/php/all_devotions`).then(all_devotions => all_devotions).then(all_devotions => all_devotions.text()).then(all_devotions => {
            if (devotions.devotionsAvailable !== all_devotions) {
                document.getElementById("all_devotions").innerHTML = all_devotions;
                devotions.devotionsAvailable = all_devotions;
                // window.scrollTo(0, document.body.scrollHeight);
            }
            setTimeout(devotions.getAllDevotions, 2000);
        }).catch((e) => {
            setTimeout(devotions.getAllDevotions, 2000);
        });
    }

    window.addEventListener("load", devotions.getAllDevotions, !false);

})();

const delete_devotion = element => {
    let confirm_delete = confirm("Do you really delete this devotion?");

    if (confirm_delete) {
        toastr.info("Please Wait!", "Processing");
        let devotionId = element.dataset.id;
        fetch(`polling/php/delete?devotion_id=${devotionId}`).then(d => d).then(d => d.text()).then(d => {
            if (d === "true") {
                toastr.success("Devotion have been deleted successfully!", "Devotion Deleted");
            } else if (d === "false") {
                toastr.error("Failed to delete!", "Failed");
            } else {
                toastr.error("Server Error!", "Error");
            }
        }).catch((e) => {
            toastr.error("Please Check your connection and try again!", "Network Error");
        });
    }
};