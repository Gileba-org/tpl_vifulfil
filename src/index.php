<?php
	defined('_JEXEC') or die('Restricted access');

	$this->setGenerator('');

	$templatePath     = "templates/tpl_vifulfil";
	$wa = $this->getWebAssetManager();

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
	</head>
	<body>
		<p>Dit is een testzin</p>
	</body>
</html>
