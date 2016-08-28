<?php

class Link
{
	public $nextLink;
	public $data;
	
	function __construct($data)
	{
		$this->nextLink = null;
		$this->data = $data;
	}
}

class LinkedList
{
	private $headLink;
	private $size;
	private $stepIndex;
	
	function __construct()
	{
		$this->headLink = null;
		$this->size = 0;		
	}
	
	function isEmpty()
	{
		return ($this->size == 0);
	}
	
	function size()
	{
		return $this->size;
	}
	
	function add($newData)
	{
		if($this->headLink == null)
		{
			$this->headLink = new Link($newData);		
		}
		else
		{
			$currentLink = $this->headLink;
			
			$newLink = new Link($newData);
			$currentLink->nextLink = $newLink;	
			
		}
		$this->size ++;		
	}
	
	function add($newData, $index)
	{
		if($index > size)
		{
			return false;
		}
		else
		{
			$newLink = new Link($newData);
			$currentLink = $this->headLink;
			
			if($index == 0)
			{
				$this->headLink = $newLink;
				$newLink->nextLink = $currentLink;
			}
			else
			{
				$i = 1;
				while($i < $index)
				{
					$currentLink = $currentLink->nextLink;
					$i ++;
				}
				$newLink->nextLink = $currentLink->nextLink;
				$currentLink->nextLink = $newLink;
			}
			$this->size ++;
			return true;
		}
	}

	function addSorted($newData)
	{
		
	}
	
	function getObject($index)
	{
		if($index >= $this->size || $index < 0)
		{
			return null;
		}
		
		$currentLink = $this->headLink;
		
		for($i = 0 ; $i < $index ; $i ++)
		{
			$currentLink = $currentLink->nextLink;
		}
		return $currentLink->data;
	}

	function getFirstObject()
	{
		return $this->headLink->data;
	}
	
	function remove($index)
	{
		if($index >= $this->size || $index < 0)
		{
			return false;
		}
		else
		{
			if($index == 0)
			{
				$this->headLink = $this->headLink->nextLink;
			}
			else
			{
				$currentLink = $this->headLink;
				
				for($i = 0 ; $i < $index ; $i ++)
				{
					$currentLink = $currentLink->nextLink;
				}
				
				$currentLink->nextLink = $currentLink->nextLink->nextLink;
			}
			$this->size --;
			return true;
		}
	}

	function removeAll()
	{
		$this->headLink = null;
		$this->size = 0;
	}

	function printList()
	{
		$currentLink = $this->headLink;
		
		$output = "";
		
		while($currentLink != null)
		{
			$output .= "[" . $currentLink->data . "],";
			$currentLink = $currentLink->nextLink;
		}
		echo $output;		
	}

	function addItems()
	{
		$list = new LinkedList();
		
		$list->add("Cats");
		$list->add("Dogs");
		$list->add("Lions");
		$list->add("Rabbit");
		$list->add("Zebra");
		$list->add("Giraffe");
		$list->add("Goat");
		$list->add("Cow");
		$list->add("Fish");
		
		$list->printList();
	}
}

?>