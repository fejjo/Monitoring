<?php

namespace Pd\Monitoring\DashBoard\Controls\AddEditCheck;

class FeedCheckProcessor implements ICheckControlProcessor
{

	public function processEntity(\Pd\Monitoring\Check\Check $check, array $data)
	{
		$check->maximumAge = $data['maximumAge'];
		$check->size = $data['size'];
		$check->url = $data['url'];
	}


	public function getCheck(): \Pd\Monitoring\Check\Check
	{
		return new \Pd\Monitoring\Check\FeedCheck();
	}


	public function createForm(\Pd\Monitoring\Check\Check $check, \Nette\Application\UI\Form $form)
	{
		$form->addGroup($check->getTitle());
		$form
			->addText('url', 'Adresa')
			->setRequired(TRUE)
		;
		$form
			->addText('size', 'Minimální velikost v MB')
			->setRequired(TRUE)
		;
		$form
			->addText('maximumAge', 'Maximální stáří feedu v hodinách')
			->setRequired(TRUE)
		;
	}

}
