<table width="100%" border="1">
    <thead>
        <td>No.</td>
        <td>Id</td>
        <td>Name</td>
        <td>Item num</td>
        <td>Crawl time</td>
        <td>Type</td>
        <td>Post no.</td>
    </thead>
    <?php for ($i=0;$i<count($list);$i++){ ?>
        <tr>
            <td><?php echo $i+1; ?></td>
            <td><?php echo $list[$i]->_id; ?></td>
            <td><?php echo $list[$i]->api_uri; ?></td>
            <td><?php echo $list[$i]->item_num; ?></td>
            <td><?php echo $list[$i]->crawl_time; ?></td>
            <td><?php echo $list[$i]->type; ?></td>
            <td><?php echo $list[$i]->post_num; ?></td>
        </tr>
    <?php } ?>
</table>
<br/>
Total posts: <?php echo $total_post; ?>
