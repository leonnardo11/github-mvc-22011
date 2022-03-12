<?php 
        foreach($paises as $pais){
            echo "<tr><td>País: #{$pais['id']} <br>{$pais['pais']} <td></tr>\n";
         }

         $nomePais = 'China';
         switch ($nomePais) {
             case 'China':
                echo '<script>alert("Você esta na China")</script>';
                 break;
            case 'Coreia do Norte':
                echo '<script>alert("Você está na Coreia do Norte")</script>';
            break;
            case 'Russia':
                echo '<script>alert("Você está na Rússia")</script>';
            break;
             default:
             echo '<script>alert("Você não esta em Local nenhum")</script>';
            break;
         }
    ?>