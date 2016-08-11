<?php

// src/AppBundle/DataFixtures/ORM/LoadUserGroupData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class UserDF extends AbstractFixture implements OrderedFixtureInterface , ContainerAwareInterface {

    public function load(ObjectManager $manager) {


        $temp = array(

            array('usergroup_id' => 'Super admin', 'password' => '123456', 'salt' => 'uOvDnovB68DH', 'email' => 'admnin@fr3sh.pl', 'login' => 'fr3sh', 'username' => 'fr3sh', 'name' => 'Administrator', 'surname' => 'Portalu', 'userlink' => 'administrator-portalu', 'company_name' => NULL, 'nip' => NULL, 'regon' => NULL, 'pesel' => NULL, 'phone' => NULL, 'mobile' => NULL, 'webpage' => NULL, 'additional_information' => NULL, 'signature_seller' => NULL, 'country_id' => 'PL', 'city' => NULL, 'zipcode' => NULL, 'street' => NULL, 'building' => NULL, 'flat' => NULL, 'correspondence_address' => '1', 'correspondence_company_name' => NULL, 'correspondence_city' => NULL, 'correspondence_zipcode' => NULL, 'correspondence_street' => NULL, 'correspondence_building' => NULL, 'correspondence_flat' => NULL, 'register_ip' => NULL, 'last_login' => '2015-08-20 12:35:31', 'last_ip' => '127.0.0.1', 'blocked' => '0', 'enabled' => '1', 'account_non_expired' => '1', 'account_non_locked' => '1', 'credentials_non_expired' => '1', 'deactivation' => '0', 'activation' => '1', 'newsletter' => '0', 'notification' => '1', 'activate_key' => '', 'activate_key_date' => NULL, 'created_by_id' => NULL, 'creation_date' => NULL, 'modify_by_id' => NULL, 'modification_date' => '2015-12-08 12:47:47', 'settlement_period' => 'month', 'vat_type' => '0', 'roles' => 'ROLE_ADMIN',),
            array('usergroup_id' => 'Admin', 'password' => '123456', 'salt' => 'uOvDnovB68DH', 'email' => 'puki66@gmail.com', 'login' => 'puki', 'username' => 'wqe', 'name' => 'Administrator', 'surname' => 'Portalu', 'userlink' => 'administrator-portalu-1', 'company_name' => 'FR3sh', 'nip' => '123456789', 'regon' => '112233445566', 'pesel' => '123456789876', 'phone' => NULL, 'mobile' => NULL, 'webpage' => NULL, 'additional_information' => NULL, 'signature_seller' => NULL, 'country_id' => 'PL', 'city' => 'Wawa', 'zipcode' => '11-11', 'street' => 'brak', 'building' => NULL, 'flat' => NULL, 'correspondence_address' => '1', 'correspondence_company_name' => NULL, 'correspondence_city' => NULL, 'correspondence_zipcode' => NULL, 'correspondence_street' => NULL, 'correspondence_building' => NULL, 'correspondence_flat' => NULL, 'register_ip' => NULL, 'last_login' => '2015-11-04 11:43:04', 'last_ip' => '127.0.0.1', 'blocked' => '0', 'enabled' => '1', 'account_non_expired' => '1', 'account_non_locked' => '1', 'credentials_non_expired' => '1', 'deactivation' => '0', 'activation' => '1', 'newsletter' => '0', 'notification' => '1', 'activate_key' => '', 'activate_key_date' => NULL, 'created_by_id' => NULL, 'creation_date' => NULL, 'modify_by_id' => NULL, 'modification_date' => '2015-12-08 12:47:47', 'settlement_period' => 'month', 'vat_type' => '1', 'roles' => 'ROLE_USER',),
            array('usergroup_id' => 'Client', 'password' => '123456', 'salt' => 'uOvDnovB68DH', 'email' => 'client@fr3sh.pl', 'login' => 'client', 'username' => 'ee', 'name' => 'Użytkownik', 'surname' => 'Zwykły', 'userlink' => 'user', 'company_name' => NULL, 'nip' => NULL, 'regon' => NULL, 'pesel' => NULL, 'phone' => NULL, 'mobile' => NULL, 'webpage' => NULL, 'additional_information' => NULL, 'signature_seller' => NULL, 'country_id' => 'PL', 'city' => NULL, 'zipcode' => NULL, 'street' => NULL, 'building' => NULL, 'flat' => NULL, 'correspondence_address' => '1', 'correspondence_company_name' => NULL, 'correspondence_city' => NULL, 'correspondence_zipcode' => NULL, 'correspondence_street' => NULL, 'correspondence_building' => NULL, 'correspondence_flat' => NULL, 'register_ip' => NULL, 'last_login' => '2015-08-20 12:36:01', 'last_ip' => '127.0.0.1', 'blocked' => '0', 'enabled' => '0', 'account_non_expired' => '0', 'account_non_locked' => '0', 'credentials_non_expired' => '0', 'deactivation' => '0', 'activation' => '1', 'newsletter' => '0', 'notification' => '1', 'activate_key' => '', 'activate_key_date' => NULL, 'created_by_id' => NULL, 'creation_date' => NULL, 'modify_by_id' => NULL, 'modification_date' => '2015-12-08 12:47:47', 'settlement_period' => 'month', 'vat_type' => '0', 'roles' => 'ROLE_EDITOR',),
            array('usergroup_id' => 'Client', 'password' => '123456', 'salt' => 'uOvDnovB68DH', 'email' => 'vip-client@fr3sh.pl', 'login' => 'vip', 'username' => 'frrr3sh', 'name' => 'Użytkownik', 'surname' => 'Vip', 'userlink' => 'user-2', 'company_name' => NULL, 'nip' => '123456789', 'regon' => NULL, 'pesel' => '123456789', 'phone' => NULL, 'mobile' => NULL, 'webpage' => NULL, 'additional_information' => NULL, 'signature_seller' => NULL, 'country_id' => 'PL', 'city' => 'warszawa', 'zipcode' => '49-100', 'street' => 'WRYJA', 'building' => NULL, 'flat' => NULL, 'correspondence_address' => '1', 'correspondence_company_name' => NULL, 'correspondence_city' => NULL, 'correspondence_zipcode' => NULL, 'correspondence_street' => NULL, 'correspondence_building' => NULL, 'correspondence_flat' => NULL, 'register_ip' => NULL, 'last_login' => '2015-09-16 23:08:54', 'last_ip' => '127.0.0.1', 'blocked' => '0', 'enabled' => '0', 'account_non_expired' => '0', 'account_non_locked' => '0', 'credentials_non_expired' => '0', 'deactivation' => '0', 'activation' => '1', 'newsletter' => '0', 'notification' => '1', 'activate_key' => '', 'activate_key_date' => NULL, 'created_by_id' => NULL, 'creation_date' => NULL, 'modify_by_id' => NULL, 'modification_date' => '2015-12-08 12:47:47', 'settlement_period' => 'month', 'vat_type' => '0', 'roles' => 'ROLE_ADMIN',),
            array('usergroup_id' => 'Client', 'password' => '123456', 'salt' => 'uOvDnovB68DH', 'email' => 'accountant@fr3sh.pl', 'login' => 'accauntant', 'username' => 'tttt', 'name' => 'Księgowa', 'surname' => 'Abc', 'userlink' => 'accountant', 'company_name' => NULL, 'nip' => NULL, 'regon' => NULL, 'pesel' => NULL, 'phone' => NULL, 'mobile' => NULL, 'webpage' => NULL, 'additional_information' => NULL, 'signature_seller' => NULL, 'country_id' => 'PL', 'city' => NULL, 'zipcode' => NULL, 'street' => NULL, 'building' => NULL, 'flat' => NULL, 'correspondence_address' => '1', 'correspondence_company_name' => NULL, 'correspondence_city' => NULL, 'correspondence_zipcode' => NULL, 'correspondence_street' => NULL, 'correspondence_building' => NULL, 'correspondence_flat' => NULL, 'register_ip' => NULL, 'last_login' => '2015-11-03 12:00:02', 'last_ip' => '127.0.0.1', 'blocked' => '0', 'enabled' => '0', 'account_non_expired' => '0', 'account_non_locked' => '0', 'credentials_non_expired' => '0', 'deactivation' => '0', 'activation' => '1', 'newsletter' => '0', 'notification' => '1', 'activate_key' => '', 'activate_key_date' => NULL, 'created_by_id' => NULL, 'creation_date' => NULL, 'modify_by_id' => NULL, 'modification_date' => '2015-12-08 12:47:47', 'settlement_period' => 'month', 'vat_type' => '0', 'roles' => 'ROLE_ADMIN',),
            array('usergroup_id' => 'Client', 'password' => '123456', 'salt' => 'uOvDnovB68DH', 'email' => 'senior-accountant@fr3sh.pl', 'login' => 'none', 'username' => 'rerg', 'name' => 'Starsza', 'surname' => 'Accountant', 'userlink' => 'starsza-accountant', 'company_name' => NULL, 'nip' => NULL, 'regon' => NULL, 'pesel' => NULL, 'phone' => '123-456-546', 'mobile' => '', 'webpage' => NULL, 'additional_information' => NULL, 'signature_seller' => NULL, 'country_id' => 'PL', 'city' => NULL, 'zipcode' => NULL, 'street' => NULL, 'building' => NULL, 'flat' => NULL, 'correspondence_address' => '1', 'correspondence_company_name' => NULL, 'correspondence_city' => NULL, 'correspondence_zipcode' => NULL, 'correspondence_street' => NULL, 'correspondence_building' => NULL, 'correspondence_flat' => NULL, 'register_ip' => NULL, 'last_login' => '2015-10-23 19:00:42', 'last_ip' => '127.0.0.1', 'blocked' => '0', 'enabled' => '0', 'account_non_expired' => '0', 'account_non_locked' => '0', 'credentials_non_expired' => '0', 'deactivation' => '0', 'activation' => '1', 'newsletter' => '0', 'notification' => '1', 'activate_key' => '', 'activate_key_date' => NULL, 'created_by_id' => NULL, 'creation_date' => NULL, 'modify_by_id' => '8', 'modification_date' => '2015-06-04 21:59:43', 'settlement_period' => 'month', 'vat_type' => '0', 'roles' => 'ROLE_USER',),
        );

        //old symfony
    //    $encoderfactory = $this->container->get('security.encoder_factory');
        
        //new symfony
        $encoderfactory = $this->container->get('security.password_encoder');
 
        foreach ($temp as $t) {
            
           
            
            $user = new User();
            
            //old symfony 
          //  $password = $encoderfactory->getEncoder($user)->encodePassword($t['password'],null);
            
            //new symfony
            $password = $encoderfactory->encodePassword($user, $t['password']);
            
            
 //           INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, 
 //           `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `country_id`, 
 //           `imie`, `nazwisko`, `firma`, `nip`, `newsletter`, `notification`, `created_by_id`, `creation_date`, `modify_by_id`, `modification_date`, 
 //           `nrdomu`, `nrmieszkania`, `kod`, `miasto`, `nrtelefonu`, `abonament`) VALUES
//(1, 'fr3sh', 'fr3sh', 'puki66@gmail.com', 'puki66@gmail.com', 1, '1s602oc6tjgkoo4kkog0sg8gg80g8cc', '$2y$13$JSqKMaeTWnk7KF5IQRNZtuQwlsI5TwKxkwM46e2CcjPq4WnZQ46iG', '2016-04-11 18:46:05', 0, 0, NULL, 'c7l-qHBCn5j0cxOpEfd45dR0VfI6qXa0JTkHw-X40Uk', '2016-04-13 22:49:04', 'a:0:{}', 0, NULL, NULL, '', '', '', 0, 0, 0, NULL, NULL, NULL, NULL, 0, NULL, '', '', 0, '');
     
            
             array('username' => 'Testowy', 'usernameCanonical' => 'Testowy','email' => 'testowy@op.pl','emailCanonical' => 'testowy@op.pl',
                 'enabled' => 1,'$password' => 'test1','last_login' => '2015-06-04 21:59:43','locked' => 0,
                 'expired' => 0,'expiresAt' => '2015-06-04 21:59:43','confirmationToken' => 'none','passwordRequestedAt' => '2015-06-04 21:59:43',
                 'roles' => 'Super admin','credentialsExpireAt' => '2015-06-04 21:59:43','credentialsExpired' => 0,'country_id' => 'PL', 
                 'imie' => 'Test','nazwisko' => 'test2','firma' => 'brak','nip' => NULL,
                 'newsletter' => 0,'notification' => 0,'createdById' => NULL,'creationDate' => NULL,
                 'modifyById' => 0,'modificationDate' => NULL,'nrdomu' => NULL ,'nrmieszkania' => NULL,
                 'kod' =>  NULL, 'miasto' => NULL,'nrtelefonu' => NULL ,'lastIp' => NULL,
                 'pesel' => NULL,'registerIp' => NULL,'regon' => NULL ,'ulica' => NULL);
             
            // $user->setId($t['id']);
             $user->setUsername($t['username']);
             $user->setUsernameCanonical($t['usernameCanonical']);
             $user->setEmail($t['email']);
             $user->setEmailCanonical($t['emailCanonical']);
             $user->setEnabled($t['enabled']);
             $user->setPassword($password);
             $user->setLastLogin(new \DateTime($t['last_login']));
             $user->setLocked($t['locked']);
             $user->setExpired($t['expired']);
             $user->setExpiresAt(new \DateTime($t['expiresAt']));
             $user->setConfirmationToken($t['confirmationToken']);
             $user->setPasswordRequestedAt(new \DateTime($t['passwordRequestedAt']));
             $user->setRoles($t['roles']); 
             $user->setCredentialsExpireAt(new \DateTime($t['credentialsExpireAt']));
             $user->setCredentialsExpired($t['credentialsExpired']);
             $user->setCountry($this->getReference('country_' . $t['country_id']));
             $user->setImie($t['imie']);
             $user->setNazwisko($t['nazwisko']);
             $user->setFirma($t['firma']);
             $user->setNip($t['nip']);
             $user->setNewsletter($t['newsletter']);
             $user->setNotification($t['notification']);
             $user->setCreatedById($t['createdById']);
             $user->setCreationDate(new \DateTime($t['creationDate']));
             $user->setModifyById($t['modifyById']);
             $user->setModificationDate(new \DateTime($t['modificationDate']));
             $user->setNrdomu($t['nrdomu']);
             $user->setNrmieszkania($t['nrmieszkania']);
             $user->setKod($t['kod']);
             $user->setMiasto($t['miasto']);
             $user->setNrtelefonu($t['nrtelefonu']);
             $user->setAbonament($t['abonament']);
             $user->setLastIp($t['lastIp']);
             $user->setPesel($t['pesel']);
             $user->setRegisterIp($t['registerIp']);
             $user->setRegon($t['regon']);
             $user->setUlica($t['ulica']);

    
            $manager->persist($user);

            // $this->setReference('user_'.$name, $userGroup); //ustawienie referencji by mozna było powiązać i przypisac w userach 
        }
        $manager->flush();
    }

    public function getOrder() {
        return 2;
    }

    /**
     *
     * @var ContainerInterface 
     */    
    private $container;
    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }

}
