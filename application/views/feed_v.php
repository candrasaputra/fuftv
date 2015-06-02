<?php
echo '<?xml version="1.0" encoding="utf-8"?>' . "n";
?>
<rss version="2.0"
    xmlns:dc="http://purl.org/dc/elements/1.1/"
    xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
    xmlns:admin="http://webns.net/mvcb/"
    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
    xmlns:content="http://purl.org/rss/1.0/modules/content/">
    <channel>
        <title><?php echo $feed_name; ?></title>

        <link><?php echo $feed_url; ?></link>

        <description><?php echo $page_description; ?></description>

        <dc:language><?php echo $page_language; ?></dc:language>

        <dc:creator><?php echo $creator_email; ?></dc:creator>

        <dc:rights>Copyright <?php echo gmdate("Y", time()); ?>

        </dc:rights>
        <admin:generatorAgent rdf:resource="<?php echo base_url();?>fuftv" />

        <?php if(isset($query) && is_array($query)):
            foreach($query as $row):?>
                <item>
                    <title><?php echo $row->jdleps; ?></title>
                    <link><?php echo $row->alias; ?></link>
                    <guid><?php echo $row->idepisode; ?></guid>
                    <description><?php echo $row->deseps; ?> </description>
                    <pubDate><?php echo $row->timeepisode; ?></pubDate>
                </item>
            <?php endforeach;
        endif;?>

    </channel>
</rss>