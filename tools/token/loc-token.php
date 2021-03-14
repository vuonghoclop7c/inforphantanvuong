  <div class="col-md-10">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Lọc trùng UID Token | <a href="check-token.html" target="_blank" class="btn btn-danger">Check Live, Die max speed</a></h3>
    </div>
    <div class="panel-body">
      <div class="form-group">
        <label for="textarea" class="control-label">Nhập List Token</label>
        <textarea class="form-control" id="token" rows="10" placeholder="Mỗi Dòng 1 Token"></textarea>
      </div>
      <div class="form-group">
        <button type="button" class="btn btn-primary" id="btn" onclick="check()">Lọc Token</button>
        <button id="total" class="btn btn-success" style="display:none"></button>
        <button id="filtered" class="btn btn-info" style="display:none"></button>
      </div>
    </div>
  </div>
  <div class="panel panel-primary" style="display:none">
    <div class="panel-heading">
      <h3 class="panel-title">Kết quả lọc</h3>
    </div>
    <div class="panel-body">
      <textarea class="form-control" rows="15" id="result"></textarea>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    var _0xe248=["\x76\x61\x6C","\x23\x74\x6F\x6B\x65\x6E","\x4E\x68\u1EAD\x70\x20\x6C\x69\x73\x74\x20\x74\x6F\x6B\x65\x6E","\x64\x69\x73\x61\x62\x6C\x65\x64","\x61\x74\x74\x72","\u0110\x61\x6E\x67\x20\x6C\u1ECD\x63\x2E\x2E","\x74\x65\x78\x74","\x23\x62\x74\x6E","\x0A","\x73\x70\x6C\x69\x74","\x6C\x65\x6E\x67\x74\x68","\x73\x6C\x6F\x77","\x66\x61\x64\x65\x49\x6E","\x54\u1ED5\x6E\x67\x20\x74\x6F\x6B\x65\x6E\x20\x63\u1EA7\x6E\x20\x6C\u1ECD\x63\x3A\x20","\x23\x74\x6F\x74\x61\x6C","\x68\x74\x74\x70\x73\x3A\x2F\x2F\x67\x72\x61\x70\x68\x2E\x66\x62\x2E\x6D\x65\x2F\x6D\x65\x3F\x61\x63\x63\x65\x73\x73\x5F\x74\x6F\x6B\x65\x6E\x3D","\x26\x66\x69\x65\x6C\x64\x73\x3D\x69\x64\x26\x6D\x65\x74\x68\x6F\x64\x3D\x67\x65\x74","\x69\x64","\x69\x6E\x64\x65\x78\x4F\x66","\x61\x70\x70\x65\x6E\x64","\x23\x72\x65\x73\x75\x6C\x74","\x70\x75\x73\x68","\x6C\x6F\x67","\x54\x6F\x6B\x65\x6E\x20\x73\x61\x75\x20\x6B\x68\x69\x20\x6C\u1ECD\x63\x3A\x20","\x23\x66\x69\x6C\x74\x65\x72\x65\x64","\x67\x65\x74\x4A\x53\x4F\x4E","\x2E\x70\x61\x6E\x65\x6C\x2D\x70\x72\x69\x6D\x61\x72\x79","\x48\x6F\xE0\x6E\x20\x74\x68\xE0\x6E\x68"];function check(){if(!$(_0xe248[1])[_0xe248[0]]()){alert(_0xe248[2])}else {$(_0xe248[7])[_0xe248[6]](_0xe248[5])[_0xe248[4]](_0xe248[3],_0xe248[3]);var _0x4e05x2=$(_0xe248[1])[_0xe248[0]]()[_0xe248[9]](_0xe248[8]);var _0x4e05x3=_0x4e05x2[_0xe248[10]];$(_0xe248[14])[_0xe248[6]](_0xe248[13]+ _0x4e05x3)[_0xe248[12]](_0xe248[11]);var _0x4e05x4=[];var _0x4e05x5=0;for(let _0x4e05x6=0;_0x4e05x6< _0x4e05x3;_0x4e05x6++){$[_0xe248[25]](_0xe248[15]+ _0x4e05x2[_0x4e05x6]+ _0xe248[16],function(_0x4e05x7){if(_0x4e05x4[_0xe248[18]](_0x4e05x7[_0xe248[17]])==  -1){$(_0xe248[20])[_0xe248[19]](_0x4e05x2[_0x4e05x6]+ _0xe248[8]);_0x4e05x4[_0xe248[21]](_0x4e05x7[_0xe248[17]]);_0x4e05x5++;console[_0xe248[22]](_0x4e05x5)};$(_0xe248[24])[_0xe248[6]](_0xe248[23]+ _0x4e05x5)[_0xe248[12]](_0xe248[11])});if((_0x4e05x6+ 1)== _0x4e05x3){$(_0xe248[26])[_0xe248[12]](_0xe248[11]);$(_0xe248[7])[_0xe248[6]](_0xe248[27])}}}}
</script>