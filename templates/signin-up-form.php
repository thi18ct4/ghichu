<div class="container">
    <div id="singin-up-form">
        <div class="col col-md-12">
            <div class="row">
                <h3>Đăng nhập</h3>
                <form method="POST" onsubmit="return false;" id="formSignin">
                    <div class="form-group">
                        <label for="user_signin">Tên đăng nhập</label>
                        <input type="text" class="form-control" id="user_signin" required>
                    </div>
                    <div class="form-group">
                        <label for="pass_signin">Mật khẩu</label>
                        <input type="password" class="form-control" id="pass_signin" required>
                    </div>
                    <button class="btn btn-primary" id="submit_signin">Đăng nhập</button>
                    <br><br>
                    <div class="alert alert-danger hidden"></div>
                </form>
            </div>
            <div class="row">
                <h3>Đăng ký tài khoản</h3>
                <p>* Vui lòng nhập đầy đủ thông tin dưới đây để đăng ký tài khoản</p>
                <form method="POST" onsubmit="return false;" id="formSignup">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Tên đăng nhập" id="user_signup" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Mật khẩu" id="pass_signup" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Nhập lại mật khẩu" id="repass_signup" required>
                    </div>
                    <button class="btn btn-success" id="submit_signup">Tạo tài khoản</button>
                    <br><br>
                    <div class="alert alert-danger hidden"></div>
                </form>
            </div>
        </div>
    </div>
</div>