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
        fetch(`polling/php/all_freebooks`).then(all_books => all_books).then(all_books => all_books.text()).then(all_books => {
            if (books.booksAvailable !== all_books) {
                document.getElementById("all_books").innerHTML = all_books;
                books.booksAvailable = all_books;
                // window.scrollTo(0, document.body.scrollHeight);
            }
            setTimeout(books.getAllBooks, 2000);
        }).catch((e) => {
            setTimeout(books.getAllBooks, 2000);
        });
    }

    window.addEventListener("load", books.getAllBooks, !false);

})();

const delete_book = element => {
    let confirm_delete = confirm("Do you really delete this book?");

    if (confirm_delete) {
        toastr.info("Please Wait!", "Processing");
        let bookId = element.dataset.id;
        fetch(`polling/php/delete?book_id=${bookId}`).then(d => d).then(d => d.text()).then(d => {
            if (d === "true") {
                toastr.success("Book have been deleted successfully!", "Book Deleted");
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