{* $Id: invite_tempuser.tpl 62177 2017-04-10 06:06:43Z drsassafras $ *}{tr _0=$prefs.browsertitle _1=$mail_sender}You have been invited to access %0 by %1.{/tr}
<br /><br />
{tr _0=$token_url}Your token for accessing the {$prefs.mail_template_custom_text}site is %0{/tr}
<br /><br />
{tr _0=$token_expiry}Your access is valid until %0.{/tr}