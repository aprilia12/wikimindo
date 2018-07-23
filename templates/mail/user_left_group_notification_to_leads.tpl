{* $Id: user_left_group_notification_to_leads.tpl 62177 2017-04-10 06:06:43Z drsassafras $ *}{tr}You are getting this email because you are a group leader{/tr} - {$prefs.mail_template_custom_text}{$mail_group}
<br/>
{$mail_real} ({$mail_user}) {tr}left{/tr} - {$mail_group}
<br/>
<a href="{$mail_machine}/{$mail_url}">{tr}Click here to manage members.{/tr}</a>