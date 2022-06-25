<!-- middle content -->
<div id="middle">
    <div class="row">
        <div class="col-md-12">
<?php 
    if (isset($_GET['ac'])) {
        $ac = addslashes(trim(htmlentities($_GET['ac'])));
        
    }
    else{
        $ac = 'create_note';
    }
    if ($ac == 'edit_note' ) {
        if (isset($_GET['id'])) {
            $get_id = addslashes(trim(htmlentities($_GET['id'])));
            if ($get_id != '') {
                // Lệnh truy vấn kiểm tra sự tồn tại và quyền sở hữu note
                $sql_check_id_exist = "SELECT id_note, user_id FROM notes WHERE user_id = '$data_user[id_user]' AND id_note = '$get_id'";
                // Nếu có tồn tại và thuộc quyền sở hữu
                if ($db->num_rows($sql_check_id_exist)) {
                    // Lệnh SQL lấy dữ liệu note theo ID
                    $sql_get_data_note = "SELECT * FROM notes WHERE user_id = '$data_user[id_user]' AND id_note = '$get_id'";

                    // Lấy dữ liệu
                    $data_note = $db->fetch_assoc($sql_get_data_note, 1);
                    
?>
        <form method="POST" onsubmit="return false;" id="formCreateNote">
            <div class="form-group">
                <textarea class="form-control" id="body_edit_note"><?php echo $data_note['body'];  ?></textarea>
            </div>
            <div class="form-check-inline form-check">
                <input type="checkbox" value="1" name="share" id="share" class="form-check-input"<?php if (isset($data_note['share']) && $data_note['share']) {echo ' checked="checked"';}?>>
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
        <?php 
                }else {
                   
                    // Hiển thị thông báo lỗi
                    echo '
                    <div class="container">
                        <div class="alert alert-danger">
                            Ghi chú này không tồn tại hoặc không thuộc quyền sở hữu của bạn.
                        </div>
                    </div>
                ';
                }
            }
            // Ngược lại không có ID truyền vào
            else {
                header('Location: index.php'); // Di chuyển về trang chủ
            }
        } else {
            header('Location: index.php'); // Di chuyển về trang chủ
        }
    }
    else {
        ?>
            <form method="POST" onsubmit="return false;" id="formCreateNote">
                <div class="form-group">
                    <textarea class="form-control" id="body_create_note" rows="17"></textarea>
                </div>
                <a href="index.php" class="btn btn-default">
                    <span class="glyphicon glyphicon-arrow-left"></span> Trở về
                </a>
                <button class="btn btn-primary" id="submit_create_note">
                    <span class="glyphicon glyphicon-ok"></span> Tạo ghi chú
                </button>
                <br><br>
                <div class="alert alert-danger hidden"></div>
            </form>
<?php 

    }
?>
        </div>
    </div>
</div>
<!-- ./middle content -->
