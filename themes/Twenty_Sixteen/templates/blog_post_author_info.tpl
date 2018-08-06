{* $Id: blog_post_author_info.tpl 58227 2016-04-07 04:07:45Z chibaguy $ *}
<div class="author_info">
	{if $blog_data.show_avatar eq 'y'}
		<div class="margin-bottom-sm">{$post_info.avatar}</div>
	{else}
		{icon name="user" iclass="tips" ititle=":{tr}Published By{/tr}"}
	{/if}
	{if $blog_data.use_author eq 'y'}
		<div class="margin-bottom-sm">{$post_info.user|userlink}</div>
	{/if}
	{if $blog_data.add_date eq 'y'}
		<div>{*<span style="font-size: 80%">{icon name="clock-o" iclass="tips" ititle=":{tr}Publish Date{/tr}"}</span> *}{$post_info.created|tiki_long_date}</div>
	{/if}
</div>
