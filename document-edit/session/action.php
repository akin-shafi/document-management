<?php

session_start();

if(isset($_POST["action"]))
{
	if($_POST["action"] == "add")
	{
		if(isset($_SESSION["docu_edit"]))
		{
			$is_available = 0;
			foreach($_SESSION["docu_edit"] as $keys => $values)
			{ 
				if($_SESSION["docu_edit"][$keys]['tool_id'] == $_POST["tool_id"])
				{
					$is_available++;
					$_SESSION["docu_edit"][$keys]['tool_qty'] = $_SESSION["docu_edit"][$keys]['tool_qty'] + $_POST["tool_qty"];
				}
			}
			if($is_available == 0)
			{
				$item_array = array(
					'tool_id'               =>     $_POST["tool_id"],  
					'document_id'           =>     $_POST["document_id"],  
					'tool_text'             =>     $_POST["tool_text"],  
					'tool_class'            =>     $_POST["tool_class"],  
					'tool_qty'         		=>     $_POST["tool_qty"],
					'tool_top_pos'         	=>     $_POST["tool_top_pos"],
					'tool_left_pos'         =>     $_POST["tool_left_pos"],
				);
				$_SESSION["docu_edit"][] = $item_array;
			}
		}
		else
		{
			$item_array = array(
				'tool_id'               =>     $_POST["tool_id"],  
				'document_id'           =>     $_POST["document_id"],  
				'tool_text'             =>     $_POST["tool_text"],  
				'tool_class'            =>     $_POST["tool_class"],  
				'tool_qty'         		=>     $_POST["tool_qty"],
				'tool_top_pos'         	=>     $_POST["tool_top_pos"],
				'tool_left_pos'         =>     $_POST["tool_left_pos"],
			);
			$_SESSION["docu_edit"][] = $item_array;
		}
	}

	if($_POST["action"] == 'remove')
	{
		foreach($_SESSION["docu_edit"] as $keys => $values)
		{
			if($values["tool_id"] == $_POST["tool_id"])
			{
				unset($_SESSION["docu_edit"][$keys]);
			}
		}
	}
	if($_POST["action"] == 'empty')
	{
		unset($_SESSION["docu_edit"]);
	}

}

if(isset($_POST["edit"]))
{
	

	if($_POST["edit"] == 'remove')
	{
		foreach($_SESSION["docu_edit"] as $keys => $values)
		{
			if($values["tool_id"] == $_POST["tool_id"])
			{
				unset($_SESSION["docu_edit"][$keys]);
			}
		}
	}
	if($_POST["edit"] == 'empty')
	{
		unset($_SESSION["docu_edit"]);
	}


	if($_POST["edit"] == "edit_product")
	{
		if(isset($_SESSION["docu_edit"]))
		{
			$is_available = 0;
			foreach($_SESSION["docu_edit"] as $keys => $values)
			{

				if($_SESSION["docu_edit"][$keys]['tool_id'] == $_POST["tool_id"])
				{
					$is_available++;
					$_SESSION["docu_edit"][$keys]['tool_top_pos'] = $_POST["tool_top_pos"];
					$_SESSION["docu_edit"][$keys]['tool_left_pos'] = $_POST["tool_left_pos"];
				}
			}
			if($is_available == 0)
			{
				$item_array = array(
					'tool_id'               =>     $_POST["tool_id"],
					'document_id'           =>     $_POST["document_id"],  
					'tool_text'             =>     $_POST["tool_text"],  
					'tool_class'            =>     $_POST["tool_class"],  
					'tool_qty'         		=>     $_POST["tool_qty"],
					'tool_top_pos'         	=>     $_POST["tool_top_pos"],
					'tool_left_pos'         =>     $_POST["tool_left_pos"],
				);
				$_SESSION["docu_edit"][] = $item_array;

				
			}

		}
		else
		{
			$item_array = array(
				'tool_id'               =>     $_POST["tool_id"], 
				'document_id'           =>     $_POST["document_id"], 
				'tool_text'             =>     $_POST["tool_text"],  
				'tool_class'            =>     $_POST["tool_class"],  
				'tool_qty'         		=>     $_POST["tool_qty"],
				'tool_top_pos'         	=>     $_POST["tool_top_pos"],
				'tool_left_pos'         =>     $_POST["tool_left_pos"],
			);
			$_SESSION["docu_edit"][] = $item_array;
			print_r($item_array);
		}
	} 

	
}

?>