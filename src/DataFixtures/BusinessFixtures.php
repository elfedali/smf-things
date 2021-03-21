<?php

namespace App\DataFixtures;

use App\Entity\Business;

use App\Repository\CategoryRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class BusinessFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
         
        // $product = new Product();
        // $manager->persist($product);
      
/*
         for ($i = 0; $i < 20; $i++) {
            $business = new Business();
            $business->setName('Business '.$i);
            $business->setSlug('business-shop-'.$i);
            $business->setCover('empty.jpg');
            $business->setCategoryId($this->getReference(Catgory::class.'_0'));
            $manager->persist($business);
        }   
        $manager->flush();*/
    }
    
    public function getDependencies()
    {
       return [
            CatgoryFixtures::class,
       ];
    }
}
