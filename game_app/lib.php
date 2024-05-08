<?
    const NO_SHOT = 0;
    const SHOT = 1;
    const NO_SHIP = 0;
    const SHIP = 1;


    function render_map($map_ship, $map_state) {
        
        $html = '<div class="map">';

            for ($ri = 0; $ri < 10; $ri++) { 
                for ($ci = 0; $ci < 10; $ci++) { 

                    if ($map_state[$ri][$ci] == NO_SHOT ) {
                        $attributes = 'class="sq" ';
                    } elseif ($map_state[$ri][$ci] == SHOT && $map_ship[$ri][$ci] == NO_SHIP ) {
                        $attributes = 'class="miss sq" ';
                    } elseif ($map_state[$ri][$ci] == SHOT && $map_ship[$ri][$ci] == SHIP ) {
                        $attributes = 'class="hit sq" ';
                    }



                        
                        $attributes .= "href='/?shoot={$ri}x{$ci}' ";

                        

                        $html .= "<a $attributes ></a>";
                    
                }
            }
    
        $html .= '</div>';

        return $html;

    };


    function shoot($map, $coords) {
        if($coords) {
            $map[$coords[0]][$coords[1]] = 1;
        }

        return $map;
    };





    function process_request($request) {

    }



    function get_coords ($request) {
        if (isset($request['shoot'])) {   // '5x5' - string
            $coords = explode('x', $request['shoot']);
            return $coords;
        }
        return false;
    }



    function save_map($map, $map_name) {
        file_put_contents("./data/{$map_name}.json", json_encode($map));

    }

    function load_map($map_name) {
        return json_decode( file_get_contents("./data/{$map_name}.json"), true );
    }






    function load_users() {
        return json_decode( file_get_contents("./data/users.json"), true );
    }

    function user_exists($users) {
        // $found = false;
        // for ($i = 0; $i < count($users); $i++) {
            //     if ($users[$i]['username'] == $username && $users[$i]['password'] == $password) {
                //         $found = true;
                //         break;
                //     }
                // }
                
         // HW1: rewrite this algorith array.filter()  & git commit variants
        $found = array_filter($users, function ($user) {
            return  $user['username'] == $_POST['username'] && $user['password'] == $_POST['password'];
        });
        // var_dump($found);
        return $found;
    }


