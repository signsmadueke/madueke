                                            // WORLD BRAIN TECHNOLOGY
//
// This program was directly written by WORLD BRAIN TECHNOLOGY
// CEO - Godson Pius
// Program Director - Godson Pius
// Department - PHP Department
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

let books = {};
(function () {
    books.booksAvailable = "";

    books.getAllBooks = function () {
        fetch(`polling/php/all_books`).then(all_books => all_books).then(all_books => all_books.text()).then(all_books => {
           if (books.booksAvailable !== all_books) {
               document.getElementById("all_books").innerHTML = all_books;
               books.booksAvailable = all_books;
               window.scrollTo(0, document.body.scrollHeight);
           }
           setTimeout(books.getAllBooks, 2000);
        }).catch((e) => {
            setTimeout(books.getAllBooks, 2000);
        });
    }

    window.addEventListener("load", books.getAllBooks, !false);

})();