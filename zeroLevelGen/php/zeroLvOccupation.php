<?php
//Zero Levo Occupation


function getOccupation($input)
{
	$a00 = array("Ama (deep-sea pearl diver)", "Human", "Knife (as dagger)", "1d4", "Pearl");
	$a01 = array("Arborist", "Human", "Hand-axe", "1d6", "Pouch filled with seeds");
	$a02 = array("Armourer", "Human", "Hammer (as club)", "1d4", "Okashi gusoku (armour)*");
	$a03 = array("Aspiring sushi chef", "Human", "Knife (as dagger)", "1d4", "3 lbs of raw fish");
	$a04 = array("Bandit", "Human", "Spear", "1d8", "Karuta tatami (armour)*");
	$a05 = array("Boat builder", "Human", "Hammer (as club)", "1d4", "2 dozen iron nails");
	$a06 = array("Bonsai artist", "Human", "Clippers (as dagger)", "1d4", "Bonsai tree");
	$a07 = array("Calligrapher", "Human", "Short-sword", "1d6", "Calligraphy brush and fine ink");
	$a08 = array("Carpenter", "Human", "Hammer (as club)", "1d4", "Hemp rope, 50’");
	$a09 = array("Chopstick maker", "Human", "Chisel (as dagger)", "1d4", "Dozen pairs of chopsticks");
	$a10 = array("Coal miner", "Human", "Pick (as battle axe)", "1d10", "Bag filled with coal");
	$a11 = array("Firewood collector", "Human", "Hand-axe", "1d6", "Bundle of firewood");
	$a12 = array("Fish merchant", "Human", "Knife (as dagger)", "1d4", "10 lbs of fish");
	$a13 = array("Fisherman", "Human", "Knife (as dagger)", "1d4", "Fishing net, 10’x10'");
	$a14 = array("Fishing net mender", "Human", "Knife (as dagger)", "1d4", "3’ x 3’ net");
	$a15 = array("Fletcher", "Human", "Longbow", "1d6", "Quiver with 20 arrows");
	$a16 = array("Folklorist", "Human", "Short sword", "1d6", "Gozo (straw matt), rolled up");
	$a17 = array("Gambler", "Human", "Dagger", "1d4", "Playing cards");
	$a18 = array("Gardener", "Human", "Shovel (as staff)", "1d4", "Pine cones");
	$a19 = array("Geisha", "Human", "Knife (as dagger)", "1d4", "A wig and geisha make-up");
	$a20 = array("Geta (sandals) maker", "Human", "Chisel (as dagger)", "1d4", "3 pairs of sandals");
	$a21 = array("Gobo (burdock root) farmer", "Human", "Sickle (as hand-axe)", "1d6", "Bundle of burdock root");
	$a22 = array("Green tea farmer", "Human", "Sickle (as hand-axe)", "1d6", "Jar filled with tea leaves");
	$a23 = array("Haiku poet", "Human", "Short-sword", "1d6", "Calligraphy brush and fine ink");
	$a24 = array("Hair stylist", "Human", "Scissors (as dagger)", "1d4", "Hand mirror");
	$a25 = array("Herbalist", "Human", "Knife (as dagger)", "1d4", "Bundle of herbs");
	$a26 = array("Ikebana florist", "Human", "Knife (as dagger)", "1d4", "Bundle of cut flowers");
	$a27 = array("Indentured servant", "Human", "Club", "1d4", "Small bag filled with dried barley");
	$a28 = array("Inn keeper", "Human", "Club", "1d4", "Tinderbox, flint & steel");
	$a29 = array("Kabuki theatre performer", "Human", "Staff", "1d4", "Theatrical attire");
	$a30 = array("Kimono maker", "Human", "Scissors (as dagger)", "1d4", "Unfinished kimono");
	$a31 = array("Kite maker", "Human", "Knife (as dagger)", "1d4", "Yard of kite fabric");
	
	$a32 = array("Kitsune geisha", "Kitsune", "Dagger", "1d4", "Wig & make-up");
	$a33 = array("Kitsune haiku poet", "Kitsune", "Staff", "1d4", "Quill pen & ink");
	$a34 = array("Kitsune ink merchant", "Kitsune", "Staff", "1d4", "3 vials of ink");
	$a35 = array("Kitsune musician", "Kitsune", "Staff", "1d4", "Koto (harp)");
	$a36 = array("Kitsune painter", "Kitsune", "Staff", "1d4", "Set of paint brushes");
	$a37 = array("Kitsune potter", "Kitsune", "Staff", "1d4", "Clay, 1 lbs");
	$a38 = array("Kitsune sake brewer", "Kitsune", "Club", "1d4", "1 bottle of sake");
	$a39 = array("Kitsune silk dyer", "Kitsune", "Scissors (as dagger)", "1d4", "Silk, 3 yards");
	$a40 = array("Kitsune silk merchant", "Kitsune", "Staff", "1d4", "Kimono");
	$a41 = array("Kitsune sword polisher", "Kitsune", "Short sword", "1d6", "Whetstone");
	
	$a42 = array("Koropokuru acupuncturist", "Koropokuru", "Club", "1d4", "Pouch of acupuncture needles");
	$a43 = array("Koropokuru calligrapher", "Koropokuru", "Sling", "1d4", "A set of calligraphy brushes");
	$a44 = array("Koropokuru fishmonger", "Koropokuru", "Mallet (as Club)", "1d4", "Salted fish");
	$a45 = array("Koropokuru flutist", "Koropokuru", "Walking stick (as staff)", "1d4", "Shakuhachi flute");
	$a46 = array("Koropokuru herbalist", "Koropokuru", "Knife (as dagger)", "1d4", "Herbs, 2 lbs");
	$a47 = array("Koropokuru Noh performer", "Koropokuru", "Club", "1d4", "Make-up set");
	$a48 = array("Koropokuru sushi chef", "Koropokuru", "Knife (as dagger)", "1d4", "Raw fish");
	$a49 = array("Koropokuru taiko drummer", "Koropokuru", "Drumstick (as club)", "1d4", "Taiko drum");
	$a50 = array("Koropokuru tattooist", "Koropokuru", "Needle (as dart)", "1d4", "Vial of ink");
	$a51 = array("Koropokuru woodcarver", "Koropokuru", "Carving knife (as dagger)", "1d4", "Block of wood");
	
	$a52 = array("Koi (carp) breeder", "Human", "Staff", "1d4", "2 lbs of dried fish food");
	$a53 = array("Koto (harp) performer", "Human", "Walking stick (as staff)", "1d4", "Koto (harp)");
	$a54 = array("Lantern maker", "Human", "Chisel (as dagger)", "1d4", "Cast iron lantern");
	$a55 = array("Masseur", "Human", "Walking stick (as staff)", "1d4", "Conical hat");
	$a56 = array("Ningyozukai (puppeteer)", "Human", "Staff", "1d4", "Puppet");
	$a57 = array("Noh theatre performer", "Human", "Staff", "1d4", "Theatrical attire");
	$a58 = array("Palanquin bearer", "Human", "Knife (as dagger)", "1d4", "Wicker backpack");
	$a59 = array("Pauper", "Human", "Walking stick (as staff)", "1d4", "Bag filled with dried red beans");
	$a60 = array("Peasant Levy", "Human", "Spear", "1d8", "Jingasa (conical war helmet)");
	$a61 = array("Potter", "Human", "Staff", "1d4", "5 lbs of clay");
	$a62 = array("Puppet maker", "Human", "Chisel (as dagger)", "1d4", "Puppet");
	$a63 = array("Rice farmer", "Human", "Sickle (as hand-axe)", "1d6", "5 lbs of uncooked rice");
	$a64 = array("Rice-paper maker", "Human", "Knife (as dagger)", "1d4", "3 lbs of uncooked rice");
	$a65 = array("Sailor", "Human", "Spear", "1d8", "Lantern, hooded");
	$a66 = array("Sake brewer", "Human", "Knife (as dagger)", "1d4", "3 bottles of sake");
	$a67 = array("Sansuke (bathhouse attendant)", "Human", "Walking stick (as staff)", "1d4", "Back scrubbing sponge");
	$a68 = array("Scavenger", "Human", "Club", "1d4", "Iron pot");
	$a69 = array("Shakuhachi (flute) performer", "Human", "Staff", "1d4", "Skakuhachi (flute)");
	$a70 = array("Silk dyer", "Human", "Scissors (as dagger)", "1d4", "1 yard of silk");
	$a71 = array("Silk weaver", "Human", "Knife (as dagger)", "1d4", "2 yards of fine silk");
	$a72 = array("Silkworm breeder", "Human", "Knife (as dagger)", "1d4", "Jar filled with silkworm larva");
	$a73 = array("Soya bean famer", "Human", "Sickle (as hand axe)", "1d6", "5 lbs of soya beans");
	$a74 = array("Soya sauce brewer", "Human", "Knife (as dagger)", "1d4", "3 bottles of soy sauce");
	$a75 = array("Storyteller", "Human", "Walking stick (as staff)", "1d4", "Bamboo canteen");
	$a76 = array("Sumo wrestler", "Human", "Walking stick (as staff)", "1d4", "10 lbs of uncooked rice");
	$a77 = array("Sword polisher", "Human", "Short sword", "1d6", "Sword stand");
	$a78 = array("Taiko Drummer", "Human", "Taiko drumsticks x 2 (as clubs)", "1d4", "Taiko drum");
	$a79 = array("Tatami mat maker", "Human", "Hammer (as club)", "1d4", "Silk rope, 50’");
	$a80 = array("Tattoo artist", "Human", "Knife (as dagger)", "1d4", "Needles and inks");
	$a81 = array("Tea ceremony assistant", "Human", "Knife (as dagger)", "1d4", "Jar filled with green tea powder");
	
	$a82 = array("Tengu fisherman", "Tengu", "Knife (as dagger)", "1d4", "Fishing rod");
	$a83 = array("Tengu gambler", "Tengu", "Dagger", "1d4", "Playing cards");
	$a84 = array("Tengu potter", "Tengu", "Staff", "1d4", "Clay pot");
	$a85 = array("Tengu puppet maker", "Tengu", "Staff", "1d4", "3 puppets");
	$a86 = array("Tengu sake taster", "Tengu", "Short sword", "1d6", "3 bottles of sake");
	$a87 = array("Tengu silk merchant", "Tengu", "Short sword", "1d6", "Silk, 3 yards");
	$a88 = array("Tengu tea maker", "Tengu", "Knife (as dagger)", "1d4", "Pouch of fine tea leaves");
	$a89 = array("Tengu tea merchant", "Tengu", "Dagger", "1d4", "Bag filled with tea leaves");
	$a90 = array("Tengu urchin", "Tengu", "Stick (as club)", "1d4", "Begging bowl");
	$a91 = array("Tengu vagabond", "Tengu", "Stick (as club)", "1d4", "Bundle of ratty clothes");
	
	$a92 = array("Thug", "Human", "Mace", "1d6", "Karuta tatami (armour)*");
	$a93 = array("Unskilled labourer", "Human", "Hammer (as club)", "1d4", "Dozen wooden pitons");
	$a94 = array("Vagrant", "Human", "Walking stick (as staff)", "1d4", "Pouch containing dried tea leaves");
	$a95 = array("Village idiot", "Human", "Spear", "1d8", "Conical hat");
	$a96 = array("Wigmaker", "Human", "Knife (as dagger)", "1d4", "Wig");
	$a97 = array("Wokou (pirate)", "Human", "Spear", "1d8", "Conical hat");
	$a98 = array("Woodblock artisan", "Human", "Chisel (as dagger)", "1d4", "Woodblock print");
	$a99 = array("Yakuza (gangster)", "Human", "Short sword", "1d6", "Tattoo needles and ink");
	

        $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19, $a20, $a21, $a22, $a23, $a24, $a25, $a26, $a27, $a28, $a29, $a30, $a31, $a32, $a33, $a34, $a35, $a36, $a37, $a38, $a39, $a40, $a41, $a42, $a43, $a44, $a45, $a46, $a47, $a48, $a49, $a50, $a51, $a52, $a53, $a54, $a55, $a56, $a57, $a58, $a59, $a60, $a61, $a62, $a63, $a64, $a65, $a66, $a67, $a68, $a69, $a70, $a71, $a72, $a73, $a74, $a75, $a76, $a77, $a78, $a79, $a80, $a81, $a82, $a83, $a84, $a85, $a86, $a87, $a88, $a89, $a90, $a91, $a92, $a93, $a94, $a95, $a96, $a97, $a98, $a99);
        
        return $array1[$input];
        
}

function getOccupationNumber($select)
{
	if($select == "1")
	{
        $number = rand(0, 100);
	}
	else if($select == "2")
	{
        $number = rand(31, 100);
	}
	else if($select == "3")
	{
        $number = rand(0, 30);
	}
	else if($select == "4")
	{
        $number = rand(0, 10);
	}
	else if($select == "5")
	{
        $number = rand(11, 20);
	}
	else if($select == "6")
	{
        $number = rand(21, 30);
	}
	else
	{
        $number = rand(98, 100);
	}

        return $number;
}


?>