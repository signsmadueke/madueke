<?php
require_once "config.php";

function adminLogin($post)
{
    extract($post);
    $errors = [];

    //Checking for email...
    if (!empty($email)) {
        $tmpEmail = sanitize($email);

        if ($tmpEmail) {
            $mail = $tmpEmail;
        } else {
            $errors[] = "Invalid email address!";
        }
    } else {
        $errors[] = "Please enter your email address!";
    }


    //Checking for password...
    if (!empty($password)) {
        $password = sanitize($password);
    }else {
        $errors[] = "Please enter your password!";
    }


    //The Sql Statement...
    if (!$errors) {
        $sql = "SELECT * FROM admins WHERE email = '$mail'";
        $result = executeQuery($sql);
        if ($result) {
            $encryptedpassword = $result['password'];
            if (decrypt($encryptedpassword, $password)) {
                $_SESSION['adminId'] = $result['admin_id'];
                    if (isset($rememberMe)) {
                        setcookie("admin_password", $password, time() + (86400 * 30), "/");
                        setcookie("admin_email", $mail, time() + (86400 * 30), "/");
                    }
                return true;
            }
        }
        $errors[] = "Invalid Login Details!";
    }
    return $errors;

}

function AddBook($post) {
    extract($post);
    $errors = [];

    if (!empty($bookTitle)) {
        $tmp_title = sanitize($bookTitle);
        if (!check_duplicate("books", "book_title", $tmp_title)) {
            $tmp_title2 = $tmp_title;
            $title = str_replace("'", "</b>", $tmp_title2);
        } else {
            $errors[] = "This book already exists" . "<br>";
        }
    } else {
        $errors[] = "Book Title is empty" . "<br>";
    }

    if (!empty($bookAuthor)) {
        $author = sanitize($bookAuthor);
    } else {
        $errors[] = "Book Author is empty" . "<br>";
    }

    if (!empty($bookPages)) {
        $pages = sanitize($bookPages);
    } else {
        $errors[] = "Book Total Page is empty" . "<br>";
    }

    if (!empty($bookIsbn)) {
        $isbn = sanitize($bookIsbn);
    } else {
        $errors[] = "Book Isbn is empty" . "<br>";
    }

    if (!empty($bookKindlePrice)) {
        $kindle = sanitize($bookKindlePrice);
    } else {
        $errors[] = "Book kindle Price is empty" . "<br>";
    }

    if (!empty($bookPaperbackPrice)) {
        $paperback = sanitize($bookPaperbackPrice);
    } else {
        $errors[] = "Book Paperback Price is empty" . "<br>";
    }

    if (isset($_FILES['bookImage'])) {
        $image = sanitize($_FILES['bookImage']['name']);
        $tmp_image = $_FILES['bookImage']['tmp_name'];
        move_uploaded_file($tmp_image, "../../../assets/images/books/$image");
    } else {
        $errors[] = "Book Image is empty" . "<br>";
    }

    if (!empty($bookDescription)) {
        $tmp_description = $bookDescription;
        $description = str_replace("'", "</b>", $tmp_description);
    } else {
        $errors[] = "Book Description is empty" . "<br>";
    }


    $dateAdded = date("Y-m-d");

    if (!$errors) {
        $sql = "INSERT INTO books (book_title, book_author, book_image, book_description, total_book_page, book_isbn, book_kindle_price, book_paperback_price, date_added) VALUES ('$title', '$author', '$image', '$description', '$pages', '$isbn', '$kindle', '$paperback', '$dateAdded')";

        $result = validateQuery($sql);
        if ($result) {
            return true;
        } else {
            $errors[] = "Operation Failed! Try Again" . "<br>";
        }
    } else {
        return $errors;
    }
}

function editBook($post, $id) {
    extract($post);
    $errors = [];

    if (!empty($bookTitle)) {
        $title = sanitize($bookTitle);
        $title = str_replace("'", "</b>", $title);
    } else {
        $errors[] = "Book Title is empty" . "<br>";
    }

    if (!empty($bookAuthor)) {
        $author = sanitize($bookAuthor);
    } else {
        $errors[] = "Book Author is empty" . "<br>";
    }

    if (!empty($bookPages)) {
        $pages = sanitize($bookPages);
    } else {
        $errors[] = "Book Total Page is empty" . "<br>";
    }

    if (!empty($bookIsbn)) {
        $isbn = sanitize($bookIsbn);
    } else {
        $errors[] = "Book Isbn is empty" . "<br>";
    }

    if (!empty($bookKindlePrice)) {
        $kindle = sanitize($bookKindlePrice);
    } else {
        $errors[] = "Book kindle Price is empty" . "<br>";
    }

    if (!empty($bookPaperbackPrice)) {
        $paperback = sanitize($bookPaperbackPrice);
    } else {
        $errors[] = "Book Paperback Price is empty" . "<br>";
    }

    if (!empty($bookMeasurement)) {
        $measurement = sanitize($bookMeasurement);
    } else {
        $errors[] = "Book Measurement is empty" . "<br>";
    }

    if (isset($_FILES['bookImage'])) {
        $image = sanitize($_FILES['bookImage']['name']);
        $tmp_image = $_FILES['bookImage']['tmp_name'];
        move_uploaded_file($tmp_image, "../../../assets/images/books/$image");
    } else {
        $errors[] = "Book Image is empty" . "<br>";
    }

    if (!empty($bookDescription)) {
        $description = sanitize_body($bookDescription);
        $description = str_replace("'", "</b>", $description);
    } else {
        $errors[] = "Book Description is empty" . "<br>";
    }

    $date = date("Y-m-d");

    if (!$errors) {
        $sql = "UPDATE books SET book_title = '$title', book_author = '$author', book_image = '$image', book_description = '$description', total_book_page = '$pages', book_isbn = '$isbn', book_kindle_price = '$kindle', book_paperback_price = '$paperback', book_measurement = '$measurement', date_added = '$date' WHERE book_id = $id";
        $result = validateQuery($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    return $errors;
}

function AddDevotion($post) {
    extract($post);
    $errors = [];

    if (!empty($devTitle)) {
        $tmp_title = sanitize($devTitle);
        if (!check_duplicate("devotions", "devotion_title", $tmp_title)) {
            $title = $tmp_title;
            $title = str_replace("'", "</b>", $title);
        } else {
            $errors[] = "This devotion already exists" . "<br>";
        }
    } else {
        $errors[] = "Devotion Title is empty" . "<br>";
    }

    if (!empty($devSubtitle)) {
        $subtitle = sanitize($devSubtitle);
        $subtitle = str_replace("'", "</b>", $subtitle);

    } else {
        $errors[] = "Devotion Subtitle is empty" . "<br>";
    }

    if (!empty($devAuthor)) {
        $author = sanitize($devAuthor);
    } else {
        $errors[] = "Devotion Author is empty" . "<br>";
    }

    if (!empty($devBody)) {
        $body = $devBody;
        $body = str_replace("'", "</b>", $body);

    } else {
        $errors[] = "Devotion Message is empty" . "<br>";
    }

    if (isset($_FILES['devImage'])) {
        $image = sanitize($_FILES['devImage']['name']);
        $tmp_image = $_FILES['devImage']['tmp_name'];
        move_uploaded_file($tmp_image, "../../../assets/images/devotionals/$image");
    } else {
        $errors[] = "Devotion Image is empty" . "<br>";
    }

    if (isset($_FILES['devImageTwo'])) {
        $imageTwo = sanitize($_FILES['devImageTwo']['name']);
        $tmp_imageTwo = $_FILES['devImageTwo']['tmp_name'];
        move_uploaded_file($tmp_imageTwo, "../../../assets/images/devotionals/$imageTwo");
    } else {
        $errors[] = "Devotion Sub-Image is empty" . "<br>";
    }

    $datePosted = date("Y-m-d");

    if (!$errors) {
        $sql = "INSERT INTO devotions (devotion_title, devotion_subtitle, devotion_author, devotion_body, devotion_image, devotion_subimage, datePosted) VALUES ('$title', '$subtitle', '$author', '$body', '$image', '$imageTwo', '$datePosted')";

        $result = validateQuery($sql);
        if ($result) {
            return true;
        } else {
            $errors[] = "Operation Failed! Try Again" . "<br>";
        }
    } else {
        return $errors;
    }
}

function editDevotion($post, $id) {
    extract($post);
    $errors = [];

    if (!empty($devTitle)) {
        $title = sanitize($devTitle);
    } else {
        $errors[] = "Devotion Title is empty" . "<br>";
    }

    $title = str_replace("'", "</b>", $title);

    if (!empty($devSubtitle)) {
        $subtitle = sanitize($devSubtitle);
    } else {
        $errors[] = "Devotion Subtitle is empty" . "<br>";
    }

    $subtitle = str_replace("'", "</b>", $subtitle);

    if (!empty($devAuthor)) {
        $author = sanitize($devAuthor);
    } else {
        $errors[] = "Devotion Author is empty" . "<br>";
    }

    if (!empty($devBody)) {
        $body = sanitize($devBody);
    } else {
        $errors[] = "Devotion Message is empty" . "<br>";
    }

    $body = str_replace("'", "</b>", $subtitle);


    if (isset($_FILES['devImage'])) {
        $image = sanitize($_FILES['devImage']['name']);
        $tmp_image = $_FILES['devImage']['tmp_name'];
        move_uploaded_file($tmp_image, "../../../assets/images/devotionals/book_images/$image");
    } else {
        $errors[] = "Devotion Image is empty" . "<br>";
    }

    $datePosted = date("Y-m-d");

    if (!$errors) {
        $sql = "UPDATE devotions SET devotion_title = '$title', devotion_subtitle = '$subtitle', devotion_author = '$author', devotion_image = '$image', devotion_body = '$body', datePosted = '$datePosted' WHERE devotion_id = $id";
        $result = validateQuery($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    return $errors;
}

function AddAdmin($post) {
    extract($post);
    $errors = [];


    if (!empty($name)) {
        $name = sanitize($name);
    }else {
        $errors[] = "Admin name is empty!"  . "<br>";
    }


    //Checking for email...
    if (!empty($email)) {
        $tmpEmail = sanitize($email);

        if ($tmpEmail) {
            $mail = $tmpEmail;
        } else {
            $errors[] = "Invalid email address!"  . "<br>";
        }
    } else {
        $errors[] = "Admin email address is empty!"  . "<br>";
    }


    //Checking for password...
    if (!empty($password)) {
        $tmp_password = sanitize($password);
        $password = encrypt($tmp_password);
    }else {
        $errors[] = "Enter preferred password!"  . "<br>";
    }

    if (!$errors) {
        $sql = "INSERT INTO admins (name, email, password) VALUES ('$name', '$mail', '$password')";

        $result = validateQuery($sql);
        if ($result) {
            return true;
        } else {
            $errors[] = "Operation Failed! Try Again" . "<br>";
        }
    } else {
        return $errors;
    }
}


function AddFreeBook($post) {
    extract($post);
    $errors = [];

    if (!empty($bookTitle)) {
        $tmp_title = sanitize($bookTitle);
        if (!check_duplicate("books", "book_title", $tmp_title)) {
            $tmp_title2 = $tmp_title;
            $title = str_replace("'", "</b>", $tmp_title2);
        } else {
            $errors[] = "This book already exists" . "<br>";
        }
    } else {
        $errors[] = "Book Title is empty" . "<br>";
    }

    if (!empty($bookAuthor)) {
        $author = sanitize($bookAuthor);
    } else {
        $errors[] = "Book Author is empty" . "<br>";
    }

    if (!empty($bookPages)) {
        $pages = sanitize($bookPages);
    } else {
        $errors[] = "Book Total Page is empty" . "<br>";
    }

    if (!empty($bookIsbn)) {
        $isbn = sanitize($bookIsbn);
    } else {
        $errors[] = "Book Isbn is empty" . "<br>";
    }

    if (!empty($bookKindlePrice)) {
        $kindle = sanitize($bookKindlePrice);
    } else {
        $errors[] = "Book kindle Price is empty" . "<br>";
    }

    if (!empty($bookPaperbackPrice)) {
        $paperback = sanitize($bookPaperbackPrice);
    } else {
        $errors[] = "Book Paperback Price is empty" . "<br>";
    }

    if (isset($_FILES['bookImage'])) {
        $image = sanitize($_FILES['bookImage']['name']);
        $tmp_image = $_FILES['bookImage']['tmp_name'];
        move_uploaded_file($tmp_image, "../../../assets/images/books/$image");
    } else {
        $errors[] = "Book Image is empty" . "<br>";
    }

    if (!empty($bookDescription)) {
        $tmp_description = sanitize_body($bookDescription);
        $description = str_replace("'", "</b>", $tmp_description);
    } else {
        $errors[] = "Book Description is empty" . "<br>";
    }


    $dateAdded = date("Y-m-d");

    if (!$errors) {
        $sql = "INSERT INTO freebooks (book_title, book_author, book_image, book_description, total_book_page, book_isbn, book_kindle_price, book_paperback_price, date_added) VALUES ('$title', '$author', '$image', '$description', '$pages', '$isbn', '$kindle', '$paperback', '$dateAdded')";

        $result = validateQuery($sql);
        if ($result) {
            return true;
        } else {
            $errors[] = "Operation Failed! Try Again" . "<br>";
        }
    } else {
        return $errors;
    }
}


function editFreeBook($post, $id) {
    extract($post);
    $errors = [];

    if (!empty($bookTitle)) {
        $title = sanitize($bookTitle);
        $title = str_replace("'", "</b>", $title);
    } else {
        $errors[] = "Book Title is empty" . "<br>";
    }

    if (!empty($bookAuthor)) {
        $author = sanitize($bookAuthor);
    } else {
        $errors[] = "Book Author is empty" . "<br>";
    }

    if (!empty($bookPages)) {
        $pages = sanitize($bookPages);
    } else {
        $errors[] = "Book Total Page is empty" . "<br>";
    }

    if (!empty($bookIsbn)) {
        $isbn = sanitize($bookIsbn);
    } else {
        $errors[] = "Book Isbn is empty" . "<br>";
    }

    if (!empty($bookKindlePrice)) {
        $kindle = sanitize($bookKindlePrice);
    } else {
        $errors[] = "Book kindle Price is empty" . "<br>";
    }

    if (!empty($bookPaperbackPrice)) {
        $paperback = sanitize($bookPaperbackPrice);
    } else {
        $errors[] = "Book Paperback Price is empty" . "<br>";
    }


    if (isset($_FILES['bookImage'])) {
        $image = sanitize($_FILES['bookImage']['name']);
        $tmp_image = $_FILES['bookImage']['tmp_name'];
        move_uploaded_file($tmp_image, "../../../assets/images/books/$image");
    } else {
        $errors[] = "Book Image is empty" . "<br>";
    }

    if (!empty($bookDescription)) {
        $description = sanitize_body($bookDescription);
        $description = str_replace("'", "</b>", $description);
    } else {
        $errors[] = "Book Description is empty" . "<br>";
    }

    $date = date("Y-m-d");

    if (!$errors) {
        $sql = "UPDATE freebooks SET book_title = '$title', book_author = '$author', book_image = '$image', book_description = '$description', total_book_page = '$pages', book_isbn = '$isbn', book_kindle_price = '$kindle', book_paperback_price = '$paperback', date_added = '$date' WHERE book_id = $id";
        $result = validateQuery($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    return $errors;
}