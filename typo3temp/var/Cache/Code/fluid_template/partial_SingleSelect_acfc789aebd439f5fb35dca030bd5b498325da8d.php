<?php

class partial_SingleSelect_acfc789aebd439f5fb35dca030bd5b498325da8d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['additionalAttributes'] = NULL;
$arguments53['data'] = NULL;
$arguments53['name'] = NULL;
$arguments53['value'] = NULL;
$arguments53['property'] = NULL;
$arguments53['class'] = NULL;
$arguments53['dir'] = NULL;
$arguments53['id'] = NULL;
$arguments53['lang'] = NULL;
$arguments53['style'] = NULL;
$arguments53['title'] = NULL;
$arguments53['accesskey'] = NULL;
$arguments53['tabindex'] = NULL;
$arguments53['onclick'] = NULL;
$arguments53['size'] = NULL;
$arguments53['disabled'] = NULL;
$arguments53['options'] = NULL;
$arguments53['optionsAfterContent'] = false;
$arguments53['optionValueField'] = NULL;
$arguments53['optionLabelField'] = NULL;
$arguments53['sortByOptionLabel'] = false;
$arguments53['selectAllByDefault'] = false;
$arguments53['errorClass'] = 'f3-form-error';
$arguments53['prependOptionLabel'] = NULL;
$arguments53['prependOptionValue'] = NULL;
$arguments53['multiple'] = false;
$array55 = array (
);$arguments53['property'] = $renderingContext->getVariableProvider()->getByPath('element.identifier', $array55);
$array56 = array (
);$arguments53['id'] = $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier', $array56);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['element'] = NULL;
$arguments57['property'] = NULL;
$arguments57['renderingOptionProperty'] = NULL;
$array59 = array (
);$arguments57['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array59);
$arguments57['property'] = 'options';
$arguments53['options'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);
$output60 = '';
$array61 = array (
);
$output60 .= $renderingContext->getVariableProvider()->getByPath('element.properties.elementClassAttribute', $array61);

$output60 .= ' form-control';
$arguments53['class'] = $output60;
$array62 = array (
);$arguments53['errorClass'] = $renderingContext->getVariableProvider()->getByPath('element.properties.elementErrorClassAttribute', $array62);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['element'] = NULL;
$arguments63['property'] = NULL;
$arguments63['renderingOptionProperty'] = NULL;
$array65 = array (
);$arguments63['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array65);
$arguments63['property'] = 'fluidAdditionalAttributes';
$arguments53['additionalAttributes'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['element'] = NULL;
$arguments66['property'] = NULL;
$arguments66['renderingOptionProperty'] = NULL;
$array68 = array (
);$arguments66['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array68);
$arguments66['property'] = 'prependOptionLabel';
$arguments53['prependOptionLabel'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['element'] = NULL;
$arguments69['property'] = NULL;
$arguments69['renderingOptionProperty'] = NULL;
$array71 = array (
);$arguments69['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array71);
$arguments69['property'] = 'prependOptionValue';
$arguments53['prependOptionValue'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output52 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '
			';
return $output52;
};
$arguments50 = array();

$output49 .= '';

$output49 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['additionalAttributes'] = NULL;
$arguments75['data'] = NULL;
$arguments75['name'] = NULL;
$arguments75['value'] = NULL;
$arguments75['property'] = NULL;
$arguments75['class'] = NULL;
$arguments75['dir'] = NULL;
$arguments75['id'] = NULL;
$arguments75['lang'] = NULL;
$arguments75['style'] = NULL;
$arguments75['title'] = NULL;
$arguments75['accesskey'] = NULL;
$arguments75['tabindex'] = NULL;
$arguments75['onclick'] = NULL;
$arguments75['size'] = NULL;
$arguments75['disabled'] = NULL;
$arguments75['options'] = NULL;
$arguments75['optionsAfterContent'] = false;
$arguments75['optionValueField'] = NULL;
$arguments75['optionLabelField'] = NULL;
$arguments75['sortByOptionLabel'] = false;
$arguments75['selectAllByDefault'] = false;
$arguments75['errorClass'] = 'f3-form-error';
$arguments75['prependOptionLabel'] = NULL;
$arguments75['prependOptionValue'] = NULL;
$arguments75['multiple'] = false;
$array77 = array (
);$arguments75['property'] = $renderingContext->getVariableProvider()->getByPath('element.identifier', $array77);
$array78 = array (
);$arguments75['id'] = $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier', $array78);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['element'] = NULL;
$arguments79['property'] = NULL;
$arguments79['renderingOptionProperty'] = NULL;
$array81 = array (
);$arguments79['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array81);
$arguments79['property'] = 'options';
$arguments75['options'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);
$output82 = '';
$array83 = array (
);
$output82 .= $renderingContext->getVariableProvider()->getByPath('element.properties.elementClassAttribute', $array83);

$output82 .= ' form-control';
$arguments75['class'] = $output82;
$array84 = array (
);$arguments75['errorClass'] = $renderingContext->getVariableProvider()->getByPath('element.properties.elementErrorClassAttribute', $array84);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['element'] = NULL;
$arguments85['property'] = NULL;
$arguments85['renderingOptionProperty'] = NULL;
$array87 = array (
);$arguments85['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array87);
$arguments85['property'] = 'fluidAdditionalAttributes';
$arguments75['additionalAttributes'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '
			';
return $output74;
};
$arguments72 = array();
$arguments72['if'] = NULL;

$output49 .= '';

$output49 .= '
		';
return $output49;
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['0'] = $renderingContext->getVariableProvider()->getByPath('element.properties.prependOptionLabel', $array47);

$expression48 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression48(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);
$arguments10['__thenClosure'] = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['additionalAttributes'] = NULL;
$arguments13['data'] = NULL;
$arguments13['name'] = NULL;
$arguments13['value'] = NULL;
$arguments13['property'] = NULL;
$arguments13['class'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$arguments13['size'] = NULL;
$arguments13['disabled'] = NULL;
$arguments13['options'] = NULL;
$arguments13['optionsAfterContent'] = false;
$arguments13['optionValueField'] = NULL;
$arguments13['optionLabelField'] = NULL;
$arguments13['sortByOptionLabel'] = false;
$arguments13['selectAllByDefault'] = false;
$arguments13['errorClass'] = 'f3-form-error';
$arguments13['prependOptionLabel'] = NULL;
$arguments13['prependOptionValue'] = NULL;
$arguments13['multiple'] = false;
$array15 = array (
);$arguments13['property'] = $renderingContext->getVariableProvider()->getByPath('element.identifier', $array15);
$array16 = array (
);$arguments13['id'] = $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier', $array16);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['element'] = NULL;
$arguments17['property'] = NULL;
$arguments17['renderingOptionProperty'] = NULL;
$array19 = array (
);$arguments17['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array19);
$arguments17['property'] = 'options';
$arguments13['options'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);
$output20 = '';
$array21 = array (
);
$output20 .= $renderingContext->getVariableProvider()->getByPath('element.properties.elementClassAttribute', $array21);

$output20 .= ' form-control';
$arguments13['class'] = $output20;
$array22 = array (
);$arguments13['errorClass'] = $renderingContext->getVariableProvider()->getByPath('element.properties.elementErrorClassAttribute', $array22);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['element'] = NULL;
$arguments23['property'] = NULL;
$arguments23['renderingOptionProperty'] = NULL;
$array25 = array (
);$arguments23['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array25);
$arguments23['property'] = 'fluidAdditionalAttributes';
$arguments13['additionalAttributes'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['element'] = NULL;
$arguments26['property'] = NULL;
$arguments26['renderingOptionProperty'] = NULL;
$array28 = array (
);$arguments26['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array28);
$arguments26['property'] = 'prependOptionLabel';
$arguments13['prependOptionLabel'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['element'] = NULL;
$arguments29['property'] = NULL;
$arguments29['renderingOptionProperty'] = NULL;
$array31 = array (
);$arguments29['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array31);
$arguments29['property'] = 'prependOptionValue';
$arguments13['prependOptionValue'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
			';
return $output12;
};
$arguments10['__elseClosures'][] = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['additionalAttributes'] = NULL;
$arguments33['data'] = NULL;
$arguments33['name'] = NULL;
$arguments33['value'] = NULL;
$arguments33['property'] = NULL;
$arguments33['class'] = NULL;
$arguments33['dir'] = NULL;
$arguments33['id'] = NULL;
$arguments33['lang'] = NULL;
$arguments33['style'] = NULL;
$arguments33['title'] = NULL;
$arguments33['accesskey'] = NULL;
$arguments33['tabindex'] = NULL;
$arguments33['onclick'] = NULL;
$arguments33['size'] = NULL;
$arguments33['disabled'] = NULL;
$arguments33['options'] = NULL;
$arguments33['optionsAfterContent'] = false;
$arguments33['optionValueField'] = NULL;
$arguments33['optionLabelField'] = NULL;
$arguments33['sortByOptionLabel'] = false;
$arguments33['selectAllByDefault'] = false;
$arguments33['errorClass'] = 'f3-form-error';
$arguments33['prependOptionLabel'] = NULL;
$arguments33['prependOptionValue'] = NULL;
$arguments33['multiple'] = false;
$array35 = array (
);$arguments33['property'] = $renderingContext->getVariableProvider()->getByPath('element.identifier', $array35);
$array36 = array (
);$arguments33['id'] = $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier', $array36);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['element'] = NULL;
$arguments37['property'] = NULL;
$arguments37['renderingOptionProperty'] = NULL;
$array39 = array (
);$arguments37['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array39);
$arguments37['property'] = 'options';
$arguments33['options'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);
$output40 = '';
$array41 = array (
);
$output40 .= $renderingContext->getVariableProvider()->getByPath('element.properties.elementClassAttribute', $array41);

$output40 .= ' form-control';
$arguments33['class'] = $output40;
$array42 = array (
);$arguments33['errorClass'] = $renderingContext->getVariableProvider()->getByPath('element.properties.elementErrorClassAttribute', $array42);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['element'] = NULL;
$arguments43['property'] = NULL;
$arguments43['renderingOptionProperty'] = NULL;
$array45 = array (
);$arguments43['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array45);
$arguments43['property'] = 'fluidAdditionalAttributes';
$arguments33['additionalAttributes'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
			';
return $output32;
};

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

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