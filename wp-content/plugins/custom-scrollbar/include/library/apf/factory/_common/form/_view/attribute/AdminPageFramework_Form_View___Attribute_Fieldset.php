<?php 
/**
	Admin Page Framework v3.8.30b03 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/custom-scrollbar>
	Copyright (c) 2013-2021, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class CustomScrollbar_AdminPageFramework_Form_View___Attribute_Fieldset extends CustomScrollbar_AdminPageFramework_Form_View___Attribute_FieldContainer_Base {
    public $sContext = 'fieldset';
    protected function _getAttributes() {
        return array('id' => $this->sContext . '-' . $this->aArguments['tag_id'], 'class' => implode(' ', array('custom-scrollbar-' . $this->sContext, $this->_getSelectorForChildFieldset())), 'data-field_id' => $this->aArguments['tag_id'], 'style' => $this->_getInlineCSS(),);
    }
    private function _getInlineCSS() {
        return (1 <= $this->aArguments['_nested_depth']) && $this->aArguments['hidden'] ? 'display:none' : null;
    }
    private function _getSelectorForChildFieldset() {
        if ($this->aArguments['_nested_depth'] == 0) {
            return '';
        }
        if ($this->aArguments['_nested_depth'] == 1) {
            return 'child-fieldset nested-depth-' . $this->aArguments['_nested_depth'];
        }
        return 'child-fieldset multiple-nesting nested-depth-' . $this->aArguments['_nested_depth'];
    }
    }
    