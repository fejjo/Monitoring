<?php

namespace Pd\Monitoring\Check\Commands\Publish;

use Pd\Monitoring\Commands\TNamedCommand;

class CertificateChecksCommand extends PublishChecksCommand
{
	use TNamedCommand;

	protected function getConditions(): array
	{
		return [
			'type' => \Pd\Monitoring\Check\ICheck::TYPE_CERTIFICATE,
		];
	}

}
