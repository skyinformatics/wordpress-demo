<?php
 namespace MailPoetVendor\Doctrine\Persistence\Reflection; if (!defined('ABSPATH')) exit; use Closure; use ReflectionProperty; use function assert; class TypedNoDefaultReflectionProperty extends ReflectionProperty { public function getValue($object = null) { return $object !== null && $this->isInitialized($object) ? parent::getValue($object) : null; } public function setValue($object, $value = null) { if ($value === null && $this->hasType() && !$this->getType()->allowsNull()) { $propertyName = $this->getName(); $unsetter = function () use($propertyName) : void { unset($this->{$propertyName}); }; $unsetter = $unsetter->bindTo($object, $this->getDeclaringClass()->getName()); assert($unsetter instanceof Closure); $unsetter(); return; } parent::setValue($object, $value); } } 