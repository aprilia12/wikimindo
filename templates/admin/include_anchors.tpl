{*$Id: include_anchors.tpl 65132 2018-01-08 16:02:41Z chibaguy $*}
{foreach from=$admin_icons key=page item=info}
	{if ! $info.disabled}
		<li><a href="tiki-admin.php?page={$page}" alt="{$info.title} {$info.description}" class="tips bottom slow icon" title="{$info.title}|{$info.description}">
			{icon name="admin_$page"}
		</a></li>
	{/if}
{/foreach}