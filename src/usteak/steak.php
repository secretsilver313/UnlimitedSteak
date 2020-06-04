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
   if($sender->hasPermission("unlimsteak.use")) {
   $inv = $sender->getinventory;
   $steak = Item::get(364, 0, 1);
   $steak->setCustomName("Unlimited Steak");
   $steak->setLore(["Infinate Steak"]);
    $sender->$inv->addItem($steak);

   }
  }else{
  $player->sendMessage("§4You cant use this command!");
  }
  return true;
 }
}


public Function onConsume(PlayerConsumeEvent $event, Player $player)
{
         $item = $event->getItem();
         $player = $event->getPlayer();
         $steak = Item::get(364, 0, 1);
         $inv = $player->getinventory;
         $hunger = $player->getHunger
 $steak->setCustomName("Unlimited Steak");
 $steak->setLore(["Infinate Steak"]);
 
 if($item->getLore() == $steak->getLore(){
  $player->$inv->addItem($steak);
  if($hunger == 20){
   $player->sendMessage("§2You have fully replenished your hunger");
  }
 }
}
    }
    
