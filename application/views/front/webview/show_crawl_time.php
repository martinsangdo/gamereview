<table width="100%" border="1">
    <thead>
        <td>Name</td>
        <td>Crawl time</td>
    </thead>
    <?php for ($i=0;$i<count($list);$i++){ ?>
        <tr>
            <td><?php echo $list[$i]->api_uri; ?></td>
            <td><?php echo $list[$i]->crawl_time; ?></td>
        </tr>
    <?php } ?>
</table>