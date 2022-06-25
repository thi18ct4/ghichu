<?php
 
// Lệnh SQL lấy dữ liệu note theo ID
$sql_get_data_note = "SELECT * FROM notes WHERE user_id = '$data_user[id_user]' AND id_note = '$get_id'";

// Lấy dữ liệu
$data_note = $db->fetch_assoc($sql_get_data_note, 1);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-primary">Chỉnh sửa note</h3>
            <div class="alert alert-info">Đã tạo vào ngày
            <?php
                // Hiển thị ngày tháng tạo
                echo $day_created;
            ?>
            </div>
            <form method="POST" onsubmit="return false;" id="formEditNote">
                <div class="form-group">
                    <label for="user_signin">Tiêu đề</label>
                    <input type="text" class="form-control" id="title_edit_note" value="<?php echo $data_note['title'];  ?>">
                </div>
                <div class="form-group">
                    <label for="pass_signin">Nội dung</label>
                    <textarea class="form-control" id="body_edit_note" rows="5"><?php echo $data_note['body'];  ?></textarea>
                </div>
                <div class="form-check-inline form-check">
                    <input type="checkbox" value="1" name="share" id="share" class="form-check-input"<?php if (isset($data_note['share']) && $data_note['share']) {
                echo ' checked="checked"';
            }?>>
                    <label for="share" class="form-check-label mx-5">Chia sẻ</label>
                </div>
                <input type="hidden" value="<?php echo $data_note['id_note']; ?>" id="id_edit_note">
                <a href="index.php" class="btn btn-default">
                    <span class="glyphicon glyphicon-arrow-left"></span> Trở về
                </a>
                <button class="btn btn-danger mx-3 pull-right" data-toggle="modal" data-target="#modalDeleteNote">
                    <span class="glyphicon glyphicon-trash"></span> Xoá
                </button>

                <button class="btn btn-success mx-3 pull-right" data-toggle="modal" data-target="#modalCopy">
                    <span class="glyphicon glyphicon-share"></span> <b id="sharelink">Chia sẻ</b>
                </button>

                <button class="btn btn-primary" id="submit_edit_note">
                    <span class="glyphicon glyphicon-ok"></span> Lưu
                </button>
                <br><br>
                <div class="alert alert-danger hidden"></div>
            </form>
        </div>
    </div>
</div>
