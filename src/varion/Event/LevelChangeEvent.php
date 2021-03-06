<?php

namespace varion\Event;

use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityLevelChangeEvent;
use varion\AdvancedScoreboard;

class LevelChangeEvent implements Listener{

	/** @var AdvancedScoreboard $plugin */
	private $plugin;

	/**
	* @param AdvancedScoreboard $plugin
	*/
	public function __construct($plugin){
		$this->plugin = $plugin;
	}

	public function onChange(EntityLevelChangeEvent $event) {
		$player = $event->getEntity();
		if ($player instanceof Player) {
			$this->plugin->removeScore($player);
		}
	}
}