<?php

namespace App\DataFixtures;

use App\Entity\Etat;
use App\Entity\Produit;
use App\Entity\TypeProduit;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $this->typeProduit($manager);
        $this->produit($manager);
        $this->etat($manager);
        $this->user($manager);
        $manager->flush();
    }

    public function typeProduit(ObjectManager $manager){
        $datas = [
            ["libelle" => "Fourniture de bureau"],
            ["libelle" => "Mobilier"],
            ["libelle" => "Mobilier Jardin"],
            ["libelle" => "Arrosage"],
            ["libelle" => "Outils"],
            ["libelle" => "Divers"]
        ];
        foreach ($datas as $data) {
            $typeProduit = new TypeProduit();
            $typeProduit->setLibelle($data["libelle"]);
            $manager->persist($typeProduit);
            $manager->flush();
        }
    }

    public function produit(ObjectManager $manager){
        $datas = [
            [ 'nom' => 'Enveloppes (50p)', 'prix' => '2', 'stock' => '3', 'disponible' => true, 'typeProduit'  => 'Fourniture de bureau', 'photo' => ''],
            [ 'nom' => 'Stylo noir', 'prix' => '1', 'stock' => '13', 'disponible' => false, 'typeProduit'  => 'Fourniture de bureau', 'photo' => 'stylo.jpeg'],
            [ 'nom' => 'Boite de rangement', 'prix' => '3', 'stock' => '12', 'disponible' => true, 'typeProduit'  => 'Fourniture de bureau', 'photo' => 'boites.jpeg'],
            [ 'nom' => 'Chaise', 'prix' => '40', 'stock' => '3', 'disponible' => true, 'typeProduit'  => 'Mobilier', 'photo' => 'chaise.jpeg'],
            [ 'nom' => 'Tables', 'prix' => '200', 'stock' => '3', 'disponible' => true, 'typeProduit'  => 'Mobilier', 'photo' => 'table.jpeg'],
            [ 'nom' => 'Salon de Jardin alu', 'prix' => '149', 'stock' => '3', 'disponible' => true, 'typeProduit'  => 'Mobilier Jardin', 'photo' => 'salonJardin2.jpg'],
            [ 'nom' => 'Table+6 fauteuilles de Jardin', 'prix' => '790', 'stock' => '3', 'disponible' => true, 'typeProduit'  => 'Mobilier Jardin', 'photo' => 'tableFauteuilsJardin1.jpg'],
            [ 'nom' => 'Set Table + 4 bancs', 'prix' => '229', 'stock' => '3', 'disponible' => true, 'typeProduit'  => 'Mobilier Jardin', 'photo' => 'setTableChaises.jpg'],
            [ 'nom' => 'arrosoir bleu', 'prix' => '13.50', 'stock' => '3', 'disponible' => true, 'typeProduit'  => 'Arrosage', 'photo' => 'arrosoir1.jpg'],
            [ 'nom' => 'arrosoir griotte', 'prix' => '9.90', 'stock' => '3', 'disponible' => true, 'typeProduit'  => 'Arrosage', 'photo' => 'arrosoir2.jpg'],
            [ 'nom' => 'tuyau arrosage', 'prix' => '31.90', 'stock' => '3', 'disponible' => true, 'typeProduit'  => 'Arrosage', 'photo' => 'tuyauArrosage1.jpg'],
            [ 'nom' => 'tournevis', 'prix' => '23.90', 'stock' => '3', 'disponible' => true, 'typeProduit'  => 'Outils', 'photo' => 'lotTourneVis.jpg'],
            [ 'nom' => 'marteau menuisier', 'prix' => '7.80', 'stock' => '3', 'disponible' => true, 'typeProduit'  => 'Outils', 'photo' => 'marteau.jpg'],
            [ 'nom' => 'pince multiprise', 'prix' => '21.80', 'stock' => '3', 'disponible' => true, 'typeProduit'  => 'Outils', 'photo' => 'pinceMultiprise.jpg'],
            [ 'nom' => 'perceuse', 'prix' => '149.80', 'stock' => '3', 'disponible' => true, 'typeProduit'  => 'Outils', 'photo' => 'perceuse.jpg'],
        ];
        foreach ($datas as $data)
        {
            $produit = new Produit();
            $produit->setNom($data['nom']);
            $produit->setPrix($data['prix']);
            $produit->setPhoto($data['photo']);
            $produit->setStock($data['stock']);
            if($data['stock'] <10)
                $produit->setDateLancement(\DateTime::createFromFormat('Y-m-d','2020-10-19'));
            else
                $produit->setDateLancement(new \DateTime());
            $produit->setDisponible($data['disponible']);
            $type_produit = $manager->getRepository(TypeProduit::class)->findOneBy(["libelle"  =>  $data['typeProduit']] );
            $produit->setTypeProduit($type_produit);
            $manager->persist($produit);
            $manager->flush();
        }
    }

    public function etat(ObjectManager $manager){
        $datas = [
            ["libelle" => "En preparation"],
            ["libelle" => "Expédier"],
        ];

        foreach ($datas as $data){
            $etat = new Etat();
            $etat->setNom($data["libelle"]);
            $manager->persist($etat);
            $manager->flush();
        }
    }

    public function user(ObjectManager $manager){
        $datas = [
            ["username" => "admin", "mdp" => "admin", "role" => ["ROLE_ADMIN"]],
            ["username" => "user1", "mdp" => "user1", "role" => ["ROLE_USER"]],
            ["username" => "user2", "mdp" => "user2", "role" => ["ROLE_USER"]],
        ];

        foreach ($datas as $data){
            $user = new User();
            $user->setUsername($data["username"]);
            $user->setRoles($data["role"]);
            $user->setPassword($this->passwordEncoder->encodePassword($user,$data["mdp"]));
            $manager->persist($user);
            $manager->flush();
        }

    }
}
