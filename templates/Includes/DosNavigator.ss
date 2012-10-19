<% if CurrentUser %>
	<% if canEdit %>

	<p>
		<strong><% _t('DosNavigator.EDITOR','Editor') %></strong> :
			<a href="/admin/pages"><% _t('DosNavigator.CMSPAGES','CMS') %></a>
		|	<a href="/admin/dashboard"><% _t('DosNavigator.CMSDASHBOARD','Dashboard') %></a>
		|	<a href="/admin/pages/edit/show/$ID"><% _t('DosNavigator.EDITTHISPAGE','Edit this page') %></a>	
		|	<a href="/Security/logout"><% _t('DosNavigator.LOGOUT','Log out') %></a>	
			<br />
		<strong><% _t('DosNavigator.DEVELOPER','Developer') %></strong> : 
		<a href="?flush=all"><% _t('DosNavigator.FLUSHCACHE','Flush cache') %></a>
	|	<a href="?isDev=1"><% _t('DosNavigator.DEVMODE','Developer mode') %></a>
	|	<a href="dev/"><% _t('DosNavigator.DEVELOPERACTIONSANDTASKS','Developer Actions and Tasks') %></a>
	|	<a href="dev/build/"><% _t('DosNavigator.REBUILDDATABASE','Rebuild Database') %></a>
	</p>
	<% end_if %>
<% end_if %>
