<?php
include 'whitepages_lib.php';
include 'result.php';
$first = ($_POST['first_name']);


if (isset($_POST['submit'])) {
    if (!empty($_POST['first_name'])) {
        if (!empty($_POST['last_name'])) {
            
                $param = array(
                    'first_name' => "$first",
                    'last_name' => trim($_POST['last_name']),
                );
                $whitepages_obj = new WhitepagesLib();
                $api_response = $whitepages_obj->find_person($param);
                try {
                    if ($api_response === false) {
                        throw new Exception;
                    }
                    $result = new Result($api_response);
                } catch (Exception $exception) {
                    echo "Error Api response";
                }

        } else {
            $error = 'Please enter last name.';
        }
    } else {
        $error = 'Please enter first name.';
    }
}
