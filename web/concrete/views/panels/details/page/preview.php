<?
defined('C5_EXECUTE') or die("Access Denied.");
$c = Page::getByID(Loader::helper('security')->sanitizeInt($_REQUEST['cID']));
if (is_object($c) && !$c->isError()) {
	$cp = new Permissions($c);
	if ($cp->canViewPageVersions()) { ?>

        <?=Loader::helper('concrete/ui/help')->notify('panel', '/page/design')?>

		<iframe id="ccm-page-preview-frame" name="ccm-page-preview-frame"></iframe>

	<? }
}