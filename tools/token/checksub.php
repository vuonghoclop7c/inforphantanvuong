<script>
    function _checkSub(){
        var list = $('#list').val().trim();
        if(!list){
            alert('Nhập list token');
        }else{
            var success = fail = 0;
            var token = list.split("\n");
            for(let i = 0; i < token.length; i++){
                $.getJSON('https://graph.fb.me/me/subscribers?access_token='+token[i]+'&summary=true&method=get', function(ds){
                    $.getJSON('https://graph.fb.me/me?access_token='+token[i]+'&fields=id', function(duy){
                        var uid = duy.id;
                    });
                    success++;
                    $('#result').fadeIn().append(token[i] + " - " + uid + " - " + ds.summary.total_count + " sub\n");
                    $('#success').fadeIn().text('Success: '+success);
                }).fail(function(){
                    fail++;
                    $('#fail').fadeIn().text('Fail: '+fail);
                })
            }
        }
    }    
</script>
    <div class="col-md-10">
        <div class="box box-info wow fadeIn">
            <div class="panel-body">
                <h3 class="box-title">Check Subscribers Token</h3>
            </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Nhập List Token cần check:</label>
                            <textarea id="list" placeholder="Nhập List Token cần Check Live, Mỗi Token 1 Dòng" class="form-control" rows="12"></textarea>
                        </div>
                    </div>
                    
                    <div class="box-footer" style="text-align:center;margin-top:10px">
                        <button type="button" id="start" name="start" onclick="_checkSub();" class="btn btn-info">Check Sub Token</button>
                        <button id="total" class="btn btn-default" style="display:none"></button>
                        <button id="success" class="btn btn-success" style="display:none"></button>
                        <button id="fail" class="btn btn-danger" style="display:none"></button>
                    </div>
                    <button id="result" class="form-control" style="display:none" rows="25" /></button>
        </div>
    </div>
</div>
