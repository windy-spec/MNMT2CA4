<?php
header("X-Content-Type-Options: nosniff");
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

// Dữ liệu giả lập 3 cầu thủ
$players = [
    [
        "id" => 1,
        "name" => "CRISTIANO RONALDO",
        "number" => 7,
        "position" => "Tiền đạo (Legend)",
        "avatar_url" => "https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Cristiano_Ronaldo_playing_for_Al_Nassr_FC_against_Persepolis%2C_September_2023_%28cropped%29.jpg/800px-Cristiano_Ronaldo_playing_for_Al_Nassr_FC_against_Persepolis%2C_September_2023_%28cropped%29.jpg",
        "stats" => ["goals" => 145, "matches" => 346]
    ],
    [
        "id" => 2,
        "name" => "BRUNO FERNANDES",
        "number" => 8,
        "position" => "Tiền vệ (Captain)",
        "avatar_url" => "https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Bruno_Fernandes_Mani_United_2023.jpg/640px-Bruno_Fernandes_Mani_United_2023.jpg",
        "stats" => ["goals" => 79, "matches" => 230]
    ],
    [
        "id" => 3,
        "name" => "MARCUS RASHFORD",
        "number" => 10,
        "position" => "Tiền đạo cánh",
        "avatar_url" => "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Marcus_Rashford_2023.jpg/640px-Marcus_Rashford_2023.jpg",
        "stats" => ["goals" => 131, "matches" => 398]
    ]
];

$team = [
    "name" => "MANCHESTER UNITED",
    "nickname" => "The Red Devils (Quỷ Đỏ)",
    "stadium" => "Old Traffordddd",
    "founded" => 1878
];

$data = [
    "players" => $players,
    "team" => $team
];

echo json_encode($data);
?>