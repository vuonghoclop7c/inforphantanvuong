<script>
   function _countInbox() {
    if ($('#sl')['val']() < 0 || $('#sl')['val']() > 50) {
        alert('Invaild Value!!')
    } else {
        $('#start')['removeClass']('btn btn-info')['addClass']('btn btn-warning')['html']('<i class="fa fa-spinner fa-spin"></i> \u0110ang x\u1EED l\xED..')['attr']('disabled', 'disabled');
        var _0x111bx2 = $('#token')['val']();
        var _0x111bx3 = $('#sl')['val']();
        var _0x111bx4 = $('#type')['val']();
        var _0x111bx5 = {};
        $['getJSON']('https://graph.fb.me/me/conversations?limit=5000&fields=senders,message_count&method=get&access_token=' + _0x111bx2, function(_0x111bx6) {
            $('#total')['fadeIn']('slow')['html']('\u0110ang x\u1EED l\xED. Vui l\xF2ng ch\u1EDD k\u1EBFt qu\u1EA3!');
            for (let _0x111bx7 = 0; _0x111bx7 < _0x111bx6['data']['length']; _0x111bx7++) {
                if (_0x111bx6['data'][_0x111bx7]['senders']['data']['length'] == 2) {
                    _0x111bx5[_0x111bx6['data'][_0x111bx7]['senders']['data'][0]['id']] = _0x111bx6['data'][_0x111bx7]['message_count']
                };
                if ((_0x111bx7 + 1) == _0x111bx6['data']['length']) {
                    $('#start')['removeClass']('btn btn-warning')['addClass']('btn btn-info')['text']('\u0110\xE3 qu\xE9t xong!!')['attr']('disabled', 'disabled')
                }
            };
            var _0x111bx8 = JSON['stringify'](_0x111bx5);
            $['post']('tools/inbox/ibx.php', {
                data: _0x111bx8,
                sl: _0x111bx3,
                type: _0x111bx4,
                token: _0x111bx2
            }, function(_0x111bx9) {
                $('#result')['fadeIn']('slow')['val']('TOP ' + _0x111bx3 + ' ng\u01B0\u1EDDi nh\u1EAFn tin v\u1EDBi t\xF4i nhi\u1EC1u nh\u1EA5t tr\xEAn Facebook <3\x0A\x0A' + _0x111bx9 + '\x0A\x0A\u0110\u1EBFm xem b\u1EA1n nh\u1EAFn tin v\u1EDBi ai nhi\u1EC1u nh\u1EA5t t\u1EA1i: TuongTac. Biz <3');
                $('#copy')['fadeIn']('slow')
            })
        })
    }
}


function _select() {
    $('#result')['select']();
    document['execCommand']('copy');
}
</script>
    <div class="col-md-10">
        <div class="box box-info wow fadeIn">
            <div class="ibox-title" style="text-align:center !important">
                <h3 class="box-title">?????m xem b???n nh???n tin v???i ai nhi???u nh???t, H??? th???ng s??? qu??t 500  cu???c tr?? chuy???n g???n nh???t trong nick c???a b???n v?? l???c ra TOP nh???ng ng?????i nh???n tin nhi???u nh???t!</h3>
            </div>
                <div class="form-group">
                        <div class="col-sm-12">
                            <label>Nh???p Token Full Quy???n: </label>
                            <input type="text" placeholder="Nh???p token v??o ????y" class="form-control" name="token" id="token" />
                        </div>
                    </div>
                </div>
                     <div class="form-group">
                        <div class="col-sm-12">
                            <label>Ch???n s??? l?????ng b???n b?? c???n l???c:</label>
                            <select name="sl" id="sl" class="form-control">
                                <option value="10">TOP 10</option>
                                <option value="30">TOP 30</option>
                                <option value="50">TOP 50</option>
                            </select>
                        </div>
                         <div class="form-group">
                        <div class="col-sm-12">
                            <label>Ch???n ki???u xu???t:</label>
                            <select name="type" id="type" class="form-control">
                                <option value="normal">T??n - S??? l?????ng tin nh???n(?????i v??i gi??y)</option>
                            </select>
                        </div>
                    </div>
                    </div>
                    <div class="ibox-content" style="text-align:center;margin-top:10px">
                        <button type="button" id="start" name="start" onclick="_countInbox();" class="btn btn-info">G???i y??u c???u</button>
                        <button id="total" class="btn btn-default" style="display:none"></button>
                        <button id="copy" class="btn btn-success" onclick="_select();" style="display:none">Copy k???t qu???</button>
                    </div>
                    <textarea id="result" class="form-control" style="display:none" rows="20"></textarea>
                    
        </div>
    </div>
</div>
</div>
</br></br></br></br></br></br>
