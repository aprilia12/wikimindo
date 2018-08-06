{if $blog_post_context eq 'view_blog_post'}
	<ul class="pager">
		{if $post_info.adjacent.prev}
			<li class="previous">
				<span class="meta-nav" aria-hidden="true">{tr}Previous post{/tr}</span> <span class="screen-reader-text">{tr}Previous post{/tr}</span><br>
				{self_link _script=$post_info.adjacent.prev.postId|sefurl:blogpost _title="{tr}Previous post{/tr}" _noauto='y'}{$post_info.adjacent.prev.title|truncate}{/self_link}
			</li>
		{/if}
		{if $post_info.adjacent.next}
			<li class="next">
				<span class="meta-nav" aria-hidden="true">{tr}Next post{/tr}</span> <span class="screen-reader-text">{tr}Next post{/tr}</span><br>
				{self_link _script=$post_info.adjacent.next.postId|sefurl:blogpost _title="{tr}Next post{/tr}" _noauto='y'}{$post_info.adjacent.next.title|truncate}{/self_link}
			</li>
		{/if}
	</ul>
{/if}
