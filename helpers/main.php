<?php
include_once 'config.php';

function base_path()
{
    return BASE_PATH;
}

function asset()
{
    return base_path() . '/assets/';

}

function dd($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die();
}

function create($table, $insData)
{
    global $conn;
    $dataLength=count($insData);
    $columns = implode(", ",array_keys($insData));
    $values="'".implode("','",array_values($insData))."'";
    $sql = "INSERT INTO $table($columns) VALUES ($values)";
    mysqli_query($conn, $sql);
}

function update($table, $insData, $whereId)
{
    global $conn;
    $dataLength=count($insData);
    $columns = implode(", ",array_keys($insData));
    $values="";
    $i=0;
    foreach ($insData as $key => $value) {
        $values .= $key . "='" . $value . "'";
        if ($i < $dataLength - 1) {
            $values .= ", ";
        }
        $i++;
    }
    $sql = "UPDATE $table SET $values WHERE id = $whereId";
    mysqli_query($conn, $sql);
}

function delete($table, $whereId)
{
    global $conn;
    $sql = "DELETE FROM $table WHERE id = $whereId";
    mysqli_query($conn, $sql);
}


function encrypt($string)
{
    return password_hash($string, PASSWORD_BCRYPT, HASH_OPTIONS);
}

function check_password($string, $hash)
{
    return password_verify($string, $hash);
}

function add_session($key, $value)
{
    $_SESSION[$key] = $value;
}

function get_session($key)
{
    return $_SESSION[$key];
}

function delete_session($key)
{
    unset($_SESSION[$key]);
}

function upload_pdf($file, $path)
{
    $file_name = $file['name'];
    $file_size = $file['size'];
    $file_tmp = $file['tmp_name'];
    $file_type = $file['type'];
    $file_ext = strtolower(end(explode('.', $file_name)));
    $extensions = array("pdf");
    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "extension not allowed, please choose a PDF file.";
    }
    if ($file_size > 2097152) {
        $errors[] = 'File size must be excately 2 MB';
    }
    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, $path . $file_name);
        return true;
    } else {
        return false;
    }
}
?>
