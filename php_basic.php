<?php 
class Player 
  {
    private $name, $blood, $manna;

    public function __construct($new_name) 
      {
        $this->name = $new_name;
        $this->blood = 100;
        $this->manna = 50;
      }

    public function get_name() 
      {
        return $this->name;
      }

    public function get_blood ()
      {
        return $this->blood;
      }
    public function get_manna()
      {
        return $this->manna;
      }
    public function attack() 
      {
        $this->manna = $this->manna - 15;
      }
    public function defend() 
      {
        $this->blood = $this->blood - 20;
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
// input mode game
fscanf(STDIN, "%s\n", $game_play);
echo"\n";
if ($game_play =="new") 
{
echo " 
# Current Player: #
# - #
# * Max player 2 or 3 #
# ------------------------------------------------- ---- #           
# How much player:";
fscanf(STDIN, "%s\n", $much_players);
echo"\n";
// $players [$much_players] = new Player($much_players);
if ($much_players <= 3 && $much_players >=2 ) 
{
echo " 
# ============================== #
# Welcome to the Battle Arena #
# ------------------------------------------------- ---- #
# Description: #
# Current Player : " . $much_players . "         
# ------------------------------------------------- ---- #";
for ($i=0; $i < $much_players ; $i++) 
{ 
echo"\n";
echo "# Put Player Name:";
fscanf(STDIN, "%s\n", $player_name);
$players [$player_name] = new Player($player_name);
echo "var_dump($player_name)";
}
echo"\n";
echo "Start now?";
fscanf(STDIN, "%s\n", $mode);
if ($mode == "Start") 
{
  echo"\n";
  echo " 
    # Attack:";
    fscanf(STDIN, "%s\n", $attacker);
foreach ($players as $key => $value) 
{
  if ($attacker == $value->get_name()) 
  {
    $value->get_manna();
    $value->attack();
  }
}

  echo"\n";
  echo " 
    # Defend:";
    fscanf(STDIN, "%s\n", $defender);
foreach ($players as $key => $value) 
{
  if ($defender == $value->get_name()) 
  {
    $value->get_blood();
    $value->defend();
  echo"\n";
  echo "Attacker :". $attacker ;
  echo "Defender :". $defender;
  echo"\n";
  }
} 

foreach ($players as $key => $value) 
{
  echo $value->get_name() .", manna : " .$value->get_manna() .", blood : " .$value->get_blood();
  echo"\n";
}           
}

else
{
echo "Incorrect type";
}

}
else
{
echo "Incorrect";
}

}

else
{
echo "Incorrect mode";
}

?>

