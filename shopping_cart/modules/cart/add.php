<?php
#lấy được thông tin sản phẩm cần thêm vào giỏ hàng
$id=(int) $_GET['id'];
add_cart($id);
redirect('?mod=cart&act=show');


