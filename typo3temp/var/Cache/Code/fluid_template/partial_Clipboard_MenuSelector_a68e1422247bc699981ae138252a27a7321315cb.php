<?php

class partial_Clipboard_MenuSelector_a68e1422247bc699981ae138252a27a7321315cb extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<div class="btn-group">
	<button class="btn btn-default dropdown-toggle" type="button" id="menuSelector" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="true">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:rm.menu';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
		<span class="caret"></span>
	</button>
	<ul class="dropdown-menu" aria-labelledby="menuSelector">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
			<li>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$array12 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('option.label', $array12)]);
};
$arguments7 = array();
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['uri'] = NULL;
$arguments7['defaultScheme'] = 'http';
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['name'] = NULL;
$arguments7['rel'] = NULL;
$arguments7['rev'] = NULL;
$arguments7['target'] = NULL;
$array9 = array (
);$arguments7['uri'] = $renderingContext->getVariableProvider()->getByPath('option.uri', $array9);
$array10 = array (
);$arguments7['data'] = $renderingContext->getVariableProvider()->getByPath('option.data', $array10);
$array11 = array (
);$arguments7['additionalAttributes'] = $renderingContext->getVariableProvider()->getByPath('option.additionalAttributes', $array11);
$arguments7['defaultScheme'] = '';

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
			</li>
		';
return $output6;
};
$arguments3 = array();
$arguments3['each'] = NULL;
$arguments3['as'] = NULL;
$arguments3['key'] = NULL;
$arguments3['reverse'] = false;
$arguments3['iteration'] = NULL;
$array5 = array (
);$arguments3['each'] = $renderingContext->getVariableProvider()->getByPath('optionArray', $array5);
$arguments3['as'] = 'option';
$arguments3['key'] = 'key';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
	</ul>
</div>
';

return $output0;
}


}
#