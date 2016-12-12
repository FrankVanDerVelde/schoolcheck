<button onclick="window.location.href='?action=admin&cms_action=insert'">New</button>
<table>
	{foreach from=$result item=oneItem}
	<tr>
		<td>{$oneItem.id}</td>
		<td>{$oneItem.title}</td>
		<td>{$oneItem.content|truncate:50}</td>
 			<td><a href="?action=admin&cms_action=edit&id={$oneItem.id}">edit</a></td>
            <td><a href="?action=admin&cms_action=delete&id={$oneItem.id}">delete</a></td>
{/foreach}
	</tr>
</table>