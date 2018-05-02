<table width="100%" border="1">
    <thead>
        <td>No.</td>
        <td>Id</td>
        <td>Name</td>
        <td>Post uri</td>
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
            <td><?php echo $list[$i]->post_uri; ?></td>
            <td><?php echo $list[$i]->item_num; ?></td>
            <td><?php echo $list[$i]->crawl_time; ?></td>
            <td><?php echo $list[$i]->type; ?></td>
            <td><?php echo $list[$i]->post_num; ?></td>
        </tr>
    <?php } ?>
</table>
<br/>
Total posts: <?php echo $total_post; ?><br/><br/>
Video:<br/>
<table width="100%" border="1">
    <thead>
    <td>No.</td>
    <td>Id</td>
    <td>Channel</td>
    <td>Playlists</td>
    </thead>
    <?php
    if (isset($videos)){
    for ($i=0;$i<count($videos);$i++){ ?>
        <tr>
            <td><?php echo $i+1; ?></td>
            <td><?php echo $videos[$i]->_id; ?></td>
            <td><?php echo $videos[$i]->name; ?></td>
            <td>
                <table width="100%">
                <?php
                $playlists = $videos[$i]->playlists;
                for ($j=0; $j<count($playlists); $j++){ ?>
                    <tr>
                        <td><?php echo $playlists[$j]->name; ?></td>
                        <td><?php echo $playlists[$j]->original_id; ?></td>
                        <td><?php echo $playlists[$j]->crawl_time; ?></td>
                        <td><?php echo $playlists[$j]->video_num; ?></td>
                    </tr>
                <?php } ?>
                </table>
            </td>
        </tr>
    <?php } }//end for ?>
</table>
<br/>
Total videos: <?php if (isset($total_videos)) echo $total_videos; ?>