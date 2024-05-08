
<!-- RENDER: -->
<!--  HW1: render coordinates : horiz:1,2,3  vertic:a,b,c -->
<!--  HW2: (experiment) use a form  > buttons -->


<div class="hcoords">
    
    <?for($ch=1; $ch < count($map)+1; $ch++){?>
       <span ><?= $ch?></span>
    <?}?>
    
</div>


<div class="vcoords">
    <?for($i=0; $i < count($coordinates); $i++){?>
        <span><?= $coordinates[$i] ?></span>
    <?}?>

    <!-- <? foreach( $coordinates as $coord){ ?>
        <span><?= $coord?></span>
    <?}?> -->
   
</div>

<div class="map">
    <!-- <form action="/" method="POST"> -->

        <? for ($ri = 0; $ri < 10; $ri++) { ?>
                <? for ($ci = 0; $ci < 10; $ci++) { ?>
                        <?
                            $attributes = $map[$ri][$ci] == 1 ? 'class="ship sq"' : 'class="sq" ';
                            $attributes .= 'name="shoot" ';
                            // $attributes .= "formaction='/?shoot={$ri}x{$ci}' ";

                        ?>

                        <a 
                            <?=$attributes?> >                        
                        </a>
                       
                     
    
                <? } ?>
        <? } ?>
    <!-- </form> -->
    
</div>