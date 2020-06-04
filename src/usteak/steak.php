<?php

namespace usteak;

use pocketmine\Player;
use pocketmine\event\player\PlayerItemConsumeEvent;
use pocketmine\event\player\PlayerConsumeEvent;
use pocketmine\command\CommandSender;

class steak extends PluginBase{

 public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool
 {
 if($cmd->getName() == "unlimsteak") {
    if($sender instanceof Player) {
       if($sender->hasPermission("unlimsteak.use") === false) {
          $player->sendMessage("§4You cant use this command!");
       }else{
          $inv = $sender->getinventory;
          $steak = Item::get(364, 0, 1)->setCustomName("Unlimited Steak")->setLore(["Infinate Steak"]);
          $sender->$inv->addItem($steak);
          }
       }
     }
  return true;
  }


  public function onConsume(PlayerConsumeEvent $event, Player $player)
  {
  $player = $event->getPlayer();
  $item = $player->getInventory()->getItemInHand();
     if($item->getId() == (364, 0, 1) and $item->getCustomName() == ("Unlimited Steak") and $item->getLore() == (["Infinate Steak"])){
       $steak = Item::get()->setCustomName()->setLore();
       $player->getInventory()->addItem($steak);
         if($player->getHunger() == (20)) {
            $player->sendMessage("§2You have fully replenished your hunger");
         }
     }
  }
}
    
