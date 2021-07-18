<?php 



$categories = [
    [   
    'id' => 1,
    'name' => 'Men',
    'slug' => 'men',
    'children' => [
            [
                'id' => 4,
                'name' => 'Shirts',
                'slug' => 'shirts',
                'children' => [
                    [   
                        'id' => 7,
                        'name' => 'Plain shirts',
                        'slug' => 'plain-shirts'
                    ],
                    [
                        'id' => 8,
                        'name' => 'Denim shirts',
                        'slug' => 'denim-shirts'
                    ]
                ]
            ],
            [
                'id' => 5,
                'name' => 'Shoes',
                'slug' => 'shoes'
            ],
            [
                'id' => 6,
                'name' => 'Bags',
                'slug' => 'bags'
            ]

        ]
    ],
    [
        'id' => 2,
        'name' => 'Women',
        'slug' => 'women',
    ],
    [
        'id' => 3,
        'name' => 'Kids',
        'slug' => 'kids'
    ]
 
];


$final_category_ids = [];

function recursion_get_all_category_ids($sub_categories,$final_category_ids){
    foreach ($sub_categories as $key => $item) {

        array_push($final_category_ids,$item['slug']);

        if(!empty($item['children'])){
            $final_category_ids = recursion_get_all_category_ids($item['children'],$final_category_ids);
        }
       
    }
     return $final_category_ids;
}



$final_return_array = recursion_get_all_category_ids($categories[0]['children'],$final_category_ids);


echo '<br><br>';
echo 'final return array';
print_r($final_return_array);
