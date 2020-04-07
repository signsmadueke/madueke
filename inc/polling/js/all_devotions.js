let devotions = {};
(function () {
    devotions.devotionsAvailable = "";

    devotions.getAllDevotions = function () {
        fetch(`inc/polling/php/all_devotions`).then(all_devotions => all_devotions).then(all_devotions => all_devotions.text()).then(all_devotions => {
            if (devotions.devotionsAvailable !== all_devotions) {
                document.getElementById("devotionals").innerHTML = all_devotions;
                devotions.devotionsAvailable = all_devotions;
            }
            setTimeout(devotions.getAllDevotions, 2000);
        }).catch((e) => {
            setTimeout(devotions.getAllDevotions, 2000);
        });
    }

    window.addEventListener("load", devotions.getAllDevotions, !false);

})();