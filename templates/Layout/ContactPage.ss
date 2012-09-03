<div class=" typography">
	<h1>$Title</h1>
	$Content
</div>

	$ContactForm
<div class=" typography">
	<h2><% _t('ContactPage.OURADDRESS','Our Address') %></h2>

<% control SiteConfig %>
<% if StreetAddress %>
	<img src="http://maps.google.com/maps/api/staticmap?size=424x310&zoom=16&markers=icon:http://code.google.com/intl/es/apis/chart/interactive/images/feature_interactive.png|$StreetAddress,$Locality,$Region,$CountryName&sensor=true" /><br />
$StreetAddress, $Locality, $Region, $CountryName
<% end_if %>
<% end_control %>

</div>