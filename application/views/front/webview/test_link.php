<style>
    .div_search {text-align: center;width:50%;}
    .thead {font-weight:bold;}
</style>
<script src="/public/js/test_link.js"></script>

<br/>
<div class="div_search">
    <table width="100%">
        <tr>
            <td>
                <input type="text" id="txt_main_url" style="width:300px;background-color: #0ae4ff"/>
            </td>
            <td>
                <input type="text" id="txt_secondary_url" style="width:300px;background-color:#FFE495" value="/wp-json/wp/v2/posts?per_page=3"/>
            </td>
            <td>
                <select>
                    <option value="wp">Wordpress</option>
                    <option value="rss">RSS</option>
                    <option value="atom">Atom</option>
                </select>
            </td>
            <td>
                <input type="button" value="Get data" onclick="begin_get_data();"
            </td>
        </tr>
    </table>
</div>
<hr/>
<table width="100%" id="tbl_result" border="1">
    <thead class="thead">
        <td>Image</td>
        <td>Title</td>
        <td>Slug</td>
        <td>Author name</td>
        <td>Time</td>
        <td>Excerpt</td>
        <td>Category name</td>
        <td>Comment no.</td>
        <td>Original url</td>
        <td>Category_slug</td>
    </thead>
</table>