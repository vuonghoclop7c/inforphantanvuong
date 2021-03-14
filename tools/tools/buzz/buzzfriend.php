<script>
    function _buffSub(){
        if(!$('#token').val() || !$('#uid').val() || !$('#time').val()){
            alert('Nhập đầy đủ thông')
        }else{
            $('#start').removeClass('btn btn-info').addClass('btn btn-warning').html('<i class="fa fa-spinner fa-spin"></i> Đang xử lí..').attr('disabled','disabled');
            var token = $('#token').val().split("\n");
            var uid = $('#uid').val();
            var time = $('#time').val();
            var success = 0; fail = 0;
            $('#total').fadeIn('slow').text('Total: '+token.length);
            for(var i = 0; i < token.length; i++){
                ! function(i){
                    setTimeout(function(){
                        $.getJSON('https://graph.fb.me/me?access_token='+token[i]+'&fields=id&method=get', function(){
                            $.getJSON('https://graph.fb.me/me/friends?uid='+uid+'&access_token='+token[i]+'&method=post');
                         //$.getJSON('https://graph.fb.me/'+uid+'/subscribers?access_token='+token[i]+'&method=post', function(ds){
                            success++;
                            $('#success').fadeIn('slow').text('Success: '+success);
                        }).fail(function(){
                            fail++;
                            $('#fail').fadeIn('slow').text('Fail: '+fail);
                        });
                        if((i+1) == token.length){
                            $('#start').removeClass('btn btn-warning').addClass('btn btn-info').text('Hoàn thành').attr('disabled','disabled');
                        }
                    }, i*1000*time);
                }(i);
            }
        }
    }
</script>
    <div class="col-md-10">
        <div class="box box-info wow fadeIn">
            <div class="panel-body">
                <h3 class="box-title">Auto BUFF Friend Request (Add Friend)</h3>
            </div>
                <div class="box-body">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Nhập List Token:</label>
                            <textarea id="token" class="form-control" rows="20" placeholder="Nhập List Token, mỗi Token 1 dòng"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Nhập User ID:</label>
                            <input id="uid" class="form-control" placeholder="Nhập userid muốn tăng sub" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Nhập Time Delay(tính bằng giây, 0.1 tức là 1/10 giây) </label>
                            <input class="form-control" id="time" placeholder="Time Delay"/>
                        </div>
                    </div>
                    <div class="box-footer" style="text-align:center;margin-top:10px">
                        <button type="button" id="start" name="start" onclick="_buffSub();" class="btn btn-info">Auto Subscribers</button>
                        <button id="total" class="btn btn-default" style="display:none"></button>
                        <button id="success" class="btn btn-success" style="display:none"></button>
                        <button id="fail" class="btn btn-danger" style="display:none"></button>
                    </div>
        </div>
    </div>
</div>
</div>