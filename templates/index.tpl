{include file='modules_header.tpl'}

  <div class="title margin_bottom_large">{$L.phrase_hello_tabs|upper}</div>

		{include file='tabset_open.tpl'}

			{if $page == "tab1"}
				{include file='../../modules/hello_tabs/templates/tab1.tpl'}
			{elseif $page == "tab2"}
				{include file='../../modules/hello_tabs/templates/tab2.tpl'}
			{elseif $page == "tab3"}
				{include file='../../modules/hello_tabs/templates/tab3.tpl'}
			{else}
				{include file='../../modules/hello_tabs/templates/tab1.tpl'}
			{/if}

		{include file='tabset_close.tpl'}

{include file='modules_footer.tpl'}