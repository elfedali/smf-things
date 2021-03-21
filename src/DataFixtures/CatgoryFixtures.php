<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CatgoryFixtures extends Fixture
{
    private $category_list = [
        [
            'name' => 'Appliances',
            'slug' => 'appliances',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Apps & Games',
            'slug' => 'apps-games',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Arts, Crafts, & Sewing',
            'slug' => 'arts-crafts-&-sewing',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Automotive Parts & Accessories',
            'slug' => 'automotive-parts-accessories',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Baby',
            'slug' => 'baby',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Beauty & Personal Care',
            'slug' => 'beauty-personal-care',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Books',
            'slug' => 'books',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'CDs & Vinyl',
            'slug' => 'cds-vinyl',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Cell Phones & Accessories',
            'slug' => 'cell-phones-accessories',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Clothing, Shoes and Jewelry',
            'slug' => 'clothing-shoes-and-jewelry',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Collectibles & Fine Art',
            'slug' => 'collectibles-fine-art',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Computers',
            'slug' => 'computers',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Electronics',
            'slug' => 'electronics',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Garden & Outdoor',
            'slug' => 'garden-outdoor',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Grocery & Gourmet Food',
            'slug' => 'grocery-gourmet-food',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Handmade',
            'slug' => 'handmade',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Health, Household & Baby Care',
            'slug' => 'health-household-baby-care',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Home & Kitchen',
            'slug' => 'home-kitchen',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Industrial & Scientific',
            'slug' => 'industrial-scientific',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Kindle',
            'slug' => 'kindle',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Luggage & Travel Gear',
            'slug' => 'luggage-travel-gear',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Movies & TV',
            'slug' => 'movies-tv',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Musical Instruments',
            'slug' => 'musical-instruments',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Office Products',
            'slug' => 'office-products',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Pet Supplies',
            'slug' => 'pet-supplies',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Premium Beauty',
            'slug' => 'premium-beauty',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Sports & Outdoors',
            'slug' => 'sports-outdoors',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Tools & Home Improvement',
            'slug' => 'tools-home-improvement',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'name' => 'Toys & Games',
            'slug' => 'toys-games',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'slug' => 'video-games',
            'name' => 'Video Games',
            'body' => 'Simple description for this category',
            'parent_id' => null,
            'order' => 1,
        ],
    ];

    public function load(ObjectManager $manager)
    {
         
        $category = null;
        $index = 0;
        foreach ($this->category_list as $categoy_item) {
            $category = new Category();
            $category->setName($categoy_item['name']);
            $category->setSlug($categoy_item['slug']);
            $manager->persist($category);
          
           //  $this->addReference('Category_' . $index, $category);
             //$index++;
        }
        $manager->flush();
    }
}
