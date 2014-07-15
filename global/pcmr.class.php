<?php
// content.php
class pcmr 
{
	private $header = false;
	private $navigation = false;
	private $sidebar = false;
	private $footer = false;

	private getSidebarContent ($sidebarContentRequest)
	{
		if (file_exists('./global/sidebar'.$sidebarContentRequest.'.php'))
		{
			return file_get_contents('./global/sidebar'.$sidebarContentRequest.'.php');
		}
		else
		{
			return false;
		}
	}

	public __construct($header, $navigation, $sidebar, $footer)
	{
		this::header = $header;
		this::navigation = $navigation;
		this::sidebar = $sidebar;
		this::footer = $footer;
	}

	public function displayContent($content);
	{
		if (this::header)
		{
			echo file_get_contents('./global/header.php');
		}
		if (this::navigation)
		{
			echo file_get_contents('./global/navigation.php');
		}
		if (this::sidebar !== false)
		{
			if ($side = this::getSidebarContent($sidebar))
			{
				echo $side;
			}
		}
		echo $content;
		if (this::footer)
		{
			echo file_get_contents('./global/footer.php');
		}
	}
}