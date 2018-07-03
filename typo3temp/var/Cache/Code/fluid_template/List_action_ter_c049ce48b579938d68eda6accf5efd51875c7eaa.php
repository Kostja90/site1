<?php

class List_action_ter_c049ce48b579938d68eda6accf5efd51875c7eaa extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
return 'Get Extensions';
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['key'] = 'getExtensions';

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['section'] = NULL;
$arguments4['partial'] = NULL;
$arguments4['delegate'] = NULL;
$arguments4['renderable'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['optional'] = false;
$arguments4['default'] = NULL;
$arguments4['contentAs'] = NULL;
$arguments4['partial'] = 'List/UploadForm';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '

	<div class="row">
		<div class="col-sm-6">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
				<div class="input-group">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['additionalAttributes'] = NULL;
$arguments9['data'] = NULL;
$arguments9['name'] = NULL;
$arguments9['value'] = NULL;
$arguments9['property'] = NULL;
$arguments9['autofocus'] = NULL;
$arguments9['disabled'] = NULL;
$arguments9['maxlength'] = NULL;
$arguments9['readonly'] = NULL;
$arguments9['size'] = NULL;
$arguments9['placeholder'] = NULL;
$arguments9['pattern'] = NULL;
$arguments9['errorClass'] = 'f3-form-error';
$arguments9['class'] = NULL;
$arguments9['dir'] = NULL;
$arguments9['id'] = NULL;
$arguments9['lang'] = NULL;
$arguments9['style'] = NULL;
$arguments9['title'] = NULL;
$arguments9['accesskey'] = NULL;
$arguments9['tabindex'] = NULL;
$arguments9['onclick'] = NULL;
$arguments9['required'] = false;
$arguments9['type'] = 'text';
$arguments9['name'] = 'search';
$array11 = array (
);$arguments9['value'] = $renderingContext->getVariableProvider()->getByPath('search', $array11);
$arguments9['class'] = 'form-control';

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
					<span class="input-group-btn">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['additionalAttributes'] = NULL;
$arguments12['data'] = NULL;
$arguments12['name'] = NULL;
$arguments12['value'] = NULL;
$arguments12['property'] = NULL;
$arguments12['disabled'] = NULL;
$arguments12['class'] = NULL;
$arguments12['dir'] = NULL;
$arguments12['id'] = NULL;
$arguments12['lang'] = NULL;
$arguments12['style'] = NULL;
$arguments12['title'] = NULL;
$arguments12['accesskey'] = NULL;
$arguments12['tabindex'] = NULL;
$arguments12['onclick'] = NULL;
$arguments12['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['key'] = NULL;
$arguments14['id'] = NULL;
$arguments14['default'] = NULL;
$arguments14['htmlEscape'] = NULL;
$arguments14['arguments'] = NULL;
$arguments14['extensionName'] = NULL;
$arguments14['key'] = 'searchTemplate.submitButton';
$arguments12['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output8 .= '
					</span>
				</div>
			';
return $output8;
};
$arguments6 = array();
$arguments6['additionalAttributes'] = NULL;
$arguments6['data'] = NULL;
$arguments6['action'] = NULL;
$arguments6['arguments'] = array (
);
$arguments6['controller'] = NULL;
$arguments6['extensionName'] = NULL;
$arguments6['pluginName'] = NULL;
$arguments6['pageUid'] = NULL;
$arguments6['object'] = NULL;
$arguments6['pageType'] = 0;
$arguments6['noCache'] = false;
$arguments6['noCacheHash'] = false;
$arguments6['section'] = '';
$arguments6['format'] = '';
$arguments6['additionalParams'] = array (
);
$arguments6['absolute'] = false;
$arguments6['addQueryString'] = false;
$arguments6['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments6['addQueryStringMethod'] = 'GET';
$arguments6['fieldNamePrefix'] = NULL;
$arguments6['actionUri'] = NULL;
$arguments6['objectName'] = NULL;
$arguments6['hiddenFieldClassName'] = NULL;
$arguments6['enctype'] = NULL;
$arguments6['method'] = NULL;
$arguments6['name'] = NULL;
$arguments6['onreset'] = NULL;
$arguments6['onsubmit'] = NULL;
$arguments6['target'] = NULL;
$arguments6['novalidate'] = NULL;
$arguments6['class'] = NULL;
$arguments6['dir'] = NULL;
$arguments6['id'] = NULL;
$arguments6['lang'] = NULL;
$arguments6['style'] = NULL;
$arguments6['title'] = NULL;
$arguments6['accesskey'] = NULL;
$arguments6['tabindex'] = NULL;
$arguments6['onclick'] = NULL;
$arguments6['class'] = 'typo3-extensionmanager-searchTerForm form-inline';
$arguments6['action'] = 'ter';

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
		</div>
		<div class="col-sm-6">
			<div class="pull-right">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['section'] = NULL;
$arguments16['partial'] = NULL;
$arguments16['delegate'] = NULL;
$arguments16['renderable'] = NULL;
$arguments16['arguments'] = array (
);
$arguments16['optional'] = false;
$arguments16['default'] = NULL;
$arguments16['contentAs'] = NULL;
$arguments16['partial'] = 'List/UpdateFromTer';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output3 .= '
			</div>
		</div>
	</div>

	<div id="terTableWrapper">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
				<table id="terSearchTable" class="table table-striped table-hover typo3-extension-list">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['section'] = NULL;
$arguments40['partial'] = NULL;
$arguments40['delegate'] = NULL;
$arguments40['renderable'] = NULL;
$arguments40['arguments'] = array (
);
$arguments40['optional'] = false;
$arguments40['default'] = NULL;
$arguments40['contentAs'] = NULL;
$arguments40['partial'] = 'List/TerTable';
// Rendering Array
$array42 = array();
$array43 = array (
);$array42['paginatedExtensions'] = $renderingContext->getVariableProvider()->getByPath('extensions', $array43);
$array44 = array (
);$array42['availableAndInstalled'] = $renderingContext->getVariableProvider()->getByPath('availableAndInstalled', $array44);
$arguments40['arguments'] = $array42;

$output39 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
				</table>
			';
return $output39;
};
$arguments37 = array();

$output36 .= '';

$output36 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['section'] = NULL;
$arguments48['partial'] = NULL;
$arguments48['delegate'] = NULL;
$arguments48['renderable'] = NULL;
$arguments48['arguments'] = array (
);
$arguments48['optional'] = false;
$arguments48['default'] = NULL;
$arguments48['contentAs'] = NULL;
$arguments48['partial'] = 'List/TerPaginator';
// Rendering Array
$array50 = array();
$array51 = array (
);$array50['extensions'] = $renderingContext->getVariableProvider()->getByPath('extensions', $array51);
$array52 = array (
);$array50['showVersionList'] = $renderingContext->getVariableProvider()->getByPath('showVersionList', $array52);
$array53 = array (
);$array50['availableAndInstalled'] = $renderingContext->getVariableProvider()->getByPath('availableAndInstalled', $array53);
$arguments48['arguments'] = $array50;

$output47 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
			';
return $output47;
};
$arguments45 = array();
$arguments45['if'] = NULL;

$output36 .= '';

$output36 .= '
		';
return $output36;
};
$arguments18 = array();
$arguments18['then'] = NULL;
$arguments18['else'] = NULL;
$arguments18['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['0'] = $renderingContext->getVariableProvider()->getByPath('search', $array34);

$expression35 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments18['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$arguments18['__thenClosure'] = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
				<table id="terSearchTable" class="table table-striped table-hover typo3-extension-list">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['section'] = NULL;
$arguments21['partial'] = NULL;
$arguments21['delegate'] = NULL;
$arguments21['renderable'] = NULL;
$arguments21['arguments'] = array (
);
$arguments21['optional'] = false;
$arguments21['default'] = NULL;
$arguments21['contentAs'] = NULL;
$arguments21['partial'] = 'List/TerTable';
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['paginatedExtensions'] = $renderingContext->getVariableProvider()->getByPath('extensions', $array24);
$array25 = array (
);$array23['availableAndInstalled'] = $renderingContext->getVariableProvider()->getByPath('availableAndInstalled', $array25);
$arguments21['arguments'] = $array23;

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '
				</table>
			';
return $output20;
};
$arguments18['__elseClosures'][] = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['section'] = NULL;
$arguments27['partial'] = NULL;
$arguments27['delegate'] = NULL;
$arguments27['renderable'] = NULL;
$arguments27['arguments'] = array (
);
$arguments27['optional'] = false;
$arguments27['default'] = NULL;
$arguments27['contentAs'] = NULL;
$arguments27['partial'] = 'List/TerPaginator';
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['extensions'] = $renderingContext->getVariableProvider()->getByPath('extensions', $array30);
$array31 = array (
);$array29['showVersionList'] = $renderingContext->getVariableProvider()->getByPath('showVersionList', $array31);
$array32 = array (
);$array29['availableAndInstalled'] = $renderingContext->getVariableProvider()->getByPath('availableAndInstalled', $array32);
$arguments27['arguments'] = $array29;

$output26 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '
			';
return $output26;
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output3 .= '
		<div class="splash-receivedata x-mask-loading">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['identifier'] = NULL;
$arguments54['size'] = 'small';
$arguments54['overlay'] = NULL;
$arguments54['state'] = 'default';
$arguments54['alternativeMarkupIdentifier'] = NULL;
$arguments54['identifier'] = 'spinner-circle-dark';

$output3 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output3 .= ' ';
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
$arguments56['key'] = 'extensionList.updateFromTer.label';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output3 .= '</div>
	</div>

';

return $output3;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output58 = '';

$output58 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['name'] = NULL;
$arguments59['name'] = 'main';

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output58 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return 'Get Extensions';
};
$arguments64 = array();
$arguments64['key'] = NULL;
$arguments64['id'] = NULL;
$arguments64['default'] = NULL;
$arguments64['htmlEscape'] = NULL;
$arguments64['arguments'] = NULL;
$arguments64['extensionName'] = NULL;
$arguments64['key'] = 'getExtensions';

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext)]);

$output63 .= '</h1>
';
return $output63;
};
$arguments61 = array();
$arguments61['name'] = NULL;
$arguments61['name'] = 'headline';

$output58 .= NULL;

$output58 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output68 = '';

$output68 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['section'] = NULL;
$arguments69['partial'] = NULL;
$arguments69['delegate'] = NULL;
$arguments69['renderable'] = NULL;
$arguments69['arguments'] = array (
);
$arguments69['optional'] = false;
$arguments69['default'] = NULL;
$arguments69['contentAs'] = NULL;
$arguments69['partial'] = 'List/UploadForm';

$output68 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output68 .= '

	<div class="row">
		<div class="col-sm-6">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
				<div class="input-group">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['additionalAttributes'] = NULL;
$arguments74['data'] = NULL;
$arguments74['name'] = NULL;
$arguments74['value'] = NULL;
$arguments74['property'] = NULL;
$arguments74['autofocus'] = NULL;
$arguments74['disabled'] = NULL;
$arguments74['maxlength'] = NULL;
$arguments74['readonly'] = NULL;
$arguments74['size'] = NULL;
$arguments74['placeholder'] = NULL;
$arguments74['pattern'] = NULL;
$arguments74['errorClass'] = 'f3-form-error';
$arguments74['class'] = NULL;
$arguments74['dir'] = NULL;
$arguments74['id'] = NULL;
$arguments74['lang'] = NULL;
$arguments74['style'] = NULL;
$arguments74['title'] = NULL;
$arguments74['accesskey'] = NULL;
$arguments74['tabindex'] = NULL;
$arguments74['onclick'] = NULL;
$arguments74['required'] = false;
$arguments74['type'] = 'text';
$arguments74['name'] = 'search';
$array76 = array (
);$arguments74['value'] = $renderingContext->getVariableProvider()->getByPath('search', $array76);
$arguments74['class'] = 'form-control';

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '
					<span class="input-group-btn">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['additionalAttributes'] = NULL;
$arguments77['data'] = NULL;
$arguments77['name'] = NULL;
$arguments77['value'] = NULL;
$arguments77['property'] = NULL;
$arguments77['disabled'] = NULL;
$arguments77['class'] = NULL;
$arguments77['dir'] = NULL;
$arguments77['id'] = NULL;
$arguments77['lang'] = NULL;
$arguments77['style'] = NULL;
$arguments77['title'] = NULL;
$arguments77['accesskey'] = NULL;
$arguments77['tabindex'] = NULL;
$arguments77['onclick'] = NULL;
$arguments77['class'] = 'btn btn-default';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['key'] = NULL;
$arguments79['id'] = NULL;
$arguments79['default'] = NULL;
$arguments79['htmlEscape'] = NULL;
$arguments79['arguments'] = NULL;
$arguments79['extensionName'] = NULL;
$arguments79['key'] = 'searchTemplate.submitButton';
$arguments77['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output73 .= '
					</span>
				</div>
			';
return $output73;
};
$arguments71 = array();
$arguments71['additionalAttributes'] = NULL;
$arguments71['data'] = NULL;
$arguments71['action'] = NULL;
$arguments71['arguments'] = array (
);
$arguments71['controller'] = NULL;
$arguments71['extensionName'] = NULL;
$arguments71['pluginName'] = NULL;
$arguments71['pageUid'] = NULL;
$arguments71['object'] = NULL;
$arguments71['pageType'] = 0;
$arguments71['noCache'] = false;
$arguments71['noCacheHash'] = false;
$arguments71['section'] = '';
$arguments71['format'] = '';
$arguments71['additionalParams'] = array (
);
$arguments71['absolute'] = false;
$arguments71['addQueryString'] = false;
$arguments71['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments71['addQueryStringMethod'] = 'GET';
$arguments71['fieldNamePrefix'] = NULL;
$arguments71['actionUri'] = NULL;
$arguments71['objectName'] = NULL;
$arguments71['hiddenFieldClassName'] = NULL;
$arguments71['enctype'] = NULL;
$arguments71['method'] = NULL;
$arguments71['name'] = NULL;
$arguments71['onreset'] = NULL;
$arguments71['onsubmit'] = NULL;
$arguments71['target'] = NULL;
$arguments71['novalidate'] = NULL;
$arguments71['class'] = NULL;
$arguments71['dir'] = NULL;
$arguments71['id'] = NULL;
$arguments71['lang'] = NULL;
$arguments71['style'] = NULL;
$arguments71['title'] = NULL;
$arguments71['accesskey'] = NULL;
$arguments71['tabindex'] = NULL;
$arguments71['onclick'] = NULL;
$arguments71['class'] = 'typo3-extensionmanager-searchTerForm form-inline';
$arguments71['action'] = 'ter';

$output68 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output68 .= '
		</div>
		<div class="col-sm-6">
			<div class="pull-right">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments81 = array();
$arguments81['section'] = NULL;
$arguments81['partial'] = NULL;
$arguments81['delegate'] = NULL;
$arguments81['renderable'] = NULL;
$arguments81['arguments'] = array (
);
$arguments81['optional'] = false;
$arguments81['default'] = NULL;
$arguments81['contentAs'] = NULL;
$arguments81['partial'] = 'List/UpdateFromTer';

$output68 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output68 .= '
			</div>
		</div>
	</div>

	<div id="terTableWrapper">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
				<table id="terSearchTable" class="table table-striped table-hover typo3-extension-list">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments105 = array();
$arguments105['section'] = NULL;
$arguments105['partial'] = NULL;
$arguments105['delegate'] = NULL;
$arguments105['renderable'] = NULL;
$arguments105['arguments'] = array (
);
$arguments105['optional'] = false;
$arguments105['default'] = NULL;
$arguments105['contentAs'] = NULL;
$arguments105['partial'] = 'List/TerTable';
// Rendering Array
$array107 = array();
$array108 = array (
);$array107['paginatedExtensions'] = $renderingContext->getVariableProvider()->getByPath('extensions', $array108);
$array109 = array (
);$array107['availableAndInstalled'] = $renderingContext->getVariableProvider()->getByPath('availableAndInstalled', $array109);
$arguments105['arguments'] = $array107;

$output104 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output104 .= '
				</table>
			';
return $output104;
};
$arguments102 = array();

$output101 .= '';

$output101 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments113 = array();
$arguments113['section'] = NULL;
$arguments113['partial'] = NULL;
$arguments113['delegate'] = NULL;
$arguments113['renderable'] = NULL;
$arguments113['arguments'] = array (
);
$arguments113['optional'] = false;
$arguments113['default'] = NULL;
$arguments113['contentAs'] = NULL;
$arguments113['partial'] = 'List/TerPaginator';
// Rendering Array
$array115 = array();
$array116 = array (
);$array115['extensions'] = $renderingContext->getVariableProvider()->getByPath('extensions', $array116);
$array117 = array (
);$array115['showVersionList'] = $renderingContext->getVariableProvider()->getByPath('showVersionList', $array117);
$array118 = array (
);$array115['availableAndInstalled'] = $renderingContext->getVariableProvider()->getByPath('availableAndInstalled', $array118);
$arguments113['arguments'] = $array115;

$output112 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output112 .= '
			';
return $output112;
};
$arguments110 = array();
$arguments110['if'] = NULL;

$output101 .= '';

$output101 .= '
		';
return $output101;
};
$arguments83 = array();
$arguments83['then'] = NULL;
$arguments83['else'] = NULL;
$arguments83['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array98 = array();
$array99 = array (
);$array98['0'] = $renderingContext->getVariableProvider()->getByPath('search', $array99);

$expression100 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments83['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression100(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array98)
					),
					$renderingContext
				);
$arguments83['__thenClosure'] = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
				<table id="terSearchTable" class="table table-striped table-hover typo3-extension-list">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['section'] = NULL;
$arguments86['partial'] = NULL;
$arguments86['delegate'] = NULL;
$arguments86['renderable'] = NULL;
$arguments86['arguments'] = array (
);
$arguments86['optional'] = false;
$arguments86['default'] = NULL;
$arguments86['contentAs'] = NULL;
$arguments86['partial'] = 'List/TerTable';
// Rendering Array
$array88 = array();
$array89 = array (
);$array88['paginatedExtensions'] = $renderingContext->getVariableProvider()->getByPath('extensions', $array89);
$array90 = array (
);$array88['availableAndInstalled'] = $renderingContext->getVariableProvider()->getByPath('availableAndInstalled', $array90);
$arguments86['arguments'] = $array88;

$output85 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output85 .= '
				</table>
			';
return $output85;
};
$arguments83['__elseClosures'][] = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['section'] = NULL;
$arguments92['partial'] = NULL;
$arguments92['delegate'] = NULL;
$arguments92['renderable'] = NULL;
$arguments92['arguments'] = array (
);
$arguments92['optional'] = false;
$arguments92['default'] = NULL;
$arguments92['contentAs'] = NULL;
$arguments92['partial'] = 'List/TerPaginator';
// Rendering Array
$array94 = array();
$array95 = array (
);$array94['extensions'] = $renderingContext->getVariableProvider()->getByPath('extensions', $array95);
$array96 = array (
);$array94['showVersionList'] = $renderingContext->getVariableProvider()->getByPath('showVersionList', $array96);
$array97 = array (
);$array94['availableAndInstalled'] = $renderingContext->getVariableProvider()->getByPath('availableAndInstalled', $array97);
$arguments92['arguments'] = $array94;

$output91 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output91 .= '
			';
return $output91;
};

$output68 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output68 .= '
		<div class="splash-receivedata x-mask-loading">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments119 = array();
$arguments119['identifier'] = NULL;
$arguments119['size'] = 'small';
$arguments119['overlay'] = NULL;
$arguments119['state'] = 'default';
$arguments119['alternativeMarkupIdentifier'] = NULL;
$arguments119['identifier'] = 'spinner-circle-dark';

$output68 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output68 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments121 = array();
$arguments121['key'] = NULL;
$arguments121['id'] = NULL;
$arguments121['default'] = NULL;
$arguments121['htmlEscape'] = NULL;
$arguments121['arguments'] = NULL;
$arguments121['extensionName'] = NULL;
$arguments121['key'] = 'extensionList.updateFromTer.label';

$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext)]);

$output68 .= '</div>
	</div>

';
return $output68;
};
$arguments66 = array();
$arguments66['name'] = NULL;
$arguments66['name'] = 'content';

$output58 .= NULL;

$output58 .= '
';

return $output58;
}


}
#