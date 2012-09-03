<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<% base_tag %>
</head>
<body>

<table width="500" style="padding:60px;padding-top:50px;" background="$BaseHREF/mysite/images/email-bg.png">
	<tr>
		<td>
			<a href="$BaseHREF"><img src="$BaseHREF/mysite/images/logo.png" width="90px"/></a><br />
				<h1 style="font-size:16px;color:#666;margin-top:10px;"><% _t('QuickEmailForm.FROMOURWEBSITE','Contact from our website') %></h1>
		</td>	
	</tr>
	<tr>
		<td>
			<ul style="list-style:none;margin:0;margin-right:20px;padding:5px;background:#F4F4F4;">
				<li style="margin:5px;padding:0px;"><p><% _t('ContactEmail.SUBMITTERINFO','The following message was submitted to your site by') %> <strong>$Name</strong>:</li>
				<li style="margin:5px;padding:0px;"><p><% _t('QuickEmailForm.QUESTION','Question') %>: $Comments</p></li>
				<li style="margin:5px;padding:0px;"><p><% _t('QuickEmailForm.EMAIL','Email') %>: $Email</p></li>
			</ul>
		</td>
	</tr>
	
</table>
</body>
</html>