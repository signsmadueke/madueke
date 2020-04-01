<?php
                                                                // WORLD BRAIN TECHNOLOGY
//
// This program was directly written by WORLD BRAIN TECHNOLOGY
// CEO - Godson Pius
// Program Director - Godson Pius
// Department - PHP Department
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


require_once "config.php";

function validateQuery($statement)
{
    global $link;

    $sql = "$statement";
    $query = mysqli_query($link, $sql);

    if ($query) {
        return true;
    } else {
        return false;
    }

}


function returnQuery($statement)
{
    global $link;

    $sql = "$statement";
    $query = mysqli_query($link, $sql);

    if ($query) {
        return $query;
    } else {
        return false;
    }

}

function executeQuery($statement)
{
    global $link;

    $sql = "$statement";
    $query = mysqli_query($link, $sql);

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        return $row;
    } else {
        return false;
    }
}


function encrypt($password) {
    $initialEncryption = md5($password);
    $finalEncryption = sha1($initialEncryption);

    return $finalEncryption;
}

function decrypt($dbpass, $password) {
    $initialEncryption = md5($password);
    $finalEncryption = sha1($initialEncryption);

    if ($dbpass === $finalEncryption) {
        return true;
    }
}

function fetchAll($table, $preferredOrder = null, $limit1 = null, $limit2 = null) {

    if (!is_null($limit1) && !is_null($limit2) && !is_null($preferredOrder)) {
        $sql = "SELECT * FROM $table ORDER BY $preferredOrder ASC LIMIT $limit1, $limit2";
    } else {
        $sql = "SELECT * FROM $table";
    }
    $result = returnQuery($sql);

    if ($result) {
        return $result;
    } else {
        return false;
    }
}

function fetchAllWhere($table, $where, $whereValue, $orderBy, $limit = null, $limit2 = null) {

    $sql = "SELECT * FROM $table WHERE $where = $whereValue ORDER BY $orderBy DESC LIMIT $limit, $limit2";
    $result = returnQuery($sql);

    if ($result) {
        return $result;
    } else {
        return false;
    }
}

function where($table, $where, $whereValue, $limit = null) {
    if (!is_null($limit)) {
        $sql = "SELECT * FROM $table WHERE $where = $whereValue LIMIT $limit";
    } else {
        $sql = "SELECT * FROM $table WHERE $where = $whereValue";
    }
    $result = returnQuery($sql);

    if ($result) {
        return $result;
    } else {
        return false;
    }
}

function getTotal($table, $optional = null, $optionValue = null) {
    if (!is_null($optional) && !is_null($optionValue)) {
        $sql = "SELECT * FROM $table WHERE $optional = $optionValue";
    } else {
        $sql = "SELECT * FROM $table";
    }
    $result = returnQuery($sql);

    if ($result) {
        $total = mysqli_num_rows($result);
        return $total;
    } else {
        return false;
    }

}

function blockUrlHackers() {
    if (!isset($_SESSION['adminId'])) {
        redirect_to("auth_login");
    }
}

function getAdmin($id) {
    $sql = "SELECT * FROM admins WHERE admin_id = $id";
    $result = returnQuery($sql);

    if ($result) {
        return $result;
    } else {
        return false;
    }
}

function selectSearch($field, $whereValue, $input) {

    $sql = "SELECT * FROM $field WHERE $whereValue LIKE '%$input%'";
    $result = returnQuery($sql);

    if (mysqli_num_rows($result) > 0) {
        return $result;
    }
    return false;
}

function searchTotal($field, $whereValue, $input) {

    $sql = "SELECT * FROM $field WHERE $whereValue LIKE '%$input%'";
    $result = returnQuery($sql);

    if ($result) {
        $total = mysqli_num_rows($result);
        return $total;
    }
    return false;
}

function selectInterestedProps() {
    $sql = "SELECT property_id FROM clients";
    $result = returnQuery($sql);

    if (mysqli_num_rows($result) > 0) {
        return $result;
    }
    return false;
}