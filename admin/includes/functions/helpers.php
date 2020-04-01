<?php
require_once 'config.php';

function sanitize($input)
{
    return htmlentities(htmlspecialchars(strip_tags(trim($input))));
}

function sanitize_body($body)
{
    global $link;
    $body = strip_tags($body, "<h1><h2><h3><a><blockquotes><img><p><i><b><span>");
    $body = mysqli_real_escape_string($link, $body);

    return $body;
}

function redirect_to($url)
{
    $url = urldecode($url);
    header("Location: $url");
    exit();
}

function get_image_path(Array $file = null,  &$err)
{
    $err_flag = false;
    if (!is_null($file)) {
        extract($file);
        if ($size > 1022976) {
            $err_flag = true;
            $err[] = "image type not supported!";
        }

        $allowed_ext = ['jpg', 'jpeg',  'gif', 'png'];

        $file_exts = explode('/', $type);

        $image_ext = strtolower(end($file_exts));

        if (!in_array($image_ext, $allowed_ext)) {
            $err_flag = true;
            $errors[] = "image type not found";
        }

        $upload_dir = 'uploads/';
        $image_path = $upload_dir . 'techblog-' . uniqid(time()) . '.' . $image_ext;

        if ($err_flag === false) {
            if (move_uploaded_file($tmp_name, $image_path)) {
                return $image_path;
            }
        }
    }return false;
}
