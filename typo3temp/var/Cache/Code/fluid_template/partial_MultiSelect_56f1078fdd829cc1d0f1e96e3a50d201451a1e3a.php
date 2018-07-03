<?php

class partial_MultiSelect_56f1078fdd829cc1d0f1e96e3a50d201451a1e3a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$output53 = '';

$output53 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['additionalAttributes'] = NULL;
$arguments57['data'] = NULL;
$arguments57['name'] = NULL;
$arguments57['value'] = NULL;
$arguments57['property'] = NULL;
$arguments57['class'] = NULL;
$arguments57['dir'] = NULL;
$arguments57['id'] = NULL;
$arguments57['lang'] = NULL;
$arguments57['style'] = NULL;
$arguments57['title'] = NULL;
$arguments57['accesskey'] = NULL;
$arguments57['tabindex'] = NULL;
$arguments57['onclick'] = NULL;
$arguments57['size'] = NULL;
$arguments57['disabled'] = NULL;
$arguments57['options'] = NULL;
$arguments57['optionsAfterContent'] = false;
$arguments57['optionValueField'] = NULL;
$arguments57['optionLabelField'] = NULL;
$arguments57['sortByOptionLabel'] = false;
$arguments57['selectAllByDefault'] = false;
$arguments57['errorClass'] = 'f3-form-error';
$arguments57['prependOptionLabel'] = NULL;
$arguments57['prependOptionValue'] = NULL;
$arguments57['multiple'] = false;
$array59 = array (
);$arguments57['property'] = $renderingContext->getVariableProvider()->getByPath('element.identifier', $array59);
$array60 = array (
);$arguments57['id'] = $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier', $array60);
$output61 = '';
$array62 = array (
);
$output61 .= $renderingContext->getVariableProvider()->getByPath('element.properties.elementClassAttribute', $array62);

$output61 .= ' form-control';
$arguments57['class'] = $output61;
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
$arguments63['property'] = 'options';
$arguments57['options'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);
// Rendering Boolean node
// Rendering Array
$array66 = array();
$array66['0'] = 'multiple';

$expression67 = function($context) {return "multiple";};
$arguments57['multiple'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression67(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array66)
					),
					$renderingContext
				);
$array68 = array (
);$arguments57['errorClass'] = $renderingContext->getVariableProvider()->getByPath('element.properties.elementErrorClassAttribute', $array68);
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
$arguments69['property'] = 'fluidAdditionalAttributes';
$arguments57['additionalAttributes'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['element'] = NULL;
$arguments72['property'] = NULL;
$arguments72['renderingOptionProperty'] = NULL;
$array74 = array (
);$arguments72['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array74);
$arguments72['property'] = 'prependOptionLabel';
$arguments57['prependOptionLabel'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['element'] = NULL;
$arguments75['property'] = NULL;
$arguments75['renderingOptionProperty'] = NULL;
$array77 = array (
);$arguments75['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array77);
$arguments75['property'] = 'prependOptionValue';
$arguments57['prependOptionValue'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output56 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
			';
return $output56;
};
$arguments54 = array();

$output53 .= '';

$output53 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$output80 = '';

$output80 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments81 = array();
$arguments81['additionalAttributes'] = NULL;
$arguments81['data'] = NULL;
$arguments81['name'] = NULL;
$arguments81['value'] = NULL;
$arguments81['property'] = NULL;
$arguments81['class'] = NULL;
$arguments81['dir'] = NULL;
$arguments81['id'] = NULL;
$arguments81['lang'] = NULL;
$arguments81['style'] = NULL;
$arguments81['title'] = NULL;
$arguments81['accesskey'] = NULL;
$arguments81['tabindex'] = NULL;
$arguments81['onclick'] = NULL;
$arguments81['size'] = NULL;
$arguments81['disabled'] = NULL;
$arguments81['options'] = NULL;
$arguments81['optionsAfterContent'] = false;
$arguments81['optionValueField'] = NULL;
$arguments81['optionLabelField'] = NULL;
$arguments81['sortByOptionLabel'] = false;
$arguments81['selectAllByDefault'] = false;
$arguments81['errorClass'] = 'f3-form-error';
$arguments81['prependOptionLabel'] = NULL;
$arguments81['prependOptionValue'] = NULL;
$arguments81['multiple'] = false;
$array83 = array (
);$arguments81['property'] = $renderingContext->getVariableProvider()->getByPath('element.identifier', $array83);
$array84 = array (
);$arguments81['id'] = $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier', $array84);
$output85 = '';
$array86 = array (
);
$output85 .= $renderingContext->getVariableProvider()->getByPath('element.properties.elementClassAttribute', $array86);

$output85 .= ' form-control';
$arguments81['class'] = $output85;
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['element'] = NULL;
$arguments87['property'] = NULL;
$arguments87['renderingOptionProperty'] = NULL;
$array89 = array (
);$arguments87['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array89);
$arguments87['property'] = 'options';
$arguments81['options'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);
// Rendering Boolean node
// Rendering Array
$array90 = array();
$array90['0'] = 'multiple';

$expression91 = function($context) {return "multiple";};
$arguments81['multiple'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression91(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)
					),
					$renderingContext
				);
$array92 = array (
);$arguments81['errorClass'] = $renderingContext->getVariableProvider()->getByPath('element.properties.elementErrorClassAttribute', $array92);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['element'] = NULL;
$arguments93['property'] = NULL;
$arguments93['renderingOptionProperty'] = NULL;
$array95 = array (
);$arguments93['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array95);
$arguments93['property'] = 'fluidAdditionalAttributes';
$arguments81['additionalAttributes'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output80 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output80 .= '
			';
return $output80;
};
$arguments78 = array();
$arguments78['if'] = NULL;

$output53 .= '';

$output53 .= '
		';
return $output53;
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array50 = array();
$array51 = array (
);$array50['0'] = $renderingContext->getVariableProvider()->getByPath('element.properties.prependOptionLabel', $array51);

$expression52 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression52(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array50)
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
$output17 = '';
$array18 = array (
);
$output17 .= $renderingContext->getVariableProvider()->getByPath('element.properties.elementClassAttribute', $array18);

$output17 .= ' form-control';
$arguments13['class'] = $output17;
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['element'] = NULL;
$arguments19['property'] = NULL;
$arguments19['renderingOptionProperty'] = NULL;
$array21 = array (
);$arguments19['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array21);
$arguments19['property'] = 'options';
$arguments13['options'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);
// Rendering Boolean node
// Rendering Array
$array22 = array();
$array22['0'] = 'multiple';

$expression23 = function($context) {return "multiple";};
$arguments13['multiple'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression23(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)
					),
					$renderingContext
				);
$array24 = array (
);$arguments13['errorClass'] = $renderingContext->getVariableProvider()->getByPath('element.properties.elementErrorClassAttribute', $array24);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['element'] = NULL;
$arguments25['property'] = NULL;
$arguments25['renderingOptionProperty'] = NULL;
$array27 = array (
);$arguments25['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array27);
$arguments25['property'] = 'fluidAdditionalAttributes';
$arguments13['additionalAttributes'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['element'] = NULL;
$arguments28['property'] = NULL;
$arguments28['renderingOptionProperty'] = NULL;
$array30 = array (
);$arguments28['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array30);
$arguments28['property'] = 'prependOptionLabel';
$arguments13['prependOptionLabel'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['element'] = NULL;
$arguments31['property'] = NULL;
$arguments31['renderingOptionProperty'] = NULL;
$array33 = array (
);$arguments31['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array33);
$arguments31['property'] = 'prependOptionValue';
$arguments13['prependOptionValue'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
			';
return $output12;
};
$arguments10['__elseClosures'][] = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['additionalAttributes'] = NULL;
$arguments35['data'] = NULL;
$arguments35['name'] = NULL;
$arguments35['value'] = NULL;
$arguments35['property'] = NULL;
$arguments35['class'] = NULL;
$arguments35['dir'] = NULL;
$arguments35['id'] = NULL;
$arguments35['lang'] = NULL;
$arguments35['style'] = NULL;
$arguments35['title'] = NULL;
$arguments35['accesskey'] = NULL;
$arguments35['tabindex'] = NULL;
$arguments35['onclick'] = NULL;
$arguments35['size'] = NULL;
$arguments35['disabled'] = NULL;
$arguments35['options'] = NULL;
$arguments35['optionsAfterContent'] = false;
$arguments35['optionValueField'] = NULL;
$arguments35['optionLabelField'] = NULL;
$arguments35['sortByOptionLabel'] = false;
$arguments35['selectAllByDefault'] = false;
$arguments35['errorClass'] = 'f3-form-error';
$arguments35['prependOptionLabel'] = NULL;
$arguments35['prependOptionValue'] = NULL;
$arguments35['multiple'] = false;
$array37 = array (
);$arguments35['property'] = $renderingContext->getVariableProvider()->getByPath('element.identifier', $array37);
$array38 = array (
);$arguments35['id'] = $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier', $array38);
$output39 = '';
$array40 = array (
);
$output39 .= $renderingContext->getVariableProvider()->getByPath('element.properties.elementClassAttribute', $array40);

$output39 .= ' form-control';
$arguments35['class'] = $output39;
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['element'] = NULL;
$arguments41['property'] = NULL;
$arguments41['renderingOptionProperty'] = NULL;
$array43 = array (
);$arguments41['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array43);
$arguments41['property'] = 'options';
$arguments35['options'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);
// Rendering Boolean node
// Rendering Array
$array44 = array();
$array44['0'] = 'multiple';

$expression45 = function($context) {return "multiple";};
$arguments35['multiple'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression45(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array44)
					),
					$renderingContext
				);
$array46 = array (
);$arguments35['errorClass'] = $renderingContext->getVariableProvider()->getByPath('element.properties.elementErrorClassAttribute', $array46);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['element'] = NULL;
$arguments47['property'] = NULL;
$arguments47['renderingOptionProperty'] = NULL;
$array49 = array (
);$arguments47['element'] = $renderingContext->getVariableProvider()->getByPath('element', $array49);
$arguments47['property'] = 'fluidAdditionalAttributes';
$arguments35['additionalAttributes'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
			';
return $output34;
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