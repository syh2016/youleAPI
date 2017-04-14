<?php

/**
 * json格式化
 * @author  syh
 * @param   mixed   
 * @return  null         
 */
function echoJson($data)
{
	exit(json_encode($data,JSON_UNESCAPED_UNICODE));
}


?>