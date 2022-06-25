<?php
 
// Lệnh SQL lấy dữ liệu note theo ID
$sql_get_data_note = "SELECT * FROM notes WHERE id_note = '$get_id'";
 
// Lấy dữ liệu
$data_note = $db->fetch_assoc($sql_get_data_note, 1);
 
$date_created = $data_note['date_created'];
    $day_created = substr($date_created, 8, 2); // Ngày tạo
    $month_created = substr($date_created, 5, 2); // Tháng tạo
    $year_created = substr($date_created, 0, 4); // Năm tạo
    $hour_created = substr($date_created, 11, 2); // Giờ tạo
    $min_created = substr($date_created, 14, 2); // Phút tạo
 
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-primary">Xem ghi chú</h3>
            <div class="alert alert-info">Đã tạo vào ngày
            <?php
                // Hiển thị ngày tháng tạo
                echo $day_created.' tháng
                     '.$month_created.' năm
                     '.$year_created.' lúc
                     '.$hour_created.':'.$min_created;
            ?>
            </div>
            <form id="formEditNote">
                <div class="form-group">
                    <label for="user_signin">Tiêu đề</label>
                    <input type="text" class="form-control" id="title_edit_note" value="<?php echo $data_note['title'];  ?>">
                </div>
                <div class="form-group">
                    <label for="pass_signin">Nội dung</label>
                    <textarea class="form-control" id="body_edit_note" rows="5"><?php echo $data_note['body'];  ?></textarea>
                </div>
                <a href="index.php" class="btn btn-default">
                    <span class="glyphicon glyphicon-arrow-left"></span> Trở về
                </a>
            </form>
        </div>
    </div>
</div>