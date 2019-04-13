<?php
require_once 'koneksi.php';

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

if (isset($_POST)) {
    $data = [
        'name' => ! empty($_POST['name']) ? $_POST['name'] : '',
        'jenis_kamar' => ! empty($_POST['jenis_kamar']) ? $_POST['jenis_kamar'] : '',
        'kapasitas' => ! empty($_POST['kapasitas']) ? $_POST['kapasitas'] : '',
    ];

    if (!empty($data['name']) && !empty($data['jenis_kamar']) && !empty($data['kapasitas'])) {
        try {
            $stmt = $conn->prepare("INSERT INTO kamar SET namaKamar = :name, jenisKamar = :jenis_kamar, kapasitas = :kapasitas");
            $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);
            $stmt->bindParam(':jenis_kamar', $data['jenis_kamar'], PDO::PARAM_STR);
            $stmt->bindParam(':kapasitas', $data['kapasitas'], PDO::PARAM_INT);
            $stmt->execute();

            http_response_code(200);
            $response['status'] = 200;
            $response['message'] = 'OK';
            $response['data'] = 'Data Kamar berhasil disimpan';
        } catch (PDOException $e) {
            http_response_code(500);
            $response['status'] = 500;
            $response['message'] = 'NOT OK';
            $response['data'] = $e->getMessage();
        }
    } else {
        http_response_code(500);
        $response['status'] = 500;
        $response['message'] = 'NOT OK';
        $response['data'] = 'Silahkan lengkapi form';
    }

    echo json_encode($response);
}
?>