<?php

declare(strict_types=1);

#parse("PHP File Header.php")
#if (${NAMESPACE})
namespace ${NAMESPACE};
#end

#if (${NAMESPACE})
/**
* Provides a class for ${NAME}.
* 
* @package ${NAMESPACE};
*/
#else 
/**
* Provides a class for ${NAME}.
* 
* @package ${NAME};
*/
#end
final class ${NAME} {

}