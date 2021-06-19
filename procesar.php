<?php
header("Content-Type: application/json");
E_ALL();

$_POST['question'] = $_POST['question'] ?? '';

if (($_POST['question'] == 'principiante_a')) {

    $_POST['qtn_a'] = $_POST['qtn_a'] ?? '';
    $_POST['qtn_b'] = $_POST['qtn_b'] ?? '';
    $_POST['qtn_c'] = $_POST['qtn_c'] ?? '';
    $_POST['qtn_d'] = $_POST['qtn_d'] ?? '';

    if (!$_POST['qtn_a']) {
        $data = array('status' => 'error', 'Mensaje' => '¡Error!');
        echo json_encode($data);
        exit;
    }
    if (!$_POST['qtn_b']) {
        $data = array('status' => 'error', 'Mensaje' => '¡Error!');
        echo json_encode($data);
        exit;
    }
    if (!$_POST['qtn_c']) {
        $data = array('status' => 'error', 'Mensaje' => '¡Error!');
        echo json_encode($data);
        exit;
    }
    if (!$_POST['qtn_d']) {
        $data = array('status' => 'error', 'Mensaje' => '¡Error!');
        echo json_encode($data);
        exit;
    }

    $data = array('status' => 'ok', 'Mensaje' => 'Muy Bien');
    echo json_encode($data);
    exit;
} else if (($_POST['question'] == 'principiante_b')) {

    $_POST['qtn_ba'] = $_POST['qtn_ba'] ?? '';
    $_POST['qtn_bb'] = $_POST['qtn_bb'] ?? '';
    $_POST['qtn_bc'] = $_POST['qtn_bc'] ?? '';
    $_POST['qtn_bd'] = $_POST['qtn_bd'] ?? '';
    $_POST['qtn_be'] = $_POST['qtn_be'] ?? '';
    $_POST['qtn_bf'] = $_POST['qtn_bf'] ?? '';
    $_POST['qtn_bg'] = $_POST['qtn_bg'] ?? '';
    $_POST['qtn_bh'] = $_POST['qtn_bh'] ?? '';
    $_POST['qtn_bi'] = $_POST['qtn_bi'] ?? '';
    $_POST['qtn_bj'] = $_POST['qtn_bj'] ?? '';

    if ($_POST['qtn_ba']) {
        $data = array('status' => 'error', 'Mensaje' => '¡Error!');
        echo json_encode($data);
        exit;
    }
    if ($_POST['qtn_bc']) {
        $data = array('status' => 'error', 'Mensaje' => '¡Error!');
        echo json_encode($data);
        exit;
    }
    if ($_POST['qtn_be']) {
        $data = array('status' => 'error', 'Mensaje' => '¡Error!');
        echo json_encode($data);
        exit;
    }
    if ($_POST['qtn_bf']) {
        $data = array('status' => 'error', 'Mensaje' => '¡Error!');
        echo json_encode($data);
        exit;
    }
    if ($_POST['qtn_bh']) {
        $data = array('status' => 'error', 'Mensaje' => '¡Error!');
        echo json_encode($data);
        exit;
    }
    if ($_POST['qtn_bi']) {
        $data = array('status' => 'error', 'Mensaje' => '¡Error!');
        echo json_encode($data);
        exit;
    }

    if (
        /** Respuestas correctas */
        $_POST['qtn_bb']
        && $_POST['qtn_bd']
        && $_POST['qtn_bg']
        && $_POST['qtn_bj']
    ) {
        $data = array('status' => 'ok', 'Mensaje' => 'Muy Bien');
        echo json_encode($data);
        exit;
    }else{
        $data = array('status' => 'Error', 'Mensaje' => 'Error');
        echo json_encode($data);
        exit;
    }
} else if (($_POST['question'] == 'principiante_c')) {

    $_POST['qtn_ca'] = $_POST['qtn_ca'] ?? '';
    $_POST['qtn_cb'] = $_POST['qtn_cb'] ?? '';
    $_POST['qtn_cc'] = $_POST['qtn_cc'] ?? '';

    if ($_POST['qtn_ca'] == '2') {
        $data = array('status' => 'error', 'Mensaje' => '¡Error!');
        echo json_encode($data);
        exit;
    }
    if ($_POST['qtn_cb'] == '2') {
        $data = array('status' => 'error', 'Mensaje' => '¡Error!');
        echo json_encode($data);
        exit;
    }
    if ($_POST['qtn_cc'] == '1') {
        $data = array('status' => 'error', 'Mensaje' => '¡Error!');
        echo json_encode($data);
        exit;
    }

    if (
        /** Respuestas correctas */
        ($_POST['qtn_ca'] == '1')
        && ($_POST['qtn_cb'] == '1')
        && ($_POST['qtn_cc'] == '2')
    ) {
        $data = array('status' => 'ok', 'Mensaje' => 'Muy Bien');
        echo json_encode($data);
        exit;
    }
} else if (($_POST['question'] == 'principiante_d')) {

    $_POST['qtn_da'] = $_POST['qtn_da'] ?? '';
    $_POST['qtn_db'] = $_POST['qtn_db'] ?? '';

    if ($_POST['qtn_db']) {
        $data = array('status' => 'error', 'Mensaje' => '¡Error!');
        echo json_encode($data);
        exit;
    }
    if ($_POST['qtn_da']) {
        $data = array('status' => 'ok', 'Mensaje' => 'Muy Bien');
        echo json_encode($data);
        exit;
    }
} else if (($_POST['question'] == 'principiante_e')) {

    $_POST['qtn_ea'] = $_POST['qtn_ea'] ?? '';

    if (!$_POST['qtn_ea']) {
        $data = array('status' => 'error', 'Mensaje' => '¡Error!');
        echo json_encode($data);
        exit;
    } else if ($_POST['qtn_ea'] == '1') {
        $data = array('status' => 'error', 'Mensaje' => '¡Error!');
        echo json_encode($data);
        exit;
    } else {
        $data = array('status' => 'ok', 'Mensaje' => 'Muy Bien');
        echo json_encode($data);
        exit;
    }
} else if (($_POST['question'] == 'avanzado_a')) {

    $_POST['qtn_a'] = $_POST['qtn_a'] ?? '';
    $_POST['qtn_b'] = $_POST['qtn_b'] ?? '';
    $_POST['qtn_c'] = $_POST['qtn_c'] ?? '';
    $_POST['qtn_d'] = $_POST['qtn_d'] ?? '';

    if ($_POST['qtn_a']) {
        $data = array('status' => 'error', 'Mensaje' => '¡Error!');
        echo json_encode($data);
        exit;
    }
    if ($_POST['qtn_b']) {
        $data = array('status' => 'error', 'Mensaje' => '¡Error!');
        echo json_encode($data);
        exit;
    }
    if ($_POST['qtn_d']) {
        $data = array('status' => 'error', 'Mensaje' => '¡Error!');
        echo json_encode($data);
        exit;
    }
    if ($_POST['qtn_c']) {
        $data = array('status' => 'ok', 'Mensaje' => 'Muy Bien');
        echo json_encode($data);
        exit;
    }

    $data = array('status' => 'error', 'Mensaje' => '¡Error!');
    echo json_encode($data);
    exit;
}else if (($_POST['question'] == 'avanzado_b')) {

    $_POST['qtn'] = $_POST['qtn'] ?? '';


    if (!$_POST['qtn']) {
        $data = array('status' => 'error', 'Mensaje' => '¡Error!');
        echo json_encode($data);
        exit;
    }

    if ($_POST['qtn']=='3') {
        $data = array('status' => 'ok', 'Mensaje' => 'Muy Bien');
        echo json_encode($data);
        exit;
    }else{
        $data = array('status' => 'error', 'Mensaje' => '¡Error!');
        echo json_encode($data);
        exit;
    }

   
}else if (($_POST['question'] == 'avanzado_c')) {

    $_POST['qtn'] = $_POST['qtn'] ?? '';


    if (!$_POST['qtn']) {
        $data = array('status' => 'error', 'Mensaje' => '¡Error!');
        echo json_encode($data);
        exit;
    }
    
    if ($_POST['qtn']=='4') {
        $data = array('status' => 'ok', 'Mensaje' => 'Muy Bien');
        echo json_encode($data);
        exit;
    }else{
        $data = array('status' => 'error', 'Mensaje' => '¡Error!');
        echo json_encode($data);
        exit;
    }

   
}else if (($_POST['question'] == 'avanzado_d')) {

    $_POST['qtn'] = $_POST['qtn'] ?? '';


    if (!$_POST['qtn']) {
        $data = array('status' => 'error', 'Mensaje' => '¡Error!');
        echo json_encode($data);
        exit;
    }

    if ($_POST['qtn']=='3') {
        $data = array('status' => 'ok', 'Mensaje' => 'Muy Bien');
        echo json_encode($data);
        exit;
    }else{
        $data = array('status' => 'error', 'Mensaje' => '¡Error!');
        echo json_encode($data);
        exit;
    }

   
}
