<?php
header("X-Content-Type-Options: nosniff");
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

// Dữ liệu giả lập các bài báo
$articles = [
    [
        "id" => 1,
        "title" => "Công nghệ AI thay đổi thế giới lập trình như thế nào?",
        "category" => "Công Nghệ",
        "author" => "Minh Tuấn",
        "date" => "01/12/2023",
        "image_url" => "https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Artificial_intelligence_prompt_completion_by_model.jpg/640px-Artificial_intelligence_prompt_completion_by_model.jpg",
        "summary" => "Trí tuệ nhân tạo đang hỗ trợ các lập trình viên viết code nhanh hơn, nhưng liệu nó có thể thay thế hoàn toàn con người?"
    ],
    [
        "id" => 2,
        "title" => "Du lịch Việt Nam: Những địa điểm không thể bỏ lỡ mùa hè này",
        "category" => "Du Lịch",
        "author" => "Lan Hương",
        "date" => "30/11/2023",
        "image_url" => "https://upload.wikimedia.org/wikipedia/commons/thumb/e/ed/DJI_0550-HDR-Pano.jpg/640px-DJI_0550-HDR-Pano.jpg",
        "summary" => "Từ Vịnh Hạ Long hùng vĩ đến những bãi biển xanh ngắt tại Phú Quốc, hãy cùng khám phá vẻ đẹp bất tận của Việt Nam."
    ],
    [
        "id" => 3,
        "title" => "Thị trường chứng khoán tuần qua: Sắc xanh trở lại",
        "category" => "Kinh Tế",
        "author" => "Quốc Bảo",
        "date" => "29/11/2023",
        "image_url" => "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/New_York_Stock_Exchange_-_panoramio.jpg/640px-New_York_Stock_Exchange_-_panoramio.jpg",
        "summary" => "Sau chuỗi ngày giảm điểm, thị trường đã có dấu hiệu phục hồi tích cực nhờ dòng tiền từ các nhà đầu tư nước ngoài."
    ],
    [
        "id" => 4,
        "title" => "Sống xanh: Xu hướng tất yếu của tương lai",
        "category" => "Đời Sống",
        "author" => "Thanh Hằng",
        "date" => "28/11/2023",
        "image_url" => "https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Wind_farm_in_Xinjiang_China.jpg/640px-Wind_farm_in_Xinjiang_China.jpg",
        "summary" => "Giảm rác thải nhựa và sử dụng năng lượng tái tạo đang trở thành lối sống được giới trẻ hưởng ứng mạnh mẽ."
    ]
];

$site_info = [
    "name" => "VN DAILY NEWS",
    "description" => "Cập nhật tin tức nóng hổi, đa chiều và chính xác nhất.",
    "contact_email" => "toasoan@vndaily.com"
];

$data = [
    "articles" => $articles,
    "site_info" => $site_info
];

echo json_encode($data);
?>