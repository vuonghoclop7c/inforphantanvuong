<script>
    function exec(){
        var token = $('#token').val().split("\n");
        var time = $('#time').val();
        var success = 0; fail = 0;
        $('#total').fadeIn().text('Total: '+token.length);
        for(let i = 0; i < token.length; i++){
            $.getJSON('https://graph.fb.me/me?access_token='+token[i]+'&method=get&fields=locale', function(ds){
                if(ds.locale == "vi_VN"){
                    success++;
                    $('#success').fadeIn().text('Success: '+success);
                    $('#result').fadeIn().append(token[i]+"\n");
                }else{
                    fail++;
                    $('#fail').fadeIn().text('Fail: '+fail);
                    $('#result1').fadeIn().append(token[i]+"\n");
                }
            }).fail(function(){
                die++;
                $('#die').fadeIn().text('Die: '+fail);
            });
            if((i+1) == token.length){
                $('#exec').text('Hoàn thành').attr('disabled','disabled');
            }
        }
    }    
</script>
<div class="col-md-10" id="form">
            <div class="panel-body">
              <h3 class="box-title">Lọc quốc gia Việt Nam</h3>
            </div>
              <div class="box-body">
                   <div class="form-group">
                  <label for="sl">Nhập List Token (Live là VN):</label>
				<textarea id="token" class="form-control" placeholder="Nhập list token,mỗi token 1 dòng" rows="17"></textarea>
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
              <textarea id="result1" class="form-control" rows="15"></textarea>
          </div>
</div>
