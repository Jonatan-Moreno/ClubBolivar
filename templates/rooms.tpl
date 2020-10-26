<link rel="stylesheet" type="text/css" href="css/style.css">
<ul>
    
        {foreach from=$rooms item=room} 
            <li
                
                {if $room->ocupada eq 1}
                    >{$room->nro_habitacion}ocupada
                {/if}
                {if $room->ocupada eq 0}
                    class = verde>{$room->nro_habitacion} libre
                {/if}

            </li>
        {/foreach}
    
</ul>

