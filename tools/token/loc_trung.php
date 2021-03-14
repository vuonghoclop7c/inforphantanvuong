                <div class="panel-heading">
                    <h3>Lọc Token Trùng</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label>* Nhập Vào Token:</label>
                            <textarea type="text" name="" id="token" rows="6" class="form-control" placeholder="Mỗi Token 1 Dòng"></textarea>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <label>* Đã Lọc:</label>
                            <textarea type="text" name="" id="daloc" rows="6" class="form-control" placeholder="List Token "></textarea>
                        </div>
                        <div class="form-group">
                            <span class="label label-primary">Tổng: <b id="alltoken">0</b></span>
                            <span class="label label-success">Còn Lại: <b id="sodl">0</b></span>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group button-action">
                            <button type="button" class="btn btn-success" onclick="loctrung();">Tiến Hành</button>
                        </div>
                    </div>
                </div>
            </div>
    
    <script type="text/javascript">
        function loctrung() {
            var itoken = $('#token').val().split("\n")
            $('#alltoken').html(itoken.length);
            var text = document.getElementById('token').value.replace(/\r/g, '');
            var textinarr = text.split('\n');
            var len = textinarr.length;
            var textoutarr = new Array();
            var textoutarrcnt = 0;
            var cachearr = new Array();
            var cachecnt = 0;
            var hash = {};
            var xkey = '';
            var hkey = '';
            for (var x = 0; x < len; x++) {
                xkey = textinarr[x];
                hkey = ' ' + xkey;
                if (hash[hkey] == null && xkey != '') {
                    hash[hkey] = x + 1;
                    textoutarr[textoutarrcnt] = xkey;
                    textoutarrcnt++;
                } else {
                    if (xkey == '')
                        cachearr[cachecnt] = '( ' + (x + 1) + ' empty ): ';
                    else
                        cachearr[cachecnt] = '( ' + (x + 1) + ' dupe of ' + hash[hkey] + ' ): ' + xkey;
                    cachecnt++;
                }
            }
            document.getElementById('daloc').value = textoutarr.join('\n');
            var sodl = $('#daloc').val().split("\n")
            $('#sodl').html(sodl.length);
            document.getElementById('removed_output').value = cachearr.join('\n');

        }
    </script>
