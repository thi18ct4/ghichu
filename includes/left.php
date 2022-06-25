<!-- left content -->
<div id="left">
    <!-- toolbox -->
    <div class="toolbox">
        <a class="btn btn-large" href="index.php?ac=create_note">
            <i class="fa fa-pencil">Ghi chú mới</i>
        </a>
    </div>
    <!-- ./toolbox -->
    <!-- list -->
    <h4 class="text-light"><a href="index.php"> Danh sách các ghi chú</a></h4>
        <div class="list-group">
        <?php
        // Lênh SQL lấy danh sách note theo ID user
        $sql_get_data_list_note = "SELECT * FROM notes WHERE user_id = '$data_user[id_user]' ORDER BY date_created DESC";

        // Nếu có
        if ($db->num_rows($sql_get_data_list_note)) {
            // In danh sách ghi chú
            foreach ($db->fetch_assoc($sql_get_data_list_note, 0) as $key => $data_list_note) {
                $date_created = $data_list_note['date_created'];
                $day_created = substr($date_created, 8, 2); // Ngày tạo
                    $month_created = substr($date_created, 5, 2); // Tháng tạo
                    $year_created = substr($date_created, 0, 4); // Năm tạo
                    $hour_created = substr($date_created, 11, 2); // Giờ tạo
                    $min_created = substr($date_created, 14, 2); // Phút tạo

                // Chấm 3 chấm khi nội dung ghi chú dài hơn 300 ký tự
                if (strlen($data_list_note['body']) > 300) {
                    $data_list_note['body'] = substr($data_list_note['body'], 0, 300).' ...';
                } else {
                    $data_list_note['body'] = $data_list_note['body'];
                }

                echo '
                    <a href="index.php?ac=edit_note&id='.$data_list_note['id_note'].'" class="list-group-item ">
                        <h4>'.$data_list_note['title'].'</h4>
                        <small> Tạo ngày
                            '.$day_created.' tháng
                            '.$month_created.' năm
                            '.$year_created.' lúc
                            '.$hour_created.':'.$min_created.'
                        </small>
                    </a>         
                ';
            }
        }

    ?>
    </div>
    <!-- ./list -->
</div>
<!-- ./left -->
