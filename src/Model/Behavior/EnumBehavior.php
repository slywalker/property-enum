<?php

namespace PropertyEnum\Model\Behavior;
use CakeDC\Enum\Model\Behavior\EnumBehavior as CoreEnumBehavior;

class EnumBehavior extends CoreEnumBehavior
{
    public function initialize(array $config)
    {
        if (empty($this->_classMap['property'])) {
            $this->_classMap['property'] = 'PropertyEnum\Model\Behavior\Strategy\PropertyStrategy';
        }
        parent::initialize($config);
    }
}
