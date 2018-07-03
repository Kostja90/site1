<?php

class partial_DatePicker_63923aac2df0decb730de1b50160304fdcb01d7a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
	<div class="form-inline">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\Form\DatePickerViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['name'] = NULL;
$arguments10['value'] = NULL;
$arguments10['property'] = NULL;
$arguments10['size'] = NULL;
$arguments10['placeholder'] = NULL;
$arguments10['errorClass'] = 'f3-form-error';
$arguments10['initialDate'] = NULL;
$arguments10['enableDatePicker'] = true;
$arguments10['previewMode'] = false;
$arguments10['dateFormat'] = 'Y-m-d';
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$array12 = array (
);$arguments10['id'] = $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier', $array12);
$array13 = array (
);$arguments10['property'] = $renderingContext->getVariableProvider()->getByPath('element.identifier', $array13);
$array14 = array (
);$arguments10['dateFormat'] = $renderingContext->getVariableProvider()->getByPath('element.properties.dateFormat', $array14);
$array15 = array (
);$arguments10['initialDate'] = $renderingContext->getVariableProvider()->getByPath('element.properties.initialDate', $array15);
// Rendering Boolean node
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['0'] = $renderingContext->getVariableProvider()->getByPath('element.properties.enableDatePicker', $array17);

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments10['enableDatePicker'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
$array19 = array (
);$arguments10['class'] = $renderingContext->getVariableProvider()->getByPath('element.properties.elementClassAttribute', $array19);
$array20 = array (
);$arguments10['errorClass'] = $renderingContext->getVariableProvider()->getByPath('element.properties.elementErrorClassAttribute', $array20);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['element'] = NULL;
$arguments21['property'] = NULL;
$arguments21['renderingOptionProperty'] = NULL;
$array23 = array (
);$arguments21['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array23);
$arguments21['property'] = 'fluidAdditionalAttributes';
$arguments10['additionalAttributes'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);
// Rendering Boolean node
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['0'] = $renderingContext->getVariableProvider()->getByPath('element.rootForm.renderingOptions.previewMode', $array25);

$expression26 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments10['previewMode'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression26(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)
					),
					$renderingContext
				);

$output9 .= TYPO3\CMS\Form\ViewHelpers\Form\DatePickerViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
		';
return $output9;
};
$arguments5 = array();
$arguments5['section'] = NULL;
$arguments5['partial'] = NULL;
$arguments5['delegate'] = NULL;
$arguments5['renderable'] = NULL;
$arguments5['arguments'] = array (
);
$arguments5['optional'] = false;
$arguments5['default'] = NULL;
$arguments5['contentAs'] = NULL;
$arguments5['partial'] = 'Field/Field';
// Rendering Array
$array7 = array();
$array8 = array (
);$array7['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array8);
$arguments5['arguments'] = $array7;
$arguments5['contentAs'] = 'elementContent';

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
			<div class="form-group';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.errors.0', $array36)]);

$expression37 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);
$arguments33['then'] = ' has-error';

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '">
				<label class="control-label" for="';
$array38 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier', $array38)]);

$output32 .= '-time">';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['element'] = NULL;
$arguments39['property'] = NULL;
$arguments39['renderingOptionProperty'] = NULL;
$array41 = array (
);$arguments39['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array41);
$arguments39['property'] = 'timeSelectorHourLabel';

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext)]);

$output32 .= '</label>
				<div class="';
$array42 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('element.properties.containerClassAttribute', $array42)]);

$output32 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\Form\TimePickerViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['additionalAttributes'] = NULL;
$arguments43['data'] = NULL;
$arguments43['name'] = NULL;
$arguments43['value'] = NULL;
$arguments43['property'] = NULL;
$arguments43['size'] = NULL;
$arguments43['placeholder'] = NULL;
$arguments43['disabled'] = NULL;
$arguments43['errorClass'] = 'f3-form-error';
$arguments43['initialDate'] = NULL;
$arguments43['timeType'] = NULL;
$arguments43['class'] = NULL;
$arguments43['dir'] = NULL;
$arguments43['id'] = NULL;
$arguments43['lang'] = NULL;
$arguments43['style'] = NULL;
$arguments43['title'] = NULL;
$arguments43['accesskey'] = NULL;
$arguments43['tabindex'] = NULL;
$arguments43['onclick'] = NULL;
$output45 = '';
$array46 = array (
);
$output45 .= $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier', $array46);

$output45 .= '-time';
$arguments43['id'] = $output45;
$array47 = array (
);$arguments43['property'] = $renderingContext->getVariableProvider()->getByPath('element.identifier', $array47);
$array48 = array (
);$arguments43['initialDate'] = $renderingContext->getVariableProvider()->getByPath('element.properties.initialDate', $array48);
$output49 = '';
$array50 = array (
);
$output49 .= $renderingContext->getVariableProvider()->getByPath('element.properties.timeSelectorClassAttribute', $array50);

$output49 .= ' form-control';
$arguments43['class'] = $output49;
$array51 = array (
);$arguments43['errorClass'] = $renderingContext->getVariableProvider()->getByPath('element.properties.elementErrorClassAttribute', $array51);
$arguments43['timeType'] = 'hour';

$output32 .= TYPO3\CMS\Form\ViewHelpers\Form\TimePickerViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output32 .= '
				</div>
			</div>
			<div class="form-group';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['then'] = NULL;
$arguments52['else'] = NULL;
$arguments52['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array54 = array();
$array55 = array (
);$array54['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('validationResults.errors.0', $array55)]);

$expression56 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments52['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression56(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)
					),
					$renderingContext
				);
$arguments52['then'] = ' has-error';

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output32 .= '">
				<label class="control-label" for="';
$array57 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier', $array57)]);

$output32 .= '-time-minute">';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['element'] = NULL;
$arguments58['property'] = NULL;
$arguments58['renderingOptionProperty'] = NULL;
$array60 = array (
);$arguments58['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array60);
$arguments58['property'] = 'timeSelectorMinuteLabel';

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext)]);

$output32 .= '</label>
				<div class="';
$array61 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('element.properties.containerClassAttribute', $array61)]);

$output32 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\Form\TimePickerViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['additionalAttributes'] = NULL;
$arguments62['data'] = NULL;
$arguments62['name'] = NULL;
$arguments62['value'] = NULL;
$arguments62['property'] = NULL;
$arguments62['size'] = NULL;
$arguments62['placeholder'] = NULL;
$arguments62['disabled'] = NULL;
$arguments62['errorClass'] = 'f3-form-error';
$arguments62['initialDate'] = NULL;
$arguments62['timeType'] = NULL;
$arguments62['class'] = NULL;
$arguments62['dir'] = NULL;
$arguments62['id'] = NULL;
$arguments62['lang'] = NULL;
$arguments62['style'] = NULL;
$arguments62['title'] = NULL;
$arguments62['accesskey'] = NULL;
$arguments62['tabindex'] = NULL;
$arguments62['onclick'] = NULL;
$output64 = '';
$array65 = array (
);
$output64 .= $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier', $array65);

$output64 .= '-time-minute';
$arguments62['id'] = $output64;
$array66 = array (
);$arguments62['property'] = $renderingContext->getVariableProvider()->getByPath('element.identifier', $array66);
$array67 = array (
);$arguments62['initialDate'] = $renderingContext->getVariableProvider()->getByPath('element.properties.initialDate', $array67);
$output68 = '';
$array69 = array (
);
$output68 .= $renderingContext->getVariableProvider()->getByPath('element.properties.timeSelectorClassAttribute', $array69);

$output68 .= ' form-control';
$arguments62['class'] = $output68;
$array70 = array (
);$arguments62['errorClass'] = $renderingContext->getVariableProvider()->getByPath('element.properties.elementErrorClassAttribute', $array70);
$arguments62['timeType'] = 'minute';

$output32 .= TYPO3\CMS\Form\ViewHelpers\Form\TimePickerViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output32 .= '
				</div>
			</div>
		';
return $output32;
};
$arguments27 = array();
$arguments27['then'] = NULL;
$arguments27['else'] = NULL;
$arguments27['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['0'] = $renderingContext->getVariableProvider()->getByPath('element.properties.displayTimeSelector', $array30);

$expression31 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments27['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression31(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)
					),
					$renderingContext
				);
$arguments27['__thenClosure'] = $renderChildrenClosure28;

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output4 .= '
	</div>
';
return $output4;
};
$arguments1 = array();
$arguments1['renderable'] = NULL;
$array3 = array (
);$arguments1['renderable'] = $renderingContext->getVariableProvider()->getByPath('element', $array3);

$output0 .= TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#