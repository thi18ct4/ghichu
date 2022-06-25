    <div class="modal fade" id="modalDeleteNote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-trash"></span> Xoá note</h4>
                </div>
                <div class="modal-body">
                    <p>Bạn có chắc muốn xoá note này không ?</p>
                    <div class="alert alert-danger hidden"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Không</button>
                    <button type="button" class="btn btn-primary" id="submit_delete_note">Đồng ý</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalCopy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-share"></span>Chia sẻ note</h4>
                </div>
                <div class="modal-body">
                    <p>Chép link này để chia sẻ với bạn bè:<p>
                    <input type="text" id="link" value="http://localhost/web/view.php?id=<?php echo $data_note['id_note']; ?>" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary" id="submit_delete_note" onclick="copylink()">Sao chép</button>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- script copy link share -->
    <script>
        function copylink() {
            var copyText = document.getElementById("link");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand("copy");
        }

    </script>


    <script src="js/jquery.min.js"></script>
    <script src="js/plugins/autogrow.js"></script>
    <script src="js/functions/signup.js"></script>
    <script src="js/functions/signin.js"></script>
    <script src="js/functions/note.js"></script>
    <script src="js/functions/change-pass.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>