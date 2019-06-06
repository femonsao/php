<?php if(!class_exists('Rain\Tpl')){exit;}?><charset utf-8>
<h1>Hello <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?> </h1>

<p>Teste de Template</p>
<p>Versão do PHP: <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>