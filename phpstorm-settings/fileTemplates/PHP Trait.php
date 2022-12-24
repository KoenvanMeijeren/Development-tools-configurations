<?php

declare(strict_types=1);

#parse("PHP File Header.php")
#if (${NAMESPACE})
namespace ${NAMESPACE};
#end

#if (${NAMESPACE})
/**
* Provides a trait for ${NAME}.
* 
* @package ${NAMESPACE};
*/
#else
/**
* Provides an interface for ${NAME}.
* 
* @package ${NAME};
*/
#end
trait ${NAME} {

}