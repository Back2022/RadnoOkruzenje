<?php

echo "<pre>";
$excep=<<<END
Error
   ArithmeticError
      DivisionByZeroError
   AssertionError
   CompileError
      ParseError
   FiberError
   TypeError
      ArgumentCountError
   UnhandledMatchError
   ValueError
Exception
   ClosedGeneratorException
   DOMException
   ErrorException
   IntlException
   JsonException
   LogicException
      BadFunctionCallException
         BadMethodCallException
      DomainException
      InvalidArgumentException
      LengthException
      OutOfRangeException
   PharException
   ReflectionException
   RuntimeException
      OutOfBoundsException
      OverflowException
      PDOException
      RangeException
      UnderflowException
      UnexpectedValueException
   SodiumException
END;
echo $excep;
echo "</pre>";