<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Entity\User;


class DefaultController extends Controller
{
    private $texto="";
    /**
     * @Route("/", name="default")
     */
    public function index()
    {
        
        return $this->render('default/login.html.twig', [
            'controller_name' => 'DefaultController',
            'texto'=>$this->texto,
            'error'=>'',
            'last_username'=>''
        ]);
    }
    
    /**
     * @Route("/admin", name="admin")
     * @Template("default/index.html.twig")
     */
    public function admin()
    {
        
        if($this->isGranted('ROLE_ADMIN'))  {
            $texto = "Esse usuário não é administrador";
        }
        
        return [
            'texto'=>$texto
        ];
    }
    
    /**
     * @Route("/admin/dashboard", name="dashboard")
     * @Template("default/dashboard.html.twig")
     */
    public function dashboard()
    {
        return [];
    }
    
    /**
     * @Route("/admin/relatorios", name="relatorios")
     * @Template("default/relatorios.html.twig")
     */
    public function relatorios()
    {
        return [];
    }
    
    /**
     * @Route("/admin/login", name="login")
     * @Template("default/login.html.twig")
     * @param Request $request
     * @param AuthenticationUtils $authUtils
     * @return array
     */
    public function login(Request $request, AuthenticationUtils $utils)
    {
        $error = $utils->getLastAuthenticationError();
        $lastUserName = $utils->getLastUsername();
        //return new Response("<html><body><h1>Admin Me loguei por Form login!!</h1></body></html>");
        return [
            'error'=>$error,
            'last_username'=>$lastUserName
        ];
    }
    
    /**
     * @param Request $request
     * @Route("/insert")
     * @return Response
     */
    public function insert(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $user = new User();
        $user->setUsername("roger");
        $user->setEmail("roger@gmail.com");
        $user->setRoles("ROLE_USER");
        
        $encoder = $this->get('security.password_encoder');
        $pass = $encoder->encodePassword($user, "abc");
        
        
        
        $user->setPassword($pass);
        $em->persist($user);
        
        $user = new User();
        $user->setUsername("admin");
        $user->setEmail("admin@gmail.com");
        $user->setRoles("ROLE_ADMIN");
        
        $encoder = $this->get('security.password_encoder');
        $pass = $encoder->encodePassword($user, "qwe");
        
        $user->setPassword($pass);
        $em->persist($user);
        
        $em->flush();
        
        return new Response("<h1>Inserido com sucesso!!</h1>");
    }
    
}
