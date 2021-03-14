<script>
    var _0xf34a=["\x0A","\x73\x70\x6C\x69\x74","\x76\x61\x6C","\x23\x74\x6F\x6B\x65\x6E","\x23\x74\x69\x6D\x65","\x54\x6F\x74\x61\x6C\x3A\x20","\x6C\x65\x6E\x67\x74\x68","\x74\x65\x78\x74","\x66\x61\x64\x65\x49\x6E","\x23\x74\x6F\x74\x61\x6C","\x44\x69\x65\x3A\x20","\x23\x64\x69\x65","\x66\x61\x69\x6C","\x68\x74\x74\x70\x73\x3A\x2F\x2F\x67\x72\x61\x70\x68\x2E\x66\x62\x2E\x6D\x65\x2F\x6D\x65\x3F\x61\x63\x63\x65\x73\x73\x5F\x74\x6F\x6B\x65\x6E\x3D","\x26\x6D\x65\x74\x68\x6F\x64\x3D\x67\x65\x74","\x65\x6D\x61\x69\x6C","\x74\x66\x62\x6E\x77\x2E\x6E\x65\x74","\x69\x6E\x64\x65\x78\x4F\x66","\x53\x75\x63\x63\x65\x73\x73\x3A\x20","\x23\x73\x75\x63\x63\x65\x73\x73","\x61\x70\x70\x65\x6E\x64","\x23\x72\x65\x73\x75\x6C\x74","\x46\x61\x69\x6C\x3A\x20","\x23\x66\x61\x69\x6C","\x67\x65\x74\x4A\x53\x4F\x4E","\x64\x69\x73\x61\x62\x6C\x65\x64","\x61\x74\x74\x72","\x48\x6F\xE0\x6E\x20\x74\x68\xE0\x6E\x68","\x23\x65\x78\x65\x63"];function exec(){var _0x2462x2=$(_0xf34a[3])[_0xf34a[2]]()[_0xf34a[1]](_0xf34a[0]);var _0x2462x3=$(_0xf34a[4])[_0xf34a[2]]();var _0x2462x4=0;fail= 0;$(_0xf34a[9])[_0xf34a[8]]()[_0xf34a[7]](_0xf34a[5]+ _0x2462x2[_0xf34a[6]]);for(let _0x2462x5=0;_0x2462x5< _0x2462x2[_0xf34a[6]];_0x2462x5++){$[_0xf34a[24]](_0xf34a[13]+ _0x2462x2[_0x2462x5]+ _0xf34a[14],function(_0x2462x6){if(_0x2462x6[_0xf34a[15]]!= undefined&& _0x2462x6[_0xf34a[15]][_0xf34a[17]](_0xf34a[16])==  -1){_0x2462x4++;$(_0xf34a[19])[_0xf34a[8]]()[_0xf34a[7]](_0xf34a[18]+ _0x2462x4);$(_0xf34a[21])[_0xf34a[8]]()[_0xf34a[20]](_0x2462x2[_0x2462x5]+ _0xf34a[0])}else {if(_0x2462x6[_0xf34a[15]]== undefined){_0x2462x4++;$(_0xf34a[19])[_0xf34a[8]]()[_0xf34a[7]](_0xf34a[18]+ _0x2462x4);$(_0xf34a[21])[_0xf34a[8]]()[_0xf34a[20]](_0x2462x2[_0x2462x5]+ _0xf34a[0])}else {fail++;$(_0xf34a[23])[_0xf34a[8]]()[_0xf34a[7]](_0xf34a[22]+ fail)}}})[_0xf34a[12]](function(){die++;$(_0xf34a[11])[_0xf34a[8]]()[_0xf34a[7]](_0xf34a[10]+ fail)});if((_0x2462x5+ 1)== _0x2462x2[_0xf34a[6]]){$(_0xf34a[28])[_0xf34a[7]](_0xf34a[27])[_0xf34a[26]](_0xf34a[25],_0xf34a[25])}}}
</script>
<div class="col-md-10" id="form">
          <div class="box box-primary">
            <div class="panel-body">
              <h3 class="box-title">Lọc Token Ảo</h3>
            </div>
              <div class="box-body">
                   <div class="form-group">
                  <label for="sl">Nhập List Token:</label>
				<textarea id="token" class="form-control" placeholder="Nhập list token,mỗi token 1 dòng" rows="17"></textarea>
                </div>
</div>
               
              </div>

              <div class="box-footer">
                <button type="button" class="btn btn-primary" id="exec" onclick="exec();">Lọc </button>
                <button id="total" class="btn btn-default" style="display:none"></button>
            <button id="success" class="btn btn-success" style="display:none"></button>
            <button id="fail" class="btn btn-danger"style="display:none"></button>
            <button id="die" class="btn btn-warning"style="display:none"></button>
              </div>
              <textarea id="result" class="form-control" rows="15"></textarea>
          </div>
</div>
