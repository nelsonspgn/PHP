<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<style>

td {
  border: 1px solid black;
  width : 50px;
  height : 50px;
  text-align : center;
  margin : 0px;
  padding : 0px;
  cellpadding : 0px;
}

</style>

    <table>       
        <?php
            for ( $i = 1 ; $i <= 5 ; $i++ ){
                echo "<tr>";
                
                for ( $j = 1 ; $j <= 5 ; $j++ ){
                    echo "<td>";
                    echo "$i".",$j";
                    echo "</td>";                  
                }  
                echo "</tr>";
            }
        ?>
    </table>


    <table>
        <!-- Cara Penulisan lain tanda } tutup dibuka tag php lagi -->
        <?php  for ( $i = 1 ; $i <= 5 ; $i++ ){ ?>
            <tr>

            <?php  for ( $j = 1 ; $j <= 5 ; $j++ ){ ?>
            <td><?php echo "$i, $j"; ?></td>
            <?php } ?>

            </tr>
        <?php } ?>
    </table>

    <table>
        <!-- Cara Penulisan lain tanda { diganti menjadi : dan tanda } diganti menjadi endfor -->
        <?php  for ( $i = 1 ; $i <= 5 ; $i++ ) : ?>
            <tr>

            <?php  for ( $j = 1 ; $j <= 5 ; $j++ ): ?>
            <td><?php echo "$i, $j"; ?></td>
            <?php endfor; ?>

            </tr>
            <?php endfor; ?>
    </table>

    <table>
        <!-- Cara Penulisan lain tag "php echo" diganti menjadi = -->
        <?php  for ( $i = 1 ; $i <= 5 ; $i++ ) : ?>
            <tr>

            <?php  for ( $j = 1 ; $j <= 5 ; $j++ ): ?>
            <td><?= "$i, $j"; ?></td>
            <?php endfor; ?>

            </tr>
            <?php endfor; ?>
    </table>
  

      




</body>
</html>
