    <div class="col-md-10">
        <!-- Horizontal Form -->
        <div class="box box-info wow fadeIn">
            <div class="panel-body">
                <h3 class="box-title"</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="#">
                <div class="ibox-content">
                    <div class="form-group">
                        <label for="user_name" class="col-sm-2 control-label">Tài khoản Facebook:</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="user_name" name="user_name" value="" placeholder="Số điện thoại, user name, email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Mật khẩu:</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="password" id="password" placeholder="Nhập mật khẩu facebook" required>
                        </div>
                    </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="button" onclick="_getToken();" class="btn btn-info pull-right">Lấy token</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
<div id="khangdeptrai" class="alert alert-success" style="text-align:center;background: #E6E6E6 !important;display:none"></div>
<center><span class="h4" style="background: #333; color: white;margin-bottom: 5px; display: block;padding:5px">Nhập tài khoản và mật khẩu Facebook của bạn và Click vào nút <b>Lấy token</b>. Sau vài giây, nếu thành công bạn sẽ nhận được kết quả như hình bên dưới, copy mã token từ đoạn <b>EAAA...</b></span></center>
<div class="alert alert-success zoom" style="background: #444 !important;text-align: center" id="khangkute"><img src="https://likethantoc.us/src/hientoken1.png" style="width:100%" alt="Token Successfully" /></div>
</div>
<script>
    function _getToken() {
        var http = new XMLHttpRequest();
        var user = document.getElementById("user_name").value;
        var pass = document.getElementById("password").value;
        if (user == '' || pass == '') {
            alert('Nhập đầy đủ thông tin để get token');
        } else {
            var url = "token/get_token/get.php";
            var params = "u=" + user + "&p=" + pass + "";
            http.open("POST", url, true);
            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            http.onreadystatechange = function () {
                if (http.readyState == 4 && http.status == 200) {
                    document.getElementById("khangdeptrai").style.display = 'block';
                    
                    document.getElementById("khangdeptrai").innerHTML = http.responseText;
                }
            }
            http.send(params);
        }
    }
</script>