<?php

namespace VoteLinks;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{

	public function onEnable()
	{

		$this->saveDefaultConfig();
		$this->saveResource("config.yml");

		$this->getServer()->getLogger()->info("§aPlugin VoteLiks on");
		$this->getServer()->getLogger()->info("§aFor more help : dicord.gg/tBSFUVRJ9f");
		$this->getServer()->getLogger()->info("§l§aCheck the Config for more Help !");


	}

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
	{
		if (!$sender instanceof Player) {

			$sender->sendMessage("§l§cError: Please use this command in Game");
			return false;


			if ($sender instanceof Player) {

				if (strtolower($commandName) === 'votelinks') {

					$sender->sendMessage($this->getConfig()->get("votelinks-message"));

					return true;
				}
			}
			return true;
		}
	}
}