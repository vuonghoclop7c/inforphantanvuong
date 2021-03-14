    <div class="row">
        <h3><b>LỌC TOKEN TỪ LIST</b></h3><br /><button  id="start" type="button" class="btn btn-success">Lọc</button><label for="Account" id="td" style="display:none">Kết Quả<span id="count"></span><br></label>
        <textarea style="width:80%" id="accounts" placeholder="Nhập List Token Cần Lọc" rows="20"></textarea>
        <textarea style="width:80%;border-style:dotted;display:none" id="kq" placeholder="token" rows="20"></textarea>
        <p>
            
</div> </div>
<script type="text/javascript" >
$('#start').click(function(){
    if($('#accounts').val().trim()){
        var k = $('#accounts').val().match(/(EAA|CAA)\w+/g);
        if(k){
            $('#kq').val((k.join('\n')).replace(/\|/g,''));
            $('#scookie').val($('#kq').val());
            $('#count').text('('+k.length+')');
            $('#td,#kq').fadeIn();
            $('#td').animation({background:'rgba(0,155,0,1)'});
            
        }else
            alert('Không tìm thấy token nàm sao mà lọc');
    }else
    alert('Nhập thông tin vô đê');
});
</script>
