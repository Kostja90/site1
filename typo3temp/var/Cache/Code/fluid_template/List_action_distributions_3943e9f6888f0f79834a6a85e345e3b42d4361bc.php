<?php

class List_action_distributions_3943e9f6888f0f79834a6a85e345e3b42d4361bc extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'main';
}
public function hasLayout() {
return TRUE;
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
  'em' => 
  array (
    0 => 'TYPO3\\CMS\\Extensionmanager\\ViewHelpers',
  ),
));
}

/**
 * section headline
 */
public function section_9cd7c186300be56726877e2025e8375d991b084a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return 'Get Distributions';
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['key'] = 'distributions';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h1>
';

return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output3 = '';

$output3 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
				<div class="row">
					<div class="col-sm-6">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
							<div class="input-group">
								<span class="input-group-btn">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['additionalAttributes'] = NULL;
$arguments63['data'] = NULL;
$arguments63['name'] = NULL;
$arguments63['value'] = NULL;
$arguments63['property'] = NULL;
$arguments63['disabled'] = NULL;
$arguments63['class'] = NULL;
$arguments63['dir'] = NULL;
$arguments63['id'] = NULL;
$arguments63['lang'] = NULL;
$arguments63['style'] = NULL;
$arguments63['title'] = NULL;
$arguments63['accesskey'] = NULL;
$arguments63['tabindex'] = NULL;
$arguments63['onclick'] = NULL;
$arguments63['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['key'] = NULL;
$arguments65['id'] = NULL;
$arguments65['default'] = NULL;
$arguments65['htmlEscape'] = NULL;
$arguments65['arguments'] = NULL;
$arguments65['extensionName'] = NULL;
$arguments65['key'] = 'extensionList.showUnsuitableDistributions';
$arguments63['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output62 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output62 .= '
								</span>
							</div>
						';
return $output62;
};
$arguments59 = array();
$arguments59['additionalAttributes'] = NULL;
$arguments59['data'] = NULL;
$arguments59['action'] = NULL;
$arguments59['arguments'] = array (
);
$arguments59['controller'] = NULL;
$arguments59['extensionName'] = NULL;
$arguments59['pluginName'] = NULL;
$arguments59['pageUid'] = NULL;
$arguments59['object'] = NULL;
$arguments59['pageType'] = 0;
$arguments59['noCache'] = false;
$arguments59['noCacheHash'] = false;
$arguments59['section'] = '';
$arguments59['format'] = '';
$arguments59['additionalParams'] = array (
);
$arguments59['absolute'] = false;
$arguments59['addQueryString'] = false;
$arguments59['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments59['addQueryStringMethod'] = 'GET';
$arguments59['fieldNamePrefix'] = NULL;
$arguments59['actionUri'] = NULL;
$arguments59['objectName'] = NULL;
$arguments59['hiddenFieldClassName'] = NULL;
$arguments59['enctype'] = NULL;
$arguments59['method'] = NULL;
$arguments59['name'] = NULL;
$arguments59['onreset'] = NULL;
$arguments59['onsubmit'] = NULL;
$arguments59['target'] = NULL;
$arguments59['novalidate'] = NULL;
$arguments59['class'] = NULL;
$arguments59['dir'] = NULL;
$arguments59['id'] = NULL;
$arguments59['lang'] = NULL;
$arguments59['style'] = NULL;
$arguments59['title'] = NULL;
$arguments59['accesskey'] = NULL;
$arguments59['tabindex'] = NULL;
$arguments59['onclick'] = NULL;
$arguments59['class'] = 'typo3-extensionmanager-unsuitable-dist';
$arguments59['action'] = 'distributions';
// Rendering Array
$array61 = array();
$array61['showUnsuitableDistributions'] = 1;
$arguments59['arguments'] = $array61;

$output58 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '
					</div>
				</div>
			';
return $output58;
};
$arguments53 = array();
$arguments53['then'] = NULL;
$arguments53['else'] = NULL;
$arguments53['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array55 = array();
$array56 = array (
);$array55['0'] = $renderingContext->getVariableProvider()->getByPath('showUnsuitableDistributions', $array56);
$array55['1'] = ' == 0';

$expression57 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments53['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression57(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array55)
					),
					$renderingContext
				);
$arguments53['__thenClosure'] = $renderChildrenClosure54;

$output52 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '
			<div class="distribution-holder">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['section'] = NULL;
$arguments71['partial'] = NULL;
$arguments71['delegate'] = NULL;
$arguments71['renderable'] = NULL;
$arguments71['arguments'] = array (
);
$arguments71['optional'] = false;
$arguments71['default'] = NULL;
$arguments71['contentAs'] = NULL;
$arguments71['partial'] = 'List/Distribution';
// Rendering Array
$array73 = array();
$array74 = array (
);$array73['distribution'] = $renderingContext->getVariableProvider()->getByPath('distribution', $array74);
$array73['official'] = 1;
$arguments71['arguments'] = $array73;

$output70 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
				';
return $output70;
};
$arguments67 = array();
$arguments67['each'] = NULL;
$arguments67['as'] = NULL;
$arguments67['key'] = NULL;
$arguments67['reverse'] = false;
$arguments67['iteration'] = NULL;
$array69 = array (
);$arguments67['each'] = $renderingContext->getVariableProvider()->getByPath('officialDistributions', $array69);
$arguments67['as'] = 'distribution';

$output52 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output52 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['section'] = NULL;
$arguments79['partial'] = NULL;
$arguments79['delegate'] = NULL;
$arguments79['renderable'] = NULL;
$arguments79['arguments'] = array (
);
$arguments79['optional'] = false;
$arguments79['default'] = NULL;
$arguments79['contentAs'] = NULL;
$arguments79['partial'] = 'List/Distribution';
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['distribution'] = $renderingContext->getVariableProvider()->getByPath('distribution', $array82);
$array81['official'] = 0;
$arguments79['arguments'] = $array81;

$output78 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '
				';
return $output78;
};
$arguments75 = array();
$arguments75['each'] = NULL;
$arguments75['as'] = NULL;
$arguments75['key'] = NULL;
$arguments75['reverse'] = false;
$arguments75['iteration'] = NULL;
$array77 = array (
);$arguments75['each'] = $renderingContext->getVariableProvider()->getByPath('communityDistributions', $array77);
$arguments75['as'] = 'distribution';

$output52 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output52 .= '
			</div>
		';
return $output52;
};
$arguments50 = array();

$output49 .= '';

$output49 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
			<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['key'] = NULL;
$arguments86['id'] = NULL;
$arguments86['default'] = NULL;
$arguments86['htmlEscape'] = NULL;
$arguments86['arguments'] = NULL;
$arguments86['extensionName'] = NULL;
$arguments86['key'] = 'extensionList.installImpexp';

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext)]);

$output85 .= '</p>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
				<span class="fa fa-cloud-download">&nbsp;</span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return 'Install impexp';
};
$arguments92 = array();
$arguments92['key'] = NULL;
$arguments92['id'] = NULL;
$arguments92['default'] = NULL;
$arguments92['htmlEscape'] = NULL;
$arguments92['arguments'] = NULL;
$arguments92['extensionName'] = NULL;
$arguments92['key'] = 'distribution.installImpexp';

$output91 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext)]);

$output91 .= '
			';
return $output91;
};
$arguments88 = array();
$arguments88['action'] = NULL;
$arguments88['arguments'] = array (
);
$arguments88['controller'] = NULL;
$arguments88['extensionName'] = NULL;
$arguments88['pluginName'] = NULL;
$arguments88['pageUid'] = NULL;
$arguments88['pageType'] = 0;
$arguments88['noCache'] = false;
$arguments88['noCacheHash'] = false;
$arguments88['section'] = '';
$arguments88['format'] = '';
$arguments88['linkAccessRestrictedPages'] = false;
$arguments88['additionalParams'] = array (
);
$arguments88['absolute'] = false;
$arguments88['addQueryString'] = false;
$arguments88['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments88['addQueryStringMethod'] = NULL;
$arguments88['additionalAttributes'] = NULL;
$arguments88['data'] = NULL;
$arguments88['class'] = NULL;
$arguments88['dir'] = NULL;
$arguments88['id'] = NULL;
$arguments88['lang'] = NULL;
$arguments88['style'] = NULL;
$arguments88['title'] = NULL;
$arguments88['accesskey'] = NULL;
$arguments88['tabindex'] = NULL;
$arguments88['onclick'] = NULL;
$arguments88['name'] = NULL;
$arguments88['rel'] = NULL;
$arguments88['rev'] = NULL;
$arguments88['target'] = NULL;
$arguments88['action'] = 'toggleExtensionInstallationState';
$arguments88['controller'] = 'Action';
// Rendering Array
$array90 = array();
$array90['extensionKey'] = 'impexp';
$arguments88['arguments'] = $array90;
$arguments88['class'] = 'btn btn-default t3-button-action-installdistribution';

$output85 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output85 .= '
		';
return $output85;
};
$arguments83 = array();
$arguments83['if'] = NULL;

$output49 .= '';

$output49 .= '
	';
return $output49;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['0'] = $renderingContext->getVariableProvider()->getByPath('enableDistributionsView', $array47);

$expression48 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression48(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
				<div class="row">
					<div class="col-sm-6">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
							<div class="input-group">
								<span class="input-group-btn">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['name'] = NULL;
$arguments17['value'] = NULL;
$arguments17['property'] = NULL;
$arguments17['disabled'] = NULL;
$arguments17['class'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$arguments17['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['htmlEscape'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['key'] = 'extensionList.showUnsuitableDistributions';
$arguments17['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
								</span>
							</div>
						';
return $output16;
};
$arguments13 = array();
$arguments13['additionalAttributes'] = NULL;
$arguments13['data'] = NULL;
$arguments13['action'] = NULL;
$arguments13['arguments'] = array (
);
$arguments13['controller'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['pluginName'] = NULL;
$arguments13['pageUid'] = NULL;
$arguments13['object'] = NULL;
$arguments13['pageType'] = 0;
$arguments13['noCache'] = false;
$arguments13['noCacheHash'] = false;
$arguments13['section'] = '';
$arguments13['format'] = '';
$arguments13['additionalParams'] = array (
);
$arguments13['absolute'] = false;
$arguments13['addQueryString'] = false;
$arguments13['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments13['addQueryStringMethod'] = 'GET';
$arguments13['fieldNamePrefix'] = NULL;
$arguments13['actionUri'] = NULL;
$arguments13['objectName'] = NULL;
$arguments13['hiddenFieldClassName'] = NULL;
$arguments13['enctype'] = NULL;
$arguments13['method'] = NULL;
$arguments13['name'] = NULL;
$arguments13['onreset'] = NULL;
$arguments13['onsubmit'] = NULL;
$arguments13['target'] = NULL;
$arguments13['novalidate'] = NULL;
$arguments13['class'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$arguments13['class'] = 'typo3-extensionmanager-unsuitable-dist';
$arguments13['action'] = 'distributions';
// Rendering Array
$array15 = array();
$array15['showUnsuitableDistributions'] = 1;
$arguments13['arguments'] = $array15;

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
					</div>
				</div>
			';
return $output12;
};
$arguments7 = array();
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['0'] = $renderingContext->getVariableProvider()->getByPath('showUnsuitableDistributions', $array10);
$array9['1'] = ' == 0';

$expression11 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)
					),
					$renderingContext
				);
$arguments7['__thenClosure'] = $renderChildrenClosure8;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
			<div class="distribution-holder">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['section'] = NULL;
$arguments25['partial'] = NULL;
$arguments25['delegate'] = NULL;
$arguments25['renderable'] = NULL;
$arguments25['arguments'] = array (
);
$arguments25['optional'] = false;
$arguments25['default'] = NULL;
$arguments25['contentAs'] = NULL;
$arguments25['partial'] = 'List/Distribution';
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['distribution'] = $renderingContext->getVariableProvider()->getByPath('distribution', $array28);
$array27['official'] = 1;
$arguments25['arguments'] = $array27;

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
				';
return $output24;
};
$arguments21 = array();
$arguments21['each'] = NULL;
$arguments21['as'] = NULL;
$arguments21['key'] = NULL;
$arguments21['reverse'] = false;
$arguments21['iteration'] = NULL;
$array23 = array (
);$arguments21['each'] = $renderingContext->getVariableProvider()->getByPath('officialDistributions', $array23);
$arguments21['as'] = 'distribution';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['section'] = NULL;
$arguments33['partial'] = NULL;
$arguments33['delegate'] = NULL;
$arguments33['renderable'] = NULL;
$arguments33['arguments'] = array (
);
$arguments33['optional'] = false;
$arguments33['default'] = NULL;
$arguments33['contentAs'] = NULL;
$arguments33['partial'] = 'List/Distribution';
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['distribution'] = $renderingContext->getVariableProvider()->getByPath('distribution', $array36);
$array35['official'] = 0;
$arguments33['arguments'] = $array35;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
				';
return $output32;
};
$arguments29 = array();
$arguments29['each'] = NULL;
$arguments29['as'] = NULL;
$arguments29['key'] = NULL;
$arguments29['reverse'] = false;
$arguments29['iteration'] = NULL;
$array31 = array (
);$arguments29['each'] = $renderingContext->getVariableProvider()->getByPath('communityDistributions', $array31);
$arguments29['as'] = 'distribution';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output6 .= '
			</div>
		';
return $output6;
};
$arguments4['__elseClosures'][] = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
			<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['key'] = NULL;
$arguments38['id'] = NULL;
$arguments38['default'] = NULL;
$arguments38['htmlEscape'] = NULL;
$arguments38['arguments'] = NULL;
$arguments38['extensionName'] = NULL;
$arguments38['key'] = 'extensionList.installImpexp';

$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);

$output37 .= '</p>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
				<span class="fa fa-cloud-download">&nbsp;</span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return 'Install impexp';
};
$arguments44 = array();
$arguments44['key'] = NULL;
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['htmlEscape'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$arguments44['key'] = 'distribution.installImpexp';

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output43 .= '
			';
return $output43;
};
$arguments40 = array();
$arguments40['action'] = NULL;
$arguments40['arguments'] = array (
);
$arguments40['controller'] = NULL;
$arguments40['extensionName'] = NULL;
$arguments40['pluginName'] = NULL;
$arguments40['pageUid'] = NULL;
$arguments40['pageType'] = 0;
$arguments40['noCache'] = false;
$arguments40['noCacheHash'] = false;
$arguments40['section'] = '';
$arguments40['format'] = '';
$arguments40['linkAccessRestrictedPages'] = false;
$arguments40['additionalParams'] = array (
);
$arguments40['absolute'] = false;
$arguments40['addQueryString'] = false;
$arguments40['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments40['addQueryStringMethod'] = NULL;
$arguments40['additionalAttributes'] = NULL;
$arguments40['data'] = NULL;
$arguments40['class'] = NULL;
$arguments40['dir'] = NULL;
$arguments40['id'] = NULL;
$arguments40['lang'] = NULL;
$arguments40['style'] = NULL;
$arguments40['title'] = NULL;
$arguments40['accesskey'] = NULL;
$arguments40['tabindex'] = NULL;
$arguments40['onclick'] = NULL;
$arguments40['name'] = NULL;
$arguments40['rel'] = NULL;
$arguments40['rev'] = NULL;
$arguments40['target'] = NULL;
$arguments40['action'] = 'toggleExtensionInstallationState';
$arguments40['controller'] = 'Action';
// Rendering Array
$array42 = array();
$array42['extensionKey'] = 'impexp';
$arguments40['arguments'] = $array42;
$arguments40['class'] = 'btn btn-default t3-button-action-installdistribution';

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output37 .= '
		';
return $output37;
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
';

return $output3;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output94 = '';

$output94 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['name'] = NULL;
$arguments95['name'] = 'main';

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output94 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return 'Get Distributions';
};
$arguments100 = array();
$arguments100['key'] = NULL;
$arguments100['id'] = NULL;
$arguments100['default'] = NULL;
$arguments100['htmlEscape'] = NULL;
$arguments100['arguments'] = NULL;
$arguments100['extensionName'] = NULL;
$arguments100['key'] = 'distributions';

$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext)]);

$output99 .= '</h1>
';
return $output99;
};
$arguments97 = array();
$arguments97['name'] = NULL;
$arguments97['name'] = 'headline';

$output94 .= NULL;

$output94 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$output153 = '';

$output153 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
$output159 = '';

$output159 .= '
				<div class="row">
					<div class="col-sm-6">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
$output163 = '';

$output163 .= '
							<div class="input-group">
								<span class="input-group-btn">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments164 = array();
$arguments164['additionalAttributes'] = NULL;
$arguments164['data'] = NULL;
$arguments164['name'] = NULL;
$arguments164['value'] = NULL;
$arguments164['property'] = NULL;
$arguments164['disabled'] = NULL;
$arguments164['class'] = NULL;
$arguments164['dir'] = NULL;
$arguments164['id'] = NULL;
$arguments164['lang'] = NULL;
$arguments164['style'] = NULL;
$arguments164['title'] = NULL;
$arguments164['accesskey'] = NULL;
$arguments164['tabindex'] = NULL;
$arguments164['onclick'] = NULL;
$arguments164['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments166 = array();
$arguments166['key'] = NULL;
$arguments166['id'] = NULL;
$arguments166['default'] = NULL;
$arguments166['htmlEscape'] = NULL;
$arguments166['arguments'] = NULL;
$arguments166['extensionName'] = NULL;
$arguments166['key'] = 'extensionList.showUnsuitableDistributions';
$arguments164['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);

$output163 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output163 .= '
								</span>
							</div>
						';
return $output163;
};
$arguments160 = array();
$arguments160['additionalAttributes'] = NULL;
$arguments160['data'] = NULL;
$arguments160['action'] = NULL;
$arguments160['arguments'] = array (
);
$arguments160['controller'] = NULL;
$arguments160['extensionName'] = NULL;
$arguments160['pluginName'] = NULL;
$arguments160['pageUid'] = NULL;
$arguments160['object'] = NULL;
$arguments160['pageType'] = 0;
$arguments160['noCache'] = false;
$arguments160['noCacheHash'] = false;
$arguments160['section'] = '';
$arguments160['format'] = '';
$arguments160['additionalParams'] = array (
);
$arguments160['absolute'] = false;
$arguments160['addQueryString'] = false;
$arguments160['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments160['addQueryStringMethod'] = 'GET';
$arguments160['fieldNamePrefix'] = NULL;
$arguments160['actionUri'] = NULL;
$arguments160['objectName'] = NULL;
$arguments160['hiddenFieldClassName'] = NULL;
$arguments160['enctype'] = NULL;
$arguments160['method'] = NULL;
$arguments160['name'] = NULL;
$arguments160['onreset'] = NULL;
$arguments160['onsubmit'] = NULL;
$arguments160['target'] = NULL;
$arguments160['novalidate'] = NULL;
$arguments160['class'] = NULL;
$arguments160['dir'] = NULL;
$arguments160['id'] = NULL;
$arguments160['lang'] = NULL;
$arguments160['style'] = NULL;
$arguments160['title'] = NULL;
$arguments160['accesskey'] = NULL;
$arguments160['tabindex'] = NULL;
$arguments160['onclick'] = NULL;
$arguments160['class'] = 'typo3-extensionmanager-unsuitable-dist';
$arguments160['action'] = 'distributions';
// Rendering Array
$array162 = array();
$array162['showUnsuitableDistributions'] = 1;
$arguments160['arguments'] = $array162;

$output159 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);

$output159 .= '
					</div>
				</div>
			';
return $output159;
};
$arguments154 = array();
$arguments154['then'] = NULL;
$arguments154['else'] = NULL;
$arguments154['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array156 = array();
$array157 = array (
);$array156['0'] = $renderingContext->getVariableProvider()->getByPath('showUnsuitableDistributions', $array157);
$array156['1'] = ' == 0';

$expression158 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments154['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression158(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array156)
					),
					$renderingContext
				);
$arguments154['__thenClosure'] = $renderChildrenClosure155;

$output153 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output153 .= '
			<div class="distribution-holder">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$output171 = '';

$output171 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments172 = array();
$arguments172['section'] = NULL;
$arguments172['partial'] = NULL;
$arguments172['delegate'] = NULL;
$arguments172['renderable'] = NULL;
$arguments172['arguments'] = array (
);
$arguments172['optional'] = false;
$arguments172['default'] = NULL;
$arguments172['contentAs'] = NULL;
$arguments172['partial'] = 'List/Distribution';
// Rendering Array
$array174 = array();
$array175 = array (
);$array174['distribution'] = $renderingContext->getVariableProvider()->getByPath('distribution', $array175);
$array174['official'] = 1;
$arguments172['arguments'] = $array174;

$output171 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output171 .= '
				';
return $output171;
};
$arguments168 = array();
$arguments168['each'] = NULL;
$arguments168['as'] = NULL;
$arguments168['key'] = NULL;
$arguments168['reverse'] = false;
$arguments168['iteration'] = NULL;
$array170 = array (
);$arguments168['each'] = $renderingContext->getVariableProvider()->getByPath('officialDistributions', $array170);
$arguments168['as'] = 'distribution';

$output153 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output153 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments180 = array();
$arguments180['section'] = NULL;
$arguments180['partial'] = NULL;
$arguments180['delegate'] = NULL;
$arguments180['renderable'] = NULL;
$arguments180['arguments'] = array (
);
$arguments180['optional'] = false;
$arguments180['default'] = NULL;
$arguments180['contentAs'] = NULL;
$arguments180['partial'] = 'List/Distribution';
// Rendering Array
$array182 = array();
$array183 = array (
);$array182['distribution'] = $renderingContext->getVariableProvider()->getByPath('distribution', $array183);
$array182['official'] = 0;
$arguments180['arguments'] = $array182;

$output179 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output179 .= '
				';
return $output179;
};
$arguments176 = array();
$arguments176['each'] = NULL;
$arguments176['as'] = NULL;
$arguments176['key'] = NULL;
$arguments176['reverse'] = false;
$arguments176['iteration'] = NULL;
$array178 = array (
);$arguments176['each'] = $renderingContext->getVariableProvider()->getByPath('communityDistributions', $array178);
$arguments176['as'] = 'distribution';

$output153 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output153 .= '
			</div>
		';
return $output153;
};
$arguments151 = array();

$output150 .= '';

$output150 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
$output186 = '';

$output186 .= '
			<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments187 = array();
$arguments187['key'] = NULL;
$arguments187['id'] = NULL;
$arguments187['default'] = NULL;
$arguments187['htmlEscape'] = NULL;
$arguments187['arguments'] = NULL;
$arguments187['extensionName'] = NULL;
$arguments187['key'] = 'extensionList.installImpexp';

$output186 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext)]);

$output186 .= '</p>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$output192 = '';

$output192 .= '
				<span class="fa fa-cloud-download">&nbsp;</span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return 'Install impexp';
};
$arguments193 = array();
$arguments193['key'] = NULL;
$arguments193['id'] = NULL;
$arguments193['default'] = NULL;
$arguments193['htmlEscape'] = NULL;
$arguments193['arguments'] = NULL;
$arguments193['extensionName'] = NULL;
$arguments193['key'] = 'distribution.installImpexp';

$output192 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext)]);

$output192 .= '
			';
return $output192;
};
$arguments189 = array();
$arguments189['action'] = NULL;
$arguments189['arguments'] = array (
);
$arguments189['controller'] = NULL;
$arguments189['extensionName'] = NULL;
$arguments189['pluginName'] = NULL;
$arguments189['pageUid'] = NULL;
$arguments189['pageType'] = 0;
$arguments189['noCache'] = false;
$arguments189['noCacheHash'] = false;
$arguments189['section'] = '';
$arguments189['format'] = '';
$arguments189['linkAccessRestrictedPages'] = false;
$arguments189['additionalParams'] = array (
);
$arguments189['absolute'] = false;
$arguments189['addQueryString'] = false;
$arguments189['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments189['addQueryStringMethod'] = NULL;
$arguments189['additionalAttributes'] = NULL;
$arguments189['data'] = NULL;
$arguments189['class'] = NULL;
$arguments189['dir'] = NULL;
$arguments189['id'] = NULL;
$arguments189['lang'] = NULL;
$arguments189['style'] = NULL;
$arguments189['title'] = NULL;
$arguments189['accesskey'] = NULL;
$arguments189['tabindex'] = NULL;
$arguments189['onclick'] = NULL;
$arguments189['name'] = NULL;
$arguments189['rel'] = NULL;
$arguments189['rev'] = NULL;
$arguments189['target'] = NULL;
$arguments189['action'] = 'toggleExtensionInstallationState';
$arguments189['controller'] = 'Action';
// Rendering Array
$array191 = array();
$array191['extensionKey'] = 'impexp';
$arguments189['arguments'] = $array191;
$arguments189['class'] = 'btn btn-default t3-button-action-installdistribution';

$output186 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output186 .= '
		';
return $output186;
};
$arguments184 = array();
$arguments184['if'] = NULL;

$output150 .= '';

$output150 .= '
	';
return $output150;
};
$arguments105 = array();
$arguments105['then'] = NULL;
$arguments105['else'] = NULL;
$arguments105['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array147 = array();
$array148 = array (
);$array147['0'] = $renderingContext->getVariableProvider()->getByPath('enableDistributionsView', $array148);

$expression149 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments105['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression149(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array147)
					),
					$renderingContext
				);
$arguments105['__thenClosure'] = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
				<div class="row">
					<div class="col-sm-6">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output117 = '';

$output117 .= '
							<div class="input-group">
								<span class="input-group-btn">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['additionalAttributes'] = NULL;
$arguments118['data'] = NULL;
$arguments118['name'] = NULL;
$arguments118['value'] = NULL;
$arguments118['property'] = NULL;
$arguments118['disabled'] = NULL;
$arguments118['class'] = NULL;
$arguments118['dir'] = NULL;
$arguments118['id'] = NULL;
$arguments118['lang'] = NULL;
$arguments118['style'] = NULL;
$arguments118['title'] = NULL;
$arguments118['accesskey'] = NULL;
$arguments118['tabindex'] = NULL;
$arguments118['onclick'] = NULL;
$arguments118['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments120 = array();
$arguments120['key'] = NULL;
$arguments120['id'] = NULL;
$arguments120['default'] = NULL;
$arguments120['htmlEscape'] = NULL;
$arguments120['arguments'] = NULL;
$arguments120['extensionName'] = NULL;
$arguments120['key'] = 'extensionList.showUnsuitableDistributions';
$arguments118['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output117 .= '
								</span>
							</div>
						';
return $output117;
};
$arguments114 = array();
$arguments114['additionalAttributes'] = NULL;
$arguments114['data'] = NULL;
$arguments114['action'] = NULL;
$arguments114['arguments'] = array (
);
$arguments114['controller'] = NULL;
$arguments114['extensionName'] = NULL;
$arguments114['pluginName'] = NULL;
$arguments114['pageUid'] = NULL;
$arguments114['object'] = NULL;
$arguments114['pageType'] = 0;
$arguments114['noCache'] = false;
$arguments114['noCacheHash'] = false;
$arguments114['section'] = '';
$arguments114['format'] = '';
$arguments114['additionalParams'] = array (
);
$arguments114['absolute'] = false;
$arguments114['addQueryString'] = false;
$arguments114['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments114['addQueryStringMethod'] = 'GET';
$arguments114['fieldNamePrefix'] = NULL;
$arguments114['actionUri'] = NULL;
$arguments114['objectName'] = NULL;
$arguments114['hiddenFieldClassName'] = NULL;
$arguments114['enctype'] = NULL;
$arguments114['method'] = NULL;
$arguments114['name'] = NULL;
$arguments114['onreset'] = NULL;
$arguments114['onsubmit'] = NULL;
$arguments114['target'] = NULL;
$arguments114['novalidate'] = NULL;
$arguments114['class'] = NULL;
$arguments114['dir'] = NULL;
$arguments114['id'] = NULL;
$arguments114['lang'] = NULL;
$arguments114['style'] = NULL;
$arguments114['title'] = NULL;
$arguments114['accesskey'] = NULL;
$arguments114['tabindex'] = NULL;
$arguments114['onclick'] = NULL;
$arguments114['class'] = 'typo3-extensionmanager-unsuitable-dist';
$arguments114['action'] = 'distributions';
// Rendering Array
$array116 = array();
$array116['showUnsuitableDistributions'] = 1;
$arguments114['arguments'] = $array116;

$output113 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output113 .= '
					</div>
				</div>
			';
return $output113;
};
$arguments108 = array();
$arguments108['then'] = NULL;
$arguments108['else'] = NULL;
$arguments108['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array110 = array();
$array111 = array (
);$array110['0'] = $renderingContext->getVariableProvider()->getByPath('showUnsuitableDistributions', $array111);
$array110['1'] = ' == 0';

$expression112 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments108['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression112(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array110)
					),
					$renderingContext
				);
$arguments108['__thenClosure'] = $renderChildrenClosure109;

$output107 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output107 .= '
			<div class="distribution-holder">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['section'] = NULL;
$arguments126['partial'] = NULL;
$arguments126['delegate'] = NULL;
$arguments126['renderable'] = NULL;
$arguments126['arguments'] = array (
);
$arguments126['optional'] = false;
$arguments126['default'] = NULL;
$arguments126['contentAs'] = NULL;
$arguments126['partial'] = 'List/Distribution';
// Rendering Array
$array128 = array();
$array129 = array (
);$array128['distribution'] = $renderingContext->getVariableProvider()->getByPath('distribution', $array129);
$array128['official'] = 1;
$arguments126['arguments'] = $array128;

$output125 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output125 .= '
				';
return $output125;
};
$arguments122 = array();
$arguments122['each'] = NULL;
$arguments122['as'] = NULL;
$arguments122['key'] = NULL;
$arguments122['reverse'] = false;
$arguments122['iteration'] = NULL;
$array124 = array (
);$arguments122['each'] = $renderingContext->getVariableProvider()->getByPath('officialDistributions', $array124);
$arguments122['as'] = 'distribution';

$output107 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output107 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments134 = array();
$arguments134['section'] = NULL;
$arguments134['partial'] = NULL;
$arguments134['delegate'] = NULL;
$arguments134['renderable'] = NULL;
$arguments134['arguments'] = array (
);
$arguments134['optional'] = false;
$arguments134['default'] = NULL;
$arguments134['contentAs'] = NULL;
$arguments134['partial'] = 'List/Distribution';
// Rendering Array
$array136 = array();
$array137 = array (
);$array136['distribution'] = $renderingContext->getVariableProvider()->getByPath('distribution', $array137);
$array136['official'] = 0;
$arguments134['arguments'] = $array136;

$output133 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output133 .= '
				';
return $output133;
};
$arguments130 = array();
$arguments130['each'] = NULL;
$arguments130['as'] = NULL;
$arguments130['key'] = NULL;
$arguments130['reverse'] = false;
$arguments130['iteration'] = NULL;
$array132 = array (
);$arguments130['each'] = $renderingContext->getVariableProvider()->getByPath('communityDistributions', $array132);
$arguments130['as'] = 'distribution';

$output107 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output107 .= '
			</div>
		';
return $output107;
};
$arguments105['__elseClosures'][] = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
			<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['key'] = NULL;
$arguments139['id'] = NULL;
$arguments139['default'] = NULL;
$arguments139['htmlEscape'] = NULL;
$arguments139['arguments'] = NULL;
$arguments139['extensionName'] = NULL;
$arguments139['key'] = 'extensionList.installImpexp';

$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext)]);

$output138 .= '</p>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
				<span class="fa fa-cloud-download">&nbsp;</span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return 'Install impexp';
};
$arguments145 = array();
$arguments145['key'] = NULL;
$arguments145['id'] = NULL;
$arguments145['default'] = NULL;
$arguments145['htmlEscape'] = NULL;
$arguments145['arguments'] = NULL;
$arguments145['extensionName'] = NULL;
$arguments145['key'] = 'distribution.installImpexp';

$output144 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext)]);

$output144 .= '
			';
return $output144;
};
$arguments141 = array();
$arguments141['action'] = NULL;
$arguments141['arguments'] = array (
);
$arguments141['controller'] = NULL;
$arguments141['extensionName'] = NULL;
$arguments141['pluginName'] = NULL;
$arguments141['pageUid'] = NULL;
$arguments141['pageType'] = 0;
$arguments141['noCache'] = false;
$arguments141['noCacheHash'] = false;
$arguments141['section'] = '';
$arguments141['format'] = '';
$arguments141['linkAccessRestrictedPages'] = false;
$arguments141['additionalParams'] = array (
);
$arguments141['absolute'] = false;
$arguments141['addQueryString'] = false;
$arguments141['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments141['addQueryStringMethod'] = NULL;
$arguments141['additionalAttributes'] = NULL;
$arguments141['data'] = NULL;
$arguments141['class'] = NULL;
$arguments141['dir'] = NULL;
$arguments141['id'] = NULL;
$arguments141['lang'] = NULL;
$arguments141['style'] = NULL;
$arguments141['title'] = NULL;
$arguments141['accesskey'] = NULL;
$arguments141['tabindex'] = NULL;
$arguments141['onclick'] = NULL;
$arguments141['name'] = NULL;
$arguments141['rel'] = NULL;
$arguments141['rev'] = NULL;
$arguments141['target'] = NULL;
$arguments141['action'] = 'toggleExtensionInstallationState';
$arguments141['controller'] = 'Action';
// Rendering Array
$array143 = array();
$array143['extensionKey'] = 'impexp';
$arguments141['arguments'] = $array143;
$arguments141['class'] = 'btn btn-default t3-button-action-installdistribution';

$output138 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output138 .= '
		';
return $output138;
};

$output104 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output104 .= '
';
return $output104;
};
$arguments102 = array();
$arguments102['name'] = NULL;
$arguments102['name'] = 'content';

$output94 .= NULL;

return $output94;
}


}
#