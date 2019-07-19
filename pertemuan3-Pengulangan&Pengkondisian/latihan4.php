<!-- warna berbeda pada baris genap -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

    .tdwarna {
  border: 1px solid black;
  width : 50px;
  height : 50px;
  text-align : center;
  margin : 0px;
  padding : 0px;
  cellpadding : 0px;
  background-color: salmon;
    }


    </style>
</head>
<body>
      
            <table>       
                    <?php  for ( $i = 1 ; $i <= 5 ; $i++ ) : ?>

                        <?php if ( $i % 2 == 0) : ?>
                            <tr class="tdwarna">
                        <?php else : ?>
                            <tr>
                         <?php endif; ?>

                        <?php  for ( $j = 1 ; $j <= 5 ; $j++ ): ?>
                             <td><?= "$i, $j"; ?></td>
                        <?php endfor; ?>

                            </tr>
                    <?php endfor; ?>
                </table>
</body>
</html>






