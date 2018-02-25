<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'ctype_digit',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'c',
			false,
			PHPStan\Type\MixedType::__set_state(array(    'isExplicitMixed' => false, )),
			false,
			false
		),

	],
	false,
	PHPStan\Type\BooleanType::__set_state(array())
);