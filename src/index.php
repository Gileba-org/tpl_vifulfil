<?php
	defined('_JEXEC') or die('Restricted access');

	use \Joomla\CMS\Factory;

	$app = Factory::getApplication();
	$wa = $this->getWebAssetManager();
	$templatePath = "templates/tpl_vifulfil";
	$params = $app->getTemplate(true)->params;

	// Remove generator from code;
	$this->setGenerator('');

	// Add styles
	$wa->registerAndUseStyle('fonts', $templatePath . '/css/fonts.css');
	$wa->registerAndUseStyle('template', $templatePath . '/css/template.css');
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" >
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<jdoc:include type="metas" />
		<jdoc:include type="styles" />
		<jdoc:include type="scripts" />

		<?php
		if ($this->params->get('tagmanager')) {
			$googleTag = $this->params->get('tagmanager');
		?>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $googleTag; ?>"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', '<?php echo $googleTag; ?>');
		</script>
		<!-- END Global site tag -->
		<?php } ?>
	</head>
	<body>
		<p>Dit is een testzin: <?php echo $this->params->get('tagmanager'); ?></p>
	</body>
</html>
