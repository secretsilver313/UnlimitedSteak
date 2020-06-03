<?php

public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool
 {
 if($cmd->getName() == "unlimsteak") {
 if($sender->hasPermission("unlimsteak.use")) {
 
$inv = $player->getinventory;
$steak = Item::get(364, 0, 1);
$steak->setCustomName("Unlimited Steak")




<?
