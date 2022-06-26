<?php
#danh mục
$list_product_cat=array(
    1=>array(
        'id'=>1,
        'cat_title'=>"Điện thoại"
    ),
    2=>array(
        'id'=>2,
        'cat_title'=>"Macbook"
    ),
//    3=>array(
//        'id'=>3,
//        'cat_title'=>"Laptop"
//    ),
);
#dữ liệu sản phẩm
$list_product=array(
    1=>array(
        'id'=>1,
        'product_title'=>'Samsung Galaxy S22+ 5G 128GB',
        'price'=>25990000,
        'code'=>'UNI#1',
        'product_desc'=>'Samsung Galaxy S22+ 5G 128 GB được Samsung cho ra mắt với với ngoại hình không đổi nhưng được nâng cấp đáng kể về thông số cấu hình bên trong và thời gian sử dụng tốt, chắc hẳn sẽ mang lại những trải nghiệm thú vị dành cho bạn',
        'product_thumb'=>'https://cdn.tgdd.vn/Products/Images/42/223602/iphone-13-midnight-2-600x600.jpg',
        'product_content'=>"<p>Galaxy S22+ 5G thiết kế bền bỉ với khung viền từ hợp kim Armor Aluminum cứng cáp, trang bị kính cường lực Gorilla Glass Victus+ giúp hạn chế trầy xước cho bạn thoải mái sử dụng thiết bị hơn khi sử dụng.</p>
        <p><img src='https://cdn.tgdd.vn/Products/Images/42/242439/samsung-galaxy-s22-plus-4.jpeg'/></p>",
        'cat_id'=>1,
    ),
    2 => array(
        'id' => 2,
        'product_title' => 'Samsung Galaxy Z Flip3 5G 256GB',
        'price' => 26990000,
        'code' => 'UNI#2',
        'product_desc' => 'Nối tiếp thành công của Galaxy Z Flip 5G, trong sự kiện Galaxy Unpacked vừa qua Samsung tiếp tục giới thiệu đến thế giới về Galaxy Z Flip3 5G 256GB',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/248283/samsung-galaxy-z-flip-3-cream-1-600x600.jpg',
        'product_content' => "<p>Samsung Galaxy Z Flip3 5G dễ dàng lấy lòng phái nữ khi thiết kế của nó được lấy cảm hứng từ hộp đựng phấn trang điểm. Kết hợp với 7 màu sắc khác nhau, giúp bạn thoải mái thể hiện cá tính, từ mạnh mẽ sang trọng đến hiện đại trẻ trung.</p><p><img src='https://cdn.tgdd.vn/Products/Images/42/248283/samsung-galaxy-z-flip-3-256gb-14.jpg'></p>",
        'cat_id' => 1,
    ),
    3 => array(
        'id' => 3,
        'product_title' => 'OPPO Reno6 Pro 5G',
        'price' => 18490000,
        'code' => 'UNI#3',
        'product_desc' => 'OPPO Reno6 Pro 5G - một sản phẩm thuộc dòng Reno6 của OPPO, thỏa mãn những gì người tiêu dùng đã trông đợi với cấu hình khủng cùng hệ thống camera cực ấn tượng và ngoại hình bắt mắt, thật hào hứng mong chờ để được trải nghiệm.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/236187/oppo-reno6-pro-blue-1-600x600.jpg',
        'product_content' => "<p>Reno6 Pro 5G trang bị bộ vi xử lý mạnh mẽ Snapdragon 870 đến từ Qualcomm, đạt tốc độ xử lý cao trên xung nhịp lên đến 3.2 GHz, hiệu suất CPU tăng lên 12% và GPU 10% so với thế hệ chipset tiền nhiệm, mang đến trải nghiệm ấn tượng trên từng tác vụ giải trí lẫn công việc.</p><p><img src='https://cdn.tgdd.vn/Products/Images/42/236187/oppo-reno6-pro-16-1.jpg'></p>",
        'cat_id' => 1,
    ),
    4 => array(
        'id' => 4,
        'product_title' => 'Laptop Asus ROG Zephyrus G14 ',
        'price' => 49990000,
        'code' => 'UNI#4',
        'product_desc' => 'Cùng bạn đối đầu mọi thách thức trên chiến trường ảo nhờ bộ vi xử lý mạnh mẽ AMD và phong cách thiết kế độc đáo',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/251426/gigabyte-gaming-g5-i5-5s11130sh-191021-102800-600x600.jpg',
        'product_content' => "<p>Một điểm đặc biệt trên chiếc Asus ROG này là công nghệ Anime Matrix, bạn hoàn toàn có thể tự thiết kế dải đèn với 1.215 đèn LED mini trên lưng máy theo những hình ảnh yêu thích bằng chính phần mềm có sẵn ở laptop.</p><p><img src='https://cdn.tgdd.vn/Products/Images/44/251418/asus-rog-zephyrus-gaming-g14-ga401qec-r9-k2064t-4-1.jpg'></p>",
        'cat_id' => 2,
    ),
     5 => array(
        'id' => 5,
        'product_title' => 'Laptop Dell Gaming G3 15 i7',
        'price' =>31990000,
        'code' => 'UNI#5',
        'product_desc' => 'Laptop Dell G3 15 i7 (P89F002BWH) thuộc dòng laptop gaming với cấu hình mạnh mẽ, thiết kế trang nhã và rất sang trọng',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/244385/dell-g3-15-i7-p89f002bwh-16-600x600.jpg',
        'product_content' => "<p>Được đưa vào phân khúc laptop gaming, Dell G3 vì thế trang bị vẻ ngoài cũng mang hơi hướng mạnh mẽ, cá tính, nhưng đủ tinh tế và rất sang trọng để người dùng có thể thoải mái mang theo sử dụng ở mọi nơi.</p><p><img src='https://cdn.tgdd.vn/Products/Images/44/244385/dell-g3-15-i7-p89f002bwh-6-1.jpg'></p>",
        'cat_id' => 2,
    ),
    6 => array(
        'id' => 6,
        'product_title' => 'Laptop HP EliteBook X360 830 G8 i7',
        'price' =>41290000,
        'code' => 'UNI#6',
        'product_desc' => 'Laptop HP EliteBook X360 830 G8 i7 (3G1A4PA) thuộc dòng laptop cao cấp - sang trọng với lớp vỏ kim loại sáng bóng, mỏng nhẹ và hiệu năng mạnh mẽ nhờ con chip Intel thế hệ 11 hứa hẹn sẽ là một trợ thủ đắc lực của bạn trong công việc.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/242411/hp-elitebook-x360-830-g8-i7-3g1a4pa-19-600x600.jpg',
        'product_content' => "<p>Lớp vỏ chiếc laptop HP này được chế tác hoàn toàn từ kim loại đem lại sự cứng cáp để bảo vệ các linh kiện bên trong nhưng vẫn đảm bảo tính thẩm mỹ với gam màu bạc thời thượng, máy cũng vô cùng mỏng nhẹ với trọng lượng chỉ 1.476 kg và mỏng 17.8 mm bạn có thể dễ dàng để vào balo, túi xách mang theo bên mình sẵn sàng xử lý công việc bất cứ lúc nào.</p><p><img src='https://cdn.tgdd.vn/Products/Images/44/242411/hp-elitebook-x360-830-g8-i7-3g1a4pa-2.jpg'></p>",
        'cat_id' => 2,
    ),
);