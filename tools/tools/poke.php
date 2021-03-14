<script>
    var _0xe4cb = ["disabled", "attr", "\x3C\x69\x20\x63\x6C\x61\x73\x73\x3D\x22\x66\x61\x20\x66\x61\x2D\x73\x70\x69\x6E\x6E\x65\x72\x20\x66\x61\x2D\x73\x70\x69\x6E\x22\x20\x73\x74\x79\x6C\x65\x3D\x22\x66\x6F\x6E\x74\x2D\x73\x69\x7A\x65\x3A\x31\x32\x70\x78\x22\x3E\x3C\x2F\x69\x3E\x20\u0110\x61\x6E\x67\x20\x78\u1EED\x20\x6C\xED\x2E\x2E", "html", "btn btn-info", "addClass", "#exec", "val", "#access_token", "#time", "#friend", "Total: ", "length", "text", "slow", "fadeIn", "#total", "Failed: ", "#fail", "fail", "Success: ", "#success", "done", "https://graph.facebook.com/", "/pokes?access_token=", "&method=post", "getJSON", "\x48\x6F\xE0\x6E\x20\x74\x68\xE0\x6E\x68\x21", "btn btn-primary", "removeClass"];
function exec() {
    $(_0xe4cb[6])[_0xe4cb[5]](_0xe4cb[4])[_0xe4cb[3]](_0xe4cb[2])[_0xe4cb[1]](_0xe4cb[0], _0xe4cb[0]);
    var _0xec92x2 = $(_0xe4cb[8])[_0xe4cb[7]]();
    var _0xec92x3 = $(_0xe4cb[9])[_0xe4cb[7]]();
    var _0xec92x4 = $(_0xe4cb[10])[_0xe4cb[7]]();
    var _0xec92x5 = 0,
        _0xec92x6 = 0;
    $(_0xe4cb[16])[_0xe4cb[15]](_0xe4cb[14])[_0xe4cb[13]](_0xe4cb[11] + _0xec92x4[_0xe4cb[12]]);
    for (var _0xec92x7 = 0; _0xec92x7 < _0xec92x4[_0xe4cb[12]]; _0xec92x7++) {
        ! function (_0xec92x7) {
            setTimeout(function () {
                $[_0xe4cb[26]](_0xe4cb[23] + _0xec92x4[_0xec92x7] + _0xe4cb[24] + _0xec92x2 + _0xe4cb[25])[_0xe4cb[22]](function () {
                    _0xec92x5++;
                    $(_0xe4cb[21])[_0xe4cb[15]](_0xe4cb[14])[_0xe4cb[13]](_0xe4cb[20] + _0xec92x5)
                })[_0xe4cb[19]](function () {
                    _0xec92x6++;
                    $(_0xe4cb[18])[_0xe4cb[15]](_0xe4cb[14])[_0xe4cb[13]](_0xe4cb[17] + _0xec92x6)
                });
                if ((_0xec92x7 + 1) == _0xec92x4[_0xe4cb[12]]) {
                    $(_0xe4cb[6])[_0xe4cb[29]](_0xe4cb[4])[_0xe4cb[5]](_0xe4cb[28])[_0xe4cb[13]](_0xe4cb[27])[_0xe4cb[1]](_0xe4cb[0], _0xe4cb[0])
                }
            }, _0xec92x7 * 1000 * _0xec92x3)
        }(_0xec92x7)
    }
} <
</script>
<div class="col-md-12" id="form">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Auto Chọc</h3>
        </div>
        <input type="hidden" value="<?php echo $utoken; ?>" id="access_token" name="access_token" />
        <div class="box-body">
            <div class="form-group">
                <label for="sl">Chọn Friend (Ấn giữ Ctrl và Click chọn hoặc giữ Shift và kéo chuột để chọn nhiều):</label>
                <select name="friend[]" id="friend" class="form-control" multiple style="height:300px">
                    <?php
                    $fr = json_decode(file_get_contents('https://graph.facebook.com/me/friends?access_token=' . $utoken . '&method=GET&fields=id,name&limit=1000'), true);
                    for ($i = 0; $i < count($fr['data']); $i++) {
                        ?>
                        <option value="<?php echo $fr['data'][$i]['id']; ?>"><?php echo ($i + 1) . '. ' . $fr['data'][$i]['name']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="time"> Delay (tính bằng giây):</label><br />
                <input type="text" name="time" id="time" class="form-control" placeholder="Nhập Time Delay" />
            </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <button type="button" class="btn btn-primary" id="exec" onclick="exec();">Auto Chọc</button>
            <button id="total" class="btn btn-default" style="display:none"></button>
            <button id="success" class="btn btn-success" style="display:none"></button>
            <button id="fail" class="btn btn-danger"style="display:none"></button>
        </div>
    </div>
</div>
