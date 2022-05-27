<?php
	defined('_JEXEC') or die('Restricted access');

	use \Joomla\CMS\Factory;

	// Variables
	$app = Factory::getApplication();
	$wa = $this->getWebAssetManager();
	$templatePath = "templates/tpl_vifulfil";
	$params = $app->getTemplate(true)->params;

	// Remove generator from code;
	$this->setGenerator('');

	// Add styles
	$wa->registerAndUseStyle('fontawesome');
	$wa->registerAndUseStyle('fonts', $templatePath . '/css/fonts.css');
	$wa->registerAndUseStyle('template', $templatePath . '/css/template.css');

	//jQuery
	$wa->useScript('jquery');

	// Jonsuh Hamburgers library
	$wa->registerAndUseStyle('hamburger.style', $templatePath . '/vendor/jonsuh/hamburgers/hamburgers.css');
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
		<div class="offcanvas"><jdoc:include type="modules" name="offcanvas" /></div>
		<div class="container">
			<div class="top">
				<jdoc:include type="modules" name="top" style="none" />
			</div>
			<div class="messages">
				<jdoc:include type="message" />
			</div>
			<div class="content">
				<jdoc:include type="modules" name="content" style="none" />
			</div>
			<div class="contact">
				<jdoc:include type="modules" name="contact" style="none" />
			</div>
			<div class="footer-container">
				<div class="footer">
					<jdoc:include type="modules" name="footer" style="none" />
				</div>
				<div class="bottom">
					<jdoc:include type="modules" name="bottom" style="none" />
				</div>
			</div>
		</div>
		<script src="<?php echo $templatePath; ?>/js/hamburgers.js"></script>
	</body>
</html>
