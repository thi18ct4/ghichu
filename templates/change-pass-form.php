<div class="right">

    <form method="POST" onsubmit="return false;" id="formChangePass">
        <div class="form-group">
            <label for="user_signin">Mật khẩu cũ</label>
            <input type="password" class="form-control" id="old_pass">
        </div>
        <div class="form-group">
            <label for="user_signin">Mật khẩu mới</label>
            <input type="password" class="form-control" id="new_pass">
        </div>
        <div class="form-group">
            <label for="user_signin">Nhập lại mật khẩu mới</label>
            <input type="password" class="form-control" id="re_new_pass">
        </div>
        <a href="index.php" class="btn btn-default">
            <span class="glyphicon glyphicon-arrow-left"></span> Trở về
        </a>
        <button class="btn btn-primary" id="submit_change_pass">
            <span class="glyphicon glyphicon-ok"></span> Thay đổi
        </button>
        <br><br>
        <div class="alert alert-danger hidden"></div>
    </form>
        
</div>