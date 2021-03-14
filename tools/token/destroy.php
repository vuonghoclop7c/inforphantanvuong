<script>
    function exec() {
    if (!$('#token').val()) {
        alert('Không nhập token thế đòi hủy diệt thế giới à?');
    } else {
        $('#exec').removeClass('btn btn-info').addClass('btn btn-warning').html('<i class="fa fa-spinner fa-spin"></i> Các bé đang vào lò lửa...').attr('disabled', 'disabled');
        var token = $('#token').val().trim().split("\n");
        var time = $('#time').val();
        var destroyed = 0;
        var uid;
        $('#total').fadeIn().text('Tổng cộng: ' + token.length);
        for (let i = 0; i < token.length; i++) {
            setTimeout(function () {
                $.post('token/progress.php', {token: token[i]}, function (ds) {
                   if(ds == 'ok'){
                       destroyed++;
                       $('#destroyed').fadeIn().text('Destroyed: '+destroyed);
                   }
                    if ((i + 1) == token.length) {
                        $('#exec').removeClass('btn btn-warning').addClass('btn btn-info').html('Các bé đã bị hủy diệt thành công').attr('disabled', 'disabled');
                    }
                });
            }, i * time * 1000);
        }
    }
}
</script>
<div class="col-md-10" id="form">
          <div class="box box-primary">
            <div class="box-header with-border">
            <h4><b>DESTROY TOKEN SỐNG SLL</b></h4>
            </div>
              <div class="box-body">
                   <div class="form-group">
                  <label></label>
                <textarea id="token" class="form-control" placeholder="Nhập list token,mỗi token 1 dòng" rows="17"></textarea>
                </div>
              </div>
              
               <div class="box-body">
                   <div class="form-group">
                  <label for="sl">Time Delay:</label>
                    <input name="time" id="time" class="form-control" placeholder="Nhập time delay" />
                </div>
              </div>

              <div class="box-footer">
                <button type="button" class="btn btn-primary" id="exec" onclick="exec();">Bắt Đầu Nà</button>
                <button id="total" class="btn btn-default" style="display:none"></button>
                <button id="destroyed" class="btn btn-danger" style="display:none"></button>
              </div>
          </div>
</div></div>
