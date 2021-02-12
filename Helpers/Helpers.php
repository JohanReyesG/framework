<?php 

	function base_url()
	{
	return BASE_URL;
	}
	function dep ()
	{
		$fromat = print_r('<pre>');
		$fromat .= print_r($data);
		$fromat .= print_r('</pre>');
		return $fromat;
	}

 ?>