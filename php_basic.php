<?php 
 class Player {
   private $name, $blood, $manna;
   
   public function __construct($new_name) {
     $this->name = $new_name;
     $this->blood = 100;
     $this->mana = 80;
   }
   
   public function get_name() {
     return $this->name;
   }
   public function set_name($input_name) {
     $this->name = $input_name;
   }
   public function get_blood() {
     return $this->blood;
   }
   public function get_mana() {
     return $this->mana;
   }
   
   public function attack() {
     $mana = $mana - 10;
   }
   
   public function defend() {
     $blood = $blood - 30;
   }

 }

 
 

 $players = [];

echo "
# ============================== #

# Welcome to the Battle Arena #
# ============================== #
# Description: #
# 1 type 'new' to create a character #
# 2. type 'start' to begin the fight #
# Current Player: #
# - #
# * Max player 2 or 3 #
# ------------------------------------------------- ---- #
# Mode: ";
// input mode player
fscanf(STDIN, "%s\n", $mode);
echo"\n";
  if ($mode =="new") 
  {
  echo "             
# How much player:";
    fscanf(STDIN, "%s\n", $mode);
    echo"\n";
      for ($i = $mode; $mode <= 1;) 
      {
        echo $i->check();
      for ($mode = 2; $mode < 3;) 
      { 
      echo "
# ============================== #
# Welcome to the Battle Arena #
# ============================== #
# New Player #
# Put Player 1 Name:";

      // input name
      fscanf(STDIN, "%s\n", $player_name_1);
      $players[0] = new Player ($player_name_1);
      echo "var_dump($player_name_1)";
        if ($player_name_1 == $players[0])
           {
            echo "
# Put Player 2 Name:"; 
              fscanf(STDIN, "%s\n", $player_name_2);
              $players [$player_name_2] = new Player ($player_name_2);
            echo "var_dump($player_name_2)";
            }
        else
        {
          echo "null";                   
        }
                                   
      }
}
               
           
           
            
              
  }

        else
        {
            echo "Your type incorrect";
        }


// $player = [$input] new Player ($input);
// echo "$player";
  // if
  // {
  //   $input="new";
  //   {

  //   }
  // }

      # Current Player: #
      # - #
      # * Max player 2 or 3 #
# ============================== #;
  // public $players = [];

  // $players["ujang"] = new Player("ujang");
  // $players["cecep"] = new Player("cecep");
  
  // $players["ujang"]->get_blood();
  
  // //ujang will decrease the mana with -10
  // $players["ujang"]->attack();
  // //cecep will decrease the blood with -30
  // $players["cecep"]->defend();
 
 ?>

