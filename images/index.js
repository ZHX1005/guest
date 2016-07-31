/**
 * 
 */

//留言判断
function test(){
	var sum
	if(document.frm.title.value==''){
		alert('请填写标题');
		return false;
	}else{
		sum=document.frm.title.value.length;
		if(sum<5 ||sum>20){
			alert('请填写5-20个字符');
			return false;
		}
	}
	if(document.frm.username.value==''){
		alert('请填写用户名');
		return false;
	}else{
		sum=document.frm.username.value.length;
		if(sum<2 ||sum>10){
			alert('用户名在2-10个字符之间');
			return false;
		}
	}
	sum=document.frm.content.value.length;
	if(sum<10){
		alert('留言内容不能小于10个字符');
		return false;
	}
	return true;
}