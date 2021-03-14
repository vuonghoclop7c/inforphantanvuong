<div style="width:65%; margin:auto">
<label>List Access Token</label><br/>
<textarea id="tokens" style="width:99%" rows="10" placeholder="1 line 1 token."></textarea><br/>
<p> 
<label>Delay (second)</label><br/>
<input id="delay" value="0" style="width:99%" type="number" required=""><br/>
</p>
<p>

<input checked id="friend" value="fr" type="checkbox" >
<label for="friend">Friend</label>
<input checked id="group" value="gr" type="checkbox">
<label for="group">Group</label>
<input checked id="fpage" value="fp" type="checkbox">
<label for="fpage" >Fanpage</label>
<input checked id="city" value="ct" type="checkbox">
<label for="city" >City</label>
<input checked id="state" value="st" class="w3-check" type="checkbox">
<label for="state" >State</label>
</p>
<button id="start" type="button" >Check</button>
<p style="text-align:center">Status: <span id="proc" style="color:red">Stop</span> | Total: <span style="color:blue" id="total">0</span> | Live: <span id="live" style="color:green">0</span> | Die: <span id="die" style="color:red">0</span></p>
<p id="rslive">
</p>
<p id="rsdie">
</p>
</div></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">if (!String.prototype.format) {
String.prototype.format = function() {
var args = arguments;
return this.replace(/{(\d+)}/g, function(match, number) { 
return typeof args[number] != 'undefined'
? args[number]
: match
;
});
};
}
$(function(){
$(document).on('click','#start',function(){
var _btn = $(this),_total = $('#total'),_live = $('#live'),_die = $('#die'),_htmllive = $('#rslive'),_htmldie = $('#rsdie'),
_tokens = $('#tokens').val(),_stt = $('#proc');
if(_tokens.trim())
{
_tokens = _tokens.trim().split('\n');
var n = _tokens.length;
_htmldie.empty(),_htmllive.empty(),_total.text('0'),_live.text('0'),_die.text('0'),_btn.attr('disabled','disabled'),
_stt.text('Running...').css('color','orange'),_total.text(n),$('#stoken').val('');

for(i=0;i<n;i++)
{
live(_tokens[i],i);
}
_stt.text('Done.').css('color','green'),
_btn.removeAttr('disabled');
console.clear();
}else
{
alert('Muốn check info mình hả mà hông chịu nhập token :3');
}
});
})
function live(token,i){
var _live = $('#live'),_die = $('#die'),_htmllive = $('#rslive'),_htmldie = $('#rsdie'),_delay = (!isNaN($('#delay').val()))?$('#delay').val():0;
if(/^EAA(.*?)/.test(token))
{
setTimeout(function(){
$.get('https://graph.facebook.com/me/?access_token={0}'.format(token)).done(function(d){
$('#fsave').fadeIn('fast');
var lv = (parseInt(_live.text()))+1,sex = (d.gender=='male')?'Nam':'Nữ';
_live.text(lv);
_htmllive.append('<span style="display:block"><b style="color:green">LIVE</b> | {0} | App: <span id="app{2}"></span> | Friend: <span id="fr{2}"></span> | Group: <span id="gr{2}"></span> | Fanpage: <span id="fp{2}"></span>| <span style="color:#9203FF">{3}</span> | City: <span id="ct{2}"></span> | State: <span id="st{2}"></span> | Check tại: {1}</span>'.format(token.substr(0,20),'<span style="color:#9203FF">'+window.location.host+'</span>',i,sex));
$('#stoken').val($('#stoken').val()+"\n"+token);
app(token,i);
if($('#friend').is(':checked'))
friend(token,i);
if($('#group').is(':checked'))
group(token,i);
if($('#fpage').is(':checked'))
fpage(token,i);
if($('#city').is(':checked')){
if("undefined" !== typeof d.location)
$('#ct{0}'.format(i)).html(d.location.name).css('color','#9203FF');
else
$('#ct{0}'.format(i)).html('Unknow').css('color','#9203FF');
}
if($('#state').is(':checked')){
if("undefined" !== typeof d.locale)
$('#st{0}'.format(i)).html(d.locale).css('color','#9203FF');
else
$('#st{0}'.format(i)).html('Unknow').css('color','#9203FF');
}

}).fail(function(){
var di = (parseInt(_die.text()))+1;
_die.text(di);
_htmldie.append('<span style="display:block"><b style="color:red;text-decoration:line-through">DIE</b> | {0}</span>'.format(token.substr(0,20)));
}).always(function(){
console.clear();
});
},_delay*1e3);
}else
{
var di = (parseInt(_die.text()))+1;
_die.text(di);
_htmldie.append('<span style="display:block"><b style="color:red;text-decoration:line-through">DIE</b> | {0}</span>'.format(token.substr(0,20)));
}
}
function app(token,i){
$.get('https://graph.facebook.com/app?access_token={0}'.format(token)).done(function(d){
$('#app{0}'.format(i)).html(d.name).css('color','#9203FF');
}).fail(function(){
$('#app{0}'.format(i)).html('Unknow').css('color','#9203FF');
}).always(function(){
console.clear();
});
}
function friend(token,i){
$.get('https://graph.facebook.com/',{method:'post',access_token:token,batch:'[{"method":"GET","relative_url":"fql?q=SELECT friend_count FROM user WHERE uid = me()"},{"method":"GET","relative_url":"me/groups?limit=5000"}]',include_headers:'false'}).done(function(d){
d = JSON.parse(d[0].body);
$('#fr{0}'.format(i)).html(d.data[0].friend_count).css('color','#00f');
}).fail(function(){
$('#fr{0}'.format(i)).html('Unknow').css('color','#00f');
}).always(function(){
console.clear();
});
}
function group(token,i){
$.get('https://graph.facebook.com/',{method:'post',access_token:token,batch:'[{"method":"GET","relative_url":"me/groups?limit=100000"}]',include_headers:'false'}).done(function(d){
d = JSON.parse(d[0].body);
$('#gr{0}'.format(i)).html(d.data.length).css('color','green');
}).fail(function(){
$('#gr{0}'.format(i)).html('Unknow').css('color','green');
}).always(function(){
console.clear();
});
}
function fpage(token,i){
$.get('https://graph.facebook.com/',{method:'post',access_token:token,batch:'[{"method":"GET","relative_url":"me/likes?limit=100000"}]',include_headers:'false'}).done(function(d){
d = JSON.parse(d[0].body);
$('#fp{0}'.format(i)).html(d.data.length).css('color','green');
}).fail(function(){
$('#fp{0}'.format(i)).html('Unknow').css('color','green');
}).always(function(){
console.clear();
});
}</script>
