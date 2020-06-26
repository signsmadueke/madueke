// for search...
let search = document.getElementById("search");
let recent_books = document.getElementById("books").innerHTML;

search.addEventListener("keyup", function(e) {
    e.preventDefault();
    let search_value = search.value;
    
    fetch(`inc/polling/php/search?searchValue=${search_value}`).then(s => s).then(s => s.text()).then(s => {
        document.getElementById("books").innerHTML = s;
    
    }).catch((e) => {
        document.getElementById("books").innerHTML = "Please check your inputs!!";
    });
});

search.addEventListener("blur", function(e) {
    e.preventDefault();
    document.getElementById("books").innerHTML = recent_books;
});