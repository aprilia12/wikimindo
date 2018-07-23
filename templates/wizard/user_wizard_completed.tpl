{* $Id: user_wizard_completed.tpl 61828 2017-03-23 10:35:36Z jyhem $ *}

<div class="media">
	<div class="media-body">
		{icon name="check" size=2} {tr}Congratulations{/tr}. {tr}You are done with the user wizard{/tr}.<br>
		<fieldset>
			<legend>{tr}Next?{/tr}</legend>
			<ul>
				{if $prefs.feature_userPreferences eq 'y'}
					<li>{tr _0="tiki-user_preferences.php"}Visit the Full <a href="%0">User Preferences</a> page to set the rest of your user preferences{/tr}.</li>
					{tr}Or...{/tr}<br/>
				{/if}
				<li>{tr}Click at the button <strong>Finish</strong> to end the user wizard and go back to the where you were{/tr}.</li>
			</ul>
		</fieldset>
	</div>
</div>
