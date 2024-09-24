{if $price_changes}
    <table class="table table-middle">
        <thead>
        <tr>
            <th>{__("date_time")}</th>
            <th>{__("price_type")}</th>
            <th>{__("price_before")}</th>
            <th>{__("price_after")}</th>
            <th>{__("changed_by")}</th>
            <th>{__("change_channel")}</th>
        </tr>
        </thead>
        <tbody>
        {foreach from=$price_changes item=change}
            <tr>
                <td>{$change.timestamp|date_format:"%Y-%m-%d %H:%M:%S"}</td>
                <td>{$change.price_type}</td>
                <td>{$change.old_price}</td>
                <td>{$change.new_price}</td>
                <td>{fn_get_user_name($change.changed_by)}</td>
                <td>{$change.change_channel}</td>
            </tr>
        {/foreach}
        </tbody>
    </table>
{else}
    <p>{__("no_price_changes")}</p>
{/if}