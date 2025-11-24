<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

$data = [
    "player" => [
        "name" => "CRISTIANO RONALDO",
        "number" => 7,
        "position" => "Tiền đạo (Legend)",
        "avatar_url" => "https://cellphones.com.vn/sforum/wp-content/uploads/2024/02/hinh-nen-ronaldo-42.jpg",
        "stats" => [
            "goals" => 145,
            "matches" => 346
        ]
    ],
    "team" => [
        "name" => "MANCHESTER UNITED",
        "nickname" => "The Red Devils (Quỷ Đỏ)",
        "stadium" => "Old Trafford (Nhà hát của những giấc mơ)",
        "primary_color" => "#DA291C",
        "secondary_color" => "#FBE122"
    ]
];

echo json_encode($data);
?>