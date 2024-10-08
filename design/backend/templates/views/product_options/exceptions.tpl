{** Options exceptions section **}

{capture name="mainbox"}

<form action="{""|fn_url}" method="post" name="exceptions_form">
<input type="hidden" name="product_id" value="{$product_id}" />

{if $exceptions}
<div class="table-responsive-wrapper">
    <table class="table table-middle table--relative table-responsive" width="100%">
    <thead>
    <tr>
        <th class="center" width="1%">
            {include file="common/check_items.tpl"}</th>
        <th>{__("combination")}</th>
        <th>&nbsp;</th>
    </tr>
    </thead>
    {foreach from=$exceptions item="i"}
    <tr>
        <td class="center"><input type="checkbox" name="exception_ids[]" value="{$i.exception_id}" class="cm-item" /></td>
        <td width="95%">
            <table>
            {foreach from=$i.combination item="c" key="k"}
            {if ($product_options.$k.option_type == "ProductOptionTypes::SELECTBOX"|enum)
            || ($product_options.$k.option_type == "ProductOptionTypes::RADIO_GROUP"|enum)
            || ($product_options.$k.option_type == "ProductOptionTypes::CHECKBOX"|enum)}
            <tr class="no-border{if ($product_options.$k.status === "ObjectStatuses::DISABLED"|enum)} cm-row-status-d{/if}">
                <td class="row-status">{$product_options.$k.option_name}:</td>
                <td class="row-status"><span>
                    {if $product_options.$k.option_type == "ProductOptionTypes::CHECKBOX"|enum}
                        {if ($c == $smarty.const.OPTION_EXCEPTION_VARIANT_NOTHING)}- {__("exception_disabled")} -
                        {elseif ($c == $smarty.const.OPTION_EXCEPTION_VARIANT_ANY)}- {__("exception_disregard")} -
                        {else}[{if $product_options.$k.variants.$c.position == "1"}{__("yes")}{else}{__("no")}{/if}]{/if}
                    {else}
                        {if ($c == $smarty.const.OPTION_EXCEPTION_VARIANT_NOTHING)}- {__("exception_disabled")} -
                        {elseif ($c == $smarty.const.OPTION_EXCEPTION_VARIANT_ANY)}- {__("exception_disregard")} -
                        {else}{$product_options.$k.variants.$c.variant_name}{/if}
                    {/if}
                    </span>
                </td>
            </tr>
            {/if}
            {/foreach}
            </table>
        </td>
        <td class="nowrap">
            {capture name="tools_list"}
                <li>{btn type="list" class="cm-confirm" text=__("delete") href="product_options.delete_exception?exception_id=`$i.exception_id`&product_id=`$product_id`" method="POST"}</li>
            {/capture}
            <div class="hidden-tools">
                {dropdown content=$smarty.capture.tools_list}
            </div>
        </td>
    </tr>
    {/foreach}
    </table>
</div>
{else}
    <p class="no-items">{__("no_data")}</p>
{/if}
</form>

{capture name="tools"}
    {capture name="add_new_picker"}
        <form action="{""|fn_url}" method="post" name="new_exception_form">
        <input type="hidden" name="product_id" value="{$product_id}" />

        <div class="table-responsive-wrapper">
            <table class="table table-middle table--relative table-responsive">
            <thead>
            <tr class="cm-first-sibling">
                <th>{__("combination")}</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tr id="box_new_item">
                <td>
                    <table>
                    {foreach from=$product_options item="option" name="add_inv_fe"}
                    <tr class="no-border">
                        <td>{$option.option_name}</td>
                        <td>{if $option.option_type == "ProductOptionTypes::CHECKBOX"|enum}
                                <select name="add_options_combination[0][{$option.option_id}]">
                                    {foreach from=$option.variants item="variant"}
                                        <option value="{$variant.variant_id}">{if $variant.position == 0}{__("no")}{else}{__("yes")}{/if}</option>
                                    {/foreach}
                                    <option value="{$smarty.const.OPTION_EXCEPTION_VARIANT_ANY}">- {__("exception_disregard")} -</option>
                                    <option value="{$smarty.const.OPTION_EXCEPTION_VARIANT_NOTHING}">- {__("exception_disabled")} -</option>
                                </select>
                            {else}
                                <select name="add_options_combination[0][{$option.option_id}]">
                                    {foreach from=$option.variants item="variant"}
                                    <option value="{$variant.variant_id}">{$variant.variant_name}</option>
                                        {/foreach}
                                    <option value="{$smarty.const.OPTION_EXCEPTION_VARIANT_ANY}">- {__("exception_disregard")} -</option>
                                    <option value="{$smarty.const.OPTION_EXCEPTION_VARIANT_NOTHING}">- {__("exception_disabled")} -</option>
                                </select>
                            {/if}
                        </td>
                    </tr>
                    {/foreach}
                    </table>
                </td>
                <td valign="top"><p>{include file="buttons/multiple_buttons.tpl" item_id="new_item"}</p></td>
            </tr>
            </table>
        </div>

        <div class="buttons-container">
            {include file="buttons/create.tpl" but_name="dispatch[product_options.add_exceptions]" but_role="button_main"}
        </div>

        </form>
    {/capture}
{/capture}

{/capture}

{if $product_data.exceptions_type == "ProductOptionsExceptionsTypes::FORBIDDEN"|enum}
    {assign var="except_title" value=__("forbidden_combinations")}
{else}
    {assign var="except_title" value=__("allowed_combinations")}
{/if}

{capture name="buttons"}
    {capture name="tools_list"}
        {if $exceptions}
            <li>{btn type="delete_selected" dispatch="dispatch[product_options.m_delete_exceptions]" form="exceptions_form"}</li>
        {/if}
    {/capture}
    {dropdown content=$smarty.capture.tools_list}
{/capture}

{capture name="adv_buttons"}
    {include file="common/popupbox.tpl"
        id="add_new_combination"
        text=__("new_combination")
        content=$smarty.capture.add_new_picker
        title=__("add_combination")
        link_text=__("add_combination")
        act="general"
        icon="icon-plus"
        link_class="btn-primary"
    }
{/capture}

{include file="common/mainbox.tpl" title=$except_title content=$smarty.capture.mainbox tools=$smarty.capture.tools buttons=$smarty.capture.buttons adv_buttons=$smarty.capture.adv_buttons}

{** /Options exceptions section **}