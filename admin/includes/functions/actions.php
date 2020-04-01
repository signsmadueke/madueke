<?php
require_once "config.php";

function adminLogin($post)
{
    extract($post);
    $errors = [];

    //Checking for email...
    if (!empty($mailAddress)) {
        $tmpEmail = sanitize($mailAddress);

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
        $title = sanitize($bookTitle);
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
        move_uploaded_file($tmp_image, "../../book_images/$image");
    } else {
        $errors[] = "Book Image is empty" . "<br>";
    }

    if (!empty($bookDescription)) {
        $description = sanitize_body($bookDescription);
    } else {
        $errors[] = "Book Description is empty" . "<br>";
    }

    $dateAdded = date("d-m-y");

    if (!$errors) {
        $sql = "INSERT INTO books (book_title, book_author, book_image, book_description, total_book_page, book_isbn, book_kindle_price, book_paperback_price, book_measurement, date_added) VALUES ('$title', '$author', '$image', '$description', '$pages', '$isbn', '$kindle', '$paperback', '$measurement', '$dateAdded')";

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