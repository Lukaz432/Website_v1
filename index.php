<?php

$drinks = [
    [
       'name' => 'Vilkmerges Alus',
       'price_stock' => 2.5,
       'discount' => 0,
       'img' => 'https://www.barbora.lt/api/Images/GetInventoryImage?id=7acd8bad-f09a-470c-9646-e134ddeee5d7',
    ],
    [
       'name' => 'Kalnapilio Alus',
       'price_stock' => 2.5,
       'discount' => 5,
       'img' => 'http://intermarket.lt/image/cache/catalog/Alkoholiniai%20g%C4%97rimai,%20cigaret%C4%97s/Alus/_DSC1678%20as%20Smart%20Object-1%20copy-1000x1000.png',
    ],
    [
       'name' => 'Raudonu Plytu Alus',
       'price_stock' => 3.0,
       'discount' => 10,
       'img' => 'https://www.barbora.lt/api/Images/GetInventoryImage?id=2a6b2198-e0ae-4bc8-afea-13d4ef200809',
    ],
    [
       'name' => 'Volfas Engerlman Alus',
       'price_stock' => 3.5,
       'discount' => 15,
       'img' => 'https://www.barbora.lt/api/Images/GetInventoryImage?id=790702e3-2daf-46b0-8694-798933ebb539',
    ],
    [
       'name' => 'Heineken Alus',
       'price_stock' => 4.0,
       'discount' => 20,
       'img' => 'https://us.123rf.com/450wm/ultimagaina/ultimagaina1603/ultimagaina160300031/55062044-usa-imported-heineken-beer-bottle-heineken-is-a-popular-dutch-pale-lager-beer-produced-by-the-dutch-.jpg?ver=6',
    ],  
];
foreach ($drinks as $key => $drink) {
    $drinks[$key]['price_retail'] = $drink['price_stock'] * (1 - $drink['discount'] * 0.01);
    $drinks[$key]['price_retail_display'] = "&euro;" . number_format($drinks[$key]['price_retail'], 2);

    if ($drink['discount']) {
        $drinks[$key]['price_stock_display'] = "&euro;" . number_format($drinks[$key]['price_stock'], 2);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Private Dealer</title>
        <style>            
            .drinks-container {
                max-width: 800px;
                position: relative;
                display: flex;               
            }

            .drink {
                position: relative;
                display: inline-block;
                margin: 10px;
                border: 1px solid gray;
                height: 250px;
                width: 200px;
                text-align: center;
            }

            .drink-image {
                object-fit: cover;
                height: 150px;
                margin: 0 auto;
            }

            .drink-name {
                font-size: 16px;
            }

            .price {
                display: block;
                position: absolute;                
                color: white;
                padding: 4px;
            }

            .price.stock {
                background: gray;
                left: 0;
                top: 0;
            }

            .price.retail {
                background: red;
                right: 0;
                top: 0;        
                padding: 6px;
            }
        </style>
    </head>
    <body>
        <div class="drinks-container">
            <?php foreach ($drinks as $key => $drink): ?>
                <div class="drink">
                    <?php if (isset($drink['price_stock_display'])): ?>
                        <div class="price stock"><?php print $drink['price_stock_display']; ?></div>
                    <?php endif; ?>
                    <div class="price retail"><?php print $drink['price_retail_display']; ?></div>
                    <img class="drink-image" src="<?php print $drink['img']; ?>">
                    <div class="drink-name"><?php print $drink['name']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>