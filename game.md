






# PHP / mid / SEA BATTLE
    > basics
    > flow
    > structure
    > GET/POST HTTP
    > modules / include
    > functions
    > files

    > multiplayer
    > hosting
    > docker
    > git

    >* oop basics
    >* psr, composer, libs






# GAME / APP
    > 2d array (indexed array) 


    


    $map = [
        [1, 0, 0, 0, 0, 0, 0, 0, 0, 1],  <---$row = $map[0]
        [0, 0, 0, 1, 0, 1, 0, 1, 0, 0],     
        [0, 0, 0, 1, 0, 1, 0, 1, 0, 0],
        [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
        [0, 0, 0, 1, 0, 1, 0, 0, 0, 0],
        [0, 0, 0, 1, 0, 1, 0, 0, 0, 0],
        [0, 0, 0, 1, 0, 1, 0, 0, 0, 0],
        [0, 0, 0, 0, 0, 0, 0, 1, 0, 0],
        [0, 0, 0, 0, 0, 0, 0, 1, 0, 0],
        [0, 0, 0, 0, 0, 0, 0, 1, 0, 0],
        [1, 0, 0, 0, 0, 0, 0, 1, 0, 1],  
    ];                  ^
                     $row[5]
                    ----------
                    $map[9][5]








# fix the refresh / shoot
Facem click pe un patratel- variabila shoot memoreaza coord,
 cu ajutorul header () dupa ce facem refresh , redirectionam pe pagina principala /.
 Asta inseamna 2 req catre server pe adrese diferite.

 Header sunt metadate, sunt informatii ascunse care se transmit paralel cu continul rrequest-ului BODY. Se  vad in network

 click
   |
   v
+------+
| <a>  |  ----------GET req /?shoot=6x6-----+ 
+------+                                    |
                                    processing shoot
                                            |
                                            +---- header()
                                            |
                                         render
          Location: /                       |
             v                              |
            [HHH][BBBB]                     |
<-----------------res-----------------------+
/?shoot=6x6
|
v
------- redirect ---------- GET req ---------+
                                             |
                                          render
                                             |
<-----------------res-----------------------+
/











before functions
index.php
    |
    |
    +---- <  require_once 'lib.php'
    |                       |
    |                       +---- render_map()
    |
    |
    |
    |
    +----- < require_once 'input.php' 
    |
    +----- < require_once 'map.php'
    |                       |
    |                       +---- $map
    |
    +----- < require_once 'template.php'




after functions ,one map
index.php
    |
    |
    |
    |
    +---- <  require_once 'lib.php'
    |                       |
    |                       +---- render_map()
    |
    +---- $map = load_map() <---- map.json
    |
    |
    +----  $coords = get_coords($_GET)
    |           |
    |           +---------------+
    |                           v
    +--- $map = shoot($map,$coords)
    |       |
    |       +--------+------+
    |                v      |
    +--- render_map($map)   |
    |                 +-----+
    |                 v   
    +--- save_map($map) -----> map.json    






lib.php
    \
+--------------------+
|                    |
|                    |
|                    |
|                    |
|                    |
|                    |
|                    |
|                    |
+--------------------+



     consumer  (call)                           provider  (providing)  SRP single Responsability Principle


                                    |   
          +---- call ------------------------------+
          v                         |              v
        f(args)                     |   function f() {
                                    |       |
        ^                           |       +-- ins1
        |                           |       |
        |                           |       +-- ins2
        |                           |
        |                           |
        |                           |   }
        |                           |             | "<div>This is the map</div>";
        <---------- return val --------------------
                                    |  
                                    |
                                    |
                                Interface







## sea battke p3
    SHIPS                               STATE
    0 - water                       0 - not shot
    1 -  ship                       1 - shot
+--------------------+         +--------------------+                < ----------- shot -------
|  0 0 1 0 0         |         | 0 0 0 0 0 ...      |                  ----------- render ------>
|                    |         |                    |
|                    |         |                    |
|                    |         |                    |
|                    |         |                    |
|                    |         |                    |
|                    |         |                    |
|                    |         |                    |
+--------------------+         +--------------------+     


# HW1: register the shot ---> map state