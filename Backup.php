<?php
namespace FreePBX\modules\queueprio;
use FreePBX\modules\Backup as Base;
class Backup Extends Base\BackupBase{
	public function runBackup($id,$transaction){
		$this->addDependency('queues');
		$this->addConfigs([
			'tables' => $this->dumpTables(),
			'features' => $this->dumpFeatureCodes(),
			'settings' => $this->dumpAdvancedSettings()
		]);
	}
}