<? $title = $page->getName(); ?>
<? include('header.php'); ?>
<h1 id="pagetitle"><?= Markup::escape($page->getName()) ?></h1>
<table class="history">
<?
    foreach ($history as $entry)
	printf('<tr><td><a href="%s?commit=%s">%s</a></td><td>%s</td><td>%s</td></tr>',
	    $page->getURL(),
	    $entry->commit,
	    Markup::escape(strftime('%Y-%m-%d %H:%M', $entry->time)),
	    Markup::escape($entry->author),
	    Markup::escape($entry->summary));
?>
</table>
<? include('footer.php'); ?>
