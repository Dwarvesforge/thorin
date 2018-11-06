<?php

class __mustache__f141611c145859afa0752f69e27761ae extends Mustache_Template
{
    protected $strictCallables = true;
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div>';
        $value = $this->resolveValue($context->find('message'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</div>
';

        return $buffer;
    }
}
