<?php
echo '<br />
<div class="tc">
<form name="frmdblogin" method="post" action="'.$this->_tpl_vars['url_dblogin'].'">
<table class="grid" width="500" align="center">
   <caption>数据库账号验证</caption>
   <tr>
     <td align="right">说明：</td>
	 <td>数据库管理相关功能需要验证本站的数据库用户名和密码！</td>
   </tr>
   <tr>
     <td align="right">数据库用户名：</td>
	 <td><input type="text" class="text" size="20" maxlength="50" style="width:120px" name="dbuser"></td>
   </tr>
   <tr>
     <td align="right">数据库密码：</td>
	 <td><input type="password" class="text" size="20" maxlength="50" style="width:120px" name="dbpass"></td>
   </tr>
   ';
if($this->_tpl_vars['show_checkcode'] == 1){
echo '
   <tr>
     <td align="right">验证码：</td>
     <td><input type="text" class="text" style="width:6em;" name="checkcode" id="checkcode" onfocus="if(this.form.imgccode.style.display == \'none\'){this.form.imgccode.src = \''.$this->_tpl_vars['jieqi_url'].'/checkcode.php?rand='.$this->_tpl_vars['jieqi_time'].'\';this.form.imgccode.style.display = \'\';}" title="点击显示验证码"><img name="imgccode" src="" style="cursor:pointer;vertical-align:middle;margin-left:3px;display:none;" onclick="this.src=\''.$this->_tpl_vars['jieqi_url'].'/checkcode.php?rand=\'+Math.random();" title="点击刷新验证码"></td>
   </tr>
   ';
}
echo '
   <tr>
     <td>&nbsp;<input type="hidden" name="act" value="login">'.$this->_tpl_vars['jieqi_token_input'].'</td>
	 <td><button type="submit" class="button" name="submit">&nbsp;提&nbsp;交&nbsp;</button></td>
   </tr>
  </table>
</form>
</div>
<br /><br />';
?>