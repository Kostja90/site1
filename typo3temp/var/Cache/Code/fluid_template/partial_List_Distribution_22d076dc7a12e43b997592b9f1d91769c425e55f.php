<?php

class partial_List_Distribution_22d076dc7a12e43b997592b9f1d91769c425e55f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'em' => 
  array (
    0 => 'TYPO3\\CMS\\Extensionmanager\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<div class="distribution">
	<div class="distribution-image">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
			<div class="typo3-dependency-version">
				';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\Typo3DependencyViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['extension'] = NULL;
$array9 = array (
);$arguments7['extension'] = $renderingContext->getVariableProvider()->getByPath('distribution', $array9);

$output6 .= TYPO3\CMS\Extensionmanager\ViewHelpers\Typo3DependencyViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
			</div>
		';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('distribution.dependencies', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['additionalAttributes'] = NULL;
$arguments31['data'] = NULL;
$arguments31['src'] = NULL;
$arguments31['width'] = NULL;
$arguments31['height'] = NULL;
$arguments31['fallbackImage'] = '';
$arguments31['class'] = NULL;
$arguments31['dir'] = NULL;
$arguments31['id'] = NULL;
$arguments31['lang'] = NULL;
$arguments31['style'] = NULL;
$arguments31['title'] = NULL;
$arguments31['accesskey'] = NULL;
$arguments31['tabindex'] = NULL;
$arguments31['onclick'] = NULL;
$arguments31['alt'] = NULL;
$output33 = '';

$output33 .= 'EXT:';
$array34 = array (
);
$output33 .= $renderingContext->getVariableProvider()->getByPath('distribution.extensionKey', $array34);

$output33 .= '/Resources/Public/Images/Distribution.png';
$arguments31['src'] = $output33;
$array35 = array (
);$arguments31['alt'] = $renderingContext->getVariableProvider()->getByPath('distribution.title', $array35);
$arguments31['fallbackImage'] = 'EXT:extensionmanager/Resources/Public/Images/OfficialDistribution.png';
$arguments31['height'] = 225;
$arguments31['width'] = 300;

$output30 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
			';
return $output30;
};
$arguments28 = array();

$output27 .= '';

$output27 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['additionalAttributes'] = NULL;
$arguments39['data'] = NULL;
$arguments39['src'] = NULL;
$arguments39['width'] = NULL;
$arguments39['height'] = NULL;
$arguments39['fallbackImage'] = '';
$arguments39['class'] = NULL;
$arguments39['dir'] = NULL;
$arguments39['id'] = NULL;
$arguments39['lang'] = NULL;
$arguments39['style'] = NULL;
$arguments39['title'] = NULL;
$arguments39['accesskey'] = NULL;
$arguments39['tabindex'] = NULL;
$arguments39['onclick'] = NULL;
$arguments39['alt'] = NULL;
$output41 = '';

$output41 .= 'EXT:';
$array42 = array (
);
$output41 .= $renderingContext->getVariableProvider()->getByPath('distribution.extensionKey', $array42);

$output41 .= '/Resources/Public/Images/Distribution.png';
$arguments39['src'] = $output41;
$array43 = array (
);$arguments39['alt'] = $renderingContext->getVariableProvider()->getByPath('distribution.title', $array43);
$arguments39['fallbackImage'] = 'EXT:extensionmanager/Resources/Public/Images/Distribution.png';
$arguments39['height'] = 225;
$arguments39['width'] = 300;

$output38 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
			';
return $output38;
};
$arguments36 = array();
$arguments36['if'] = NULL;

$output27 .= '';

$output27 .= '
		';
return $output27;
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['0'] = $renderingContext->getVariableProvider()->getByPath('official', $array25);

$expression26 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression26(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)
					),
					$renderingContext
				);
$arguments10['__thenClosure'] = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['additionalAttributes'] = NULL;
$arguments13['data'] = NULL;
$arguments13['src'] = NULL;
$arguments13['width'] = NULL;
$arguments13['height'] = NULL;
$arguments13['fallbackImage'] = '';
$arguments13['class'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$arguments13['alt'] = NULL;
$output15 = '';

$output15 .= 'EXT:';
$array16 = array (
);
$output15 .= $renderingContext->getVariableProvider()->getByPath('distribution.extensionKey', $array16);

$output15 .= '/Resources/Public/Images/Distribution.png';
$arguments13['src'] = $output15;
$array17 = array (
);$arguments13['alt'] = $renderingContext->getVariableProvider()->getByPath('distribution.title', $array17);
$arguments13['fallbackImage'] = 'EXT:extensionmanager/Resources/Public/Images/OfficialDistribution.png';
$arguments13['height'] = 225;
$arguments13['width'] = 300;

$output12 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
			';
return $output12;
};
$arguments10['__elseClosures'][] = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['additionalAttributes'] = NULL;
$arguments19['data'] = NULL;
$arguments19['src'] = NULL;
$arguments19['width'] = NULL;
$arguments19['height'] = NULL;
$arguments19['fallbackImage'] = '';
$arguments19['class'] = NULL;
$arguments19['dir'] = NULL;
$arguments19['id'] = NULL;
$arguments19['lang'] = NULL;
$arguments19['style'] = NULL;
$arguments19['title'] = NULL;
$arguments19['accesskey'] = NULL;
$arguments19['tabindex'] = NULL;
$arguments19['onclick'] = NULL;
$arguments19['alt'] = NULL;
$output21 = '';

$output21 .= 'EXT:';
$array22 = array (
);
$output21 .= $renderingContext->getVariableProvider()->getByPath('distribution.extensionKey', $array22);

$output21 .= '/Resources/Public/Images/Distribution.png';
$arguments19['src'] = $output21;
$array23 = array (
);$arguments19['alt'] = $renderingContext->getVariableProvider()->getByPath('distribution.title', $array23);
$arguments19['fallbackImage'] = 'EXT:extensionmanager/Resources/Public/Images/Distribution.png';
$arguments19['height'] = 225;
$arguments19['width'] = 300;

$output18 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ImageViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '
			';
return $output18;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
		<div class="distribution-hover">
			<div class="distribution-hover-inner">
				<dl class="dl-horizontal">
					<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['key'] = NULL;
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['htmlEscape'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$arguments44['key'] = 'extensionList.distribution.title';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output0 .= '</dt>
					<dd>';
$array46 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('distribution.title', $array46)]);

$output0 .= '</dd>
					<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['key'] = NULL;
$arguments47['id'] = NULL;
$arguments47['default'] = NULL;
$arguments47['htmlEscape'] = NULL;
$arguments47['arguments'] = NULL;
$arguments47['extensionName'] = NULL;
$arguments47['key'] = 'extensionList.distribution.key';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext)]);

$output0 .= '</dt>
					<dd>';
$array49 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('distribution.extensionKey', $array49)]);

$output0 .= '</dd>
					<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['key'] = NULL;
$arguments50['id'] = NULL;
$arguments50['default'] = NULL;
$arguments50['htmlEscape'] = NULL;
$arguments50['arguments'] = NULL;
$arguments50['extensionName'] = NULL;
$arguments50['key'] = 'extensionList.distribution.version';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output0 .= '</dt>
					<dd>';
$array52 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('distribution.version', $array52)]);

$output0 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$array55 = array (
);return $renderingContext->getVariableProvider()->getByPath('distribution.lastUpdated', $array55);
};
$arguments53 = array();
$arguments53['date'] = NULL;
$arguments53['format'] = '';
$arguments53['base'] = NULL;
$arguments53['format'] = 'd.m.Y';
$renderChildrenClosure54 = ($arguments53['date'] !== null) ? function() use ($arguments53) { return $arguments53['date']; } : $renderChildrenClosure54;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext)]);

$output0 .= ')</dd>
					<dt>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['key'] = NULL;
$arguments56['id'] = NULL;
$arguments56['default'] = NULL;
$arguments56['htmlEscape'] = NULL;
$arguments56['arguments'] = NULL;
$arguments56['extensionName'] = NULL;
$arguments56['key'] = 'extensionList.distribution.author';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output0 .= '</dt>
					<dd>';
$array58 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('distribution.authorName', $array58)]);

$output0 .= '</dd>
				</dl>
				<div class="distributionDescription">';
$array59 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('distribution.description', $array59)]);

$output0 .= '</div>
			</div>
		</div>
	</div>
	<div class="distribution-meta">
		<h2 class="distribution-title">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
				';
$array65 = array (
);
$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('distribution.title', $array65)]);

$output64 .= '
			';
return $output64;
};
$arguments60 = array();
$arguments60['action'] = NULL;
$arguments60['arguments'] = array (
);
$arguments60['controller'] = NULL;
$arguments60['extensionName'] = NULL;
$arguments60['pluginName'] = NULL;
$arguments60['pageUid'] = NULL;
$arguments60['pageType'] = 0;
$arguments60['noCache'] = false;
$arguments60['noCacheHash'] = false;
$arguments60['section'] = '';
$arguments60['format'] = '';
$arguments60['linkAccessRestrictedPages'] = false;
$arguments60['additionalParams'] = array (
);
$arguments60['absolute'] = false;
$arguments60['addQueryString'] = false;
$arguments60['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments60['addQueryStringMethod'] = NULL;
$arguments60['additionalAttributes'] = NULL;
$arguments60['data'] = NULL;
$arguments60['class'] = NULL;
$arguments60['dir'] = NULL;
$arguments60['id'] = NULL;
$arguments60['lang'] = NULL;
$arguments60['style'] = NULL;
$arguments60['title'] = NULL;
$arguments60['accesskey'] = NULL;
$arguments60['tabindex'] = NULL;
$arguments60['onclick'] = NULL;
$arguments60['name'] = NULL;
$arguments60['rel'] = NULL;
$arguments60['rev'] = NULL;
$arguments60['target'] = NULL;
$arguments60['action'] = 'show';
$arguments60['controller'] = 'Distribution';
// Rendering Array
$array62 = array();
$array63 = array (
);$array62['extension'] = $renderingContext->getVariableProvider()->getByPath('distribution', $array63);
$arguments60['arguments'] = $array62;
$arguments60['class'] = 'distribution-more';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output0 .= '
		</h2>
		<div class="distribution-install">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
				<span class="fa fa-cloud-download">&nbsp;</span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return 'Install';
};
$arguments71 = array();
$arguments71['key'] = NULL;
$arguments71['id'] = NULL;
$arguments71['default'] = NULL;
$arguments71['htmlEscape'] = NULL;
$arguments71['arguments'] = NULL;
$arguments71['extensionName'] = NULL;
$arguments71['key'] = 'extensionList.installDistribution';

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output70 .= '
			';
return $output70;
};
$arguments66 = array();
$arguments66['action'] = NULL;
$arguments66['arguments'] = array (
);
$arguments66['controller'] = NULL;
$arguments66['extensionName'] = NULL;
$arguments66['pluginName'] = NULL;
$arguments66['pageUid'] = NULL;
$arguments66['pageType'] = 0;
$arguments66['noCache'] = false;
$arguments66['noCacheHash'] = false;
$arguments66['section'] = '';
$arguments66['format'] = '';
$arguments66['linkAccessRestrictedPages'] = false;
$arguments66['additionalParams'] = array (
);
$arguments66['absolute'] = false;
$arguments66['addQueryString'] = false;
$arguments66['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments66['addQueryStringMethod'] = NULL;
$arguments66['additionalAttributes'] = NULL;
$arguments66['data'] = NULL;
$arguments66['class'] = NULL;
$arguments66['dir'] = NULL;
$arguments66['id'] = NULL;
$arguments66['lang'] = NULL;
$arguments66['style'] = NULL;
$arguments66['title'] = NULL;
$arguments66['accesskey'] = NULL;
$arguments66['tabindex'] = NULL;
$arguments66['onclick'] = NULL;
$arguments66['name'] = NULL;
$arguments66['rel'] = NULL;
$arguments66['rev'] = NULL;
$arguments66['target'] = NULL;
$arguments66['action'] = 'installDistribution';
$arguments66['controller'] = 'Download';
// Rendering Array
$array68 = array();
$array69 = array (
);$array68['extension'] = $renderingContext->getVariableProvider()->getByPath('distribution', $array69);
$arguments66['arguments'] = $array68;
$arguments66['class'] = 'btn btn-default t3-button-action-installdistribution';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output0 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
				<span class="label label-success">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return 'Official Distribution';
};
$arguments79 = array();
$arguments79['key'] = NULL;
$arguments79['id'] = NULL;
$arguments79['default'] = NULL;
$arguments79['htmlEscape'] = NULL;
$arguments79['arguments'] = NULL;
$arguments79['extensionName'] = NULL;
$arguments79['key'] = 'extensionList.officialDistribution';

$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext)]);

$output78 .= '
				</span>
			';
return $output78;
};
$arguments73 = array();
$arguments73['then'] = NULL;
$arguments73['else'] = NULL;
$arguments73['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array75 = array();
$array76 = array (
);$array75['0'] = $renderingContext->getVariableProvider()->getByPath('official', $array76);

$expression77 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments73['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression77(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array75)
					),
					$renderingContext
				);
$arguments73['__thenClosure'] = $renderChildrenClosure74;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output0 .= '
		</div>
	</div>
</div>';

return $output0;
}


}
#