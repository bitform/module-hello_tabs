{ft_include file='modules_header.tpl'}

    <table cellpadding="0" cellspacing="0" class="margin_bottom_large">
        <tr>
            <td width="45"><a href="index.php"><img src="images/icon_hello_tabs.png" border="0" width="34" height="34" /></a></td>
            <td class="title">
                <a href="../../admin/modules">{$LANG.word_modules}</a>
                <span class="joiner">&raquo;</span>
                {$L.phrase_hello_tabs}
            </td>
        </tr>
    </table>

    {include file='tabset_open.tpl'}

    {if $page == "tab1"}
        {include file='./tab1.tpl'}
    {elseif $page == "tab2"}
        {include file='./tab2.tpl'}
    {elseif $page == "tab3"}
        {include file='./tab3.tpl'}
    {else}
        {include file='./tab1.tpl'}
    {/if}

    {ft_include file='tabset_close.tpl'}

{ft_include file='modules_footer.tpl'}
